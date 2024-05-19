<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Services\RiotService;

class Summoner extends Model
{
    use HasFactory;
    protected string $name;
    protected string $tag;
    protected string $region;
    public RiotService $riotService;

    public function __construct(string $name, string $tag, string $region)
    {
        $this->name = $name;
        $this->tag = $tag;
        $this->region = $region;
    }

    public function execute()
    {
        // CURRENT PATCH INFO /////////////////////////////
        $CURRENT_PATCH = RiotService::getLatestGameVersion(); // última versión del juego

        $PUUID = RiotService::getAccountByPuuid($this->name, $this->tag, $this->region); // nombre de invocador

        if (is_null($PUUID) || !isset($PUUID['puuid'])) {
            throw new \Exception('Error retrieving PUUID');
        }

        $SUMMONER_DATA = RiotService::getSummonerDataByPuuid($PUUID['puuid'], $this->region); // información del invocador

        if (is_null($SUMMONER_DATA) || !isset($SUMMONER_DATA['id'])) {
            throw new \Exception('Error retrieving Summoner Data');
        }

        $LEAGUE_ENTRIES = RiotService::getLeagueEntriesBySummonerId($SUMMONER_DATA['id'], $this->region); // información de las ligas

        $MACH_ENTRIES = RiotService::getMatchHistoryByPuuid($PUUID['puuid'], $this->region); // array de id de partidas

        $RETURN_DATA = $this->decoreInfo($CURRENT_PATCH, $PUUID, $SUMMONER_DATA, $LEAGUE_ENTRIES, $MACH_ENTRIES);

        return $RETURN_DATA;
    }


    // services //////////////////////////

    protected function decoreInfo($currentPatch, $puuid, $summonerData, $leagueEntries, $machEntries)
    {
        $league = $this->getLeagueEntries($leagueEntries);
        $gameStats = [];
        foreach ($machEntries as $matchId) {
            $machInstance = RiotService::getMatchDataByMatchId($matchId, $this->region);

            if (is_null($machInstance) || !isset($machInstance['info'])) {
                continue;
            }

            $participantsData = $this->getParticipantsData($machInstance['info']['participants'] ?? [], $machInstance['info']['gameDuration'] ?? 0);
            $generalGameData = $this->getGeneralGameData($machInstance['info'] ?? []);
            $arrayTeams = $this->getTeamData($machInstance['info']['teams'] ?? []);
            $gameStats[] = ["generalGameData" => $generalGameData, "teams" => $arrayTeams, "game" => $participantsData];
        }

        $performance = $this->getPerformance($gameStats);

        $returnData = [
            "gameName" => $puuid['gameName'] ?? '',
            "tagLine" => $puuid['tagLine'] ?? '',
            "profileIconId" => $summonerData['profileIconId'] ?? 0,
            "summonerLevel" => $summonerData['summonerLevel'] ?? 0,
            "patch" => $currentPatch,
            "rankedSolo" => $league['rankedSolo'],
            "rankedFlex" => $league['rankedFlex'],
            "performance" => $performance,
            "games" => $gameStats
        ];

        return $returnData;
    }

    protected function getPerformance($arrayGames)
    {
        $total = [];

        foreach ($arrayGames as $game) {
            if (isset($game['game'][10]['ownData'])) {
                $total[] = $game['game'][10]['ownData'];
            }
        }

        // TOTAL
        $countsTotal = $this->processPerformanceFunction($total);

        $returnArray = ["total" => $countsTotal, "rankedSolo" => [0], "rankedFlex" => [0]];

        return $returnArray;
    }

    function processPerformanceFunction($championData)
    {
        $counts = [];
        // Iterar sobre los datos de los campeones
        foreach ($championData as $data) {
            $championId = $data['championId'];

            if (!isset($counts[$championId])) {
                $counts[$championId] = [
                    'champId' => $championId,
                    'counts' => 0,
                    'totalKills' => 0,
                    'totalDeaths' => 0,
                    'totalAssists' => 0,
                    'totalKDA' => 0,
                    'totalWins' => 0,
                ];
            }

            $counts[$championId]['counts']++;
            $counts[$championId]['totalKills'] += $data['kills'] ?? 0;
            $counts[$championId]['totalDeaths'] += $data['deaths'] ?? 0;
            $counts[$championId]['totalAssists'] += $data['assists'] ?? 0;
            $counts[$championId]['totalKDA'] += $data['kda'] ?? 0;
            $counts[$championId]['totalWins'] += $data['win'] ? 1 : 0;
        }

        $result = [];
        // Obtener las estadísticas de todas las partidas
        foreach ($counts as $championId => $data) {
            $result[] = [
                'champId' => $championId,
                'counts' => $data['counts'],
                'totalKills' => $data['totalKills'] / $data['counts'],
                'totalDeaths' => $data['totalDeaths'] / $data['counts'],
                'totalAssists' => $data['totalAssists'] / $data['counts'],
                'totalKDA' => $data['totalKDA'] / $data['counts'],
                'totalWins' => $data['totalWins'],
                'winrate' => ($data['totalWins'] / $data['counts']) * 100,
            ];
        }

        // Ordenar el resultado por 'counts' en orden descendente
        usort($result, function ($a, $b) {
            return $b['counts'] <=> $a['counts'];
        });

        return $result;
    }

    protected function getLeagueEntries($leagueEntries)
    {
        if (!is_array($leagueEntries) || empty($leagueEntries)) {
            return ["rankedSolo" => ["queueType" => "UNRANKED"], "rankedFlex" => ["queueType" => "UNRANKED"]];
        }

        switch (count($leagueEntries)) {
            case 1:
                if ($leagueEntries[0]['queueType'] == "RANKED_SOLO_5x5") {
                    return [
                        "rankedSolo" => [
                            "queueType" => $leagueEntries[0]['queueType'],
                            "tier" => $leagueEntries[0]['tier'],
                            "rank" => $this->transformRank($leagueEntries[0]['rank']),
                            "leaguePoints" => $leagueEntries[0]['leaguePoints'],
                            "wins" => $leagueEntries[0]['wins'],
                            "losses" => $leagueEntries[0]['losses'],
                            "winRatio" => $this->getWinrate($leagueEntries[0]['wins'], $leagueEntries[0]['losses'])
                        ],
                        "rankedFlex" => ['queueType' => 'UNRANKED']
                    ];

                } else if ($leagueEntries[0]['queueType'] == "RANKED_FLEX_SR") {
                    return [
                        "rankedSolo" => ['queueType' => 'UNRANKED'],
                        "rankedFlex" => [
                            "queueType" => $leagueEntries[0]['queueType'],
                            "tier" => $leagueEntries[0]['tier'],
                            "rank" => $this->transformRank($leagueEntries[0]['rank']),
                            "leaguePoints" => $leagueEntries[0]['leaguePoints'],
                            "wins" => $leagueEntries[0]['wins'],
                            "losses" => $leagueEntries[0]['losses'],
                            "winRatio" => $this->getWinrate($leagueEntries[0]['wins'], $leagueEntries[0]['losses'])
                        ]
                    ];
                }
                break;

            case 2:
                return [
                    "rankedSolo" => [
                        "queueType" => $leagueEntries[1]['queueType'],
                        "tier" => $leagueEntries[1]['tier'],
                        "rank" => $this->transformRank($leagueEntries[1]['rank']),
                        "leaguePoints" => $leagueEntries[1]['leaguePoints'],
                        "wins" => $leagueEntries[1]['wins'],
                        "losses" => $leagueEntries[1]['losses'],
                        "winRatio" => $this->getWinrate($leagueEntries[1]['wins'], $leagueEntries[1]['losses'])
                    ],
                    "rankedFlex" => [
                        "queueType" => $leagueEntries[0]['queueType'],
                        "tier" => $leagueEntries[0]['tier'],
                        "rank" => $this->transformRank($leagueEntries[0]['rank']),
                        "leaguePoints" => $leagueEntries[0]['leaguePoints'],
                        "wins" => $leagueEntries[0]['wins'],
                        "losses" => $leagueEntries[0]['losses'],
                        "winRatio" => $this->getWinrate($leagueEntries[0]['wins'], $leagueEntries[0]['losses'])
                    ]
                ];
            default:
                return ["rankedSolo" => ["queueType" => "UNRANKED"], "rankedFlex" => ["queueType" => "UNRANKED"]];
        }
    }

    protected function getWinrate($wins, $losses)
    {
        $total_games = $wins + $losses;
        return $total_games > 0 ? ($wins * 100) / $total_games : 0;
    }

    protected function transformRank($tier)
    {
        switch ($tier) {
            case "I":
                return 1;
            case "II":
                return 2;
            case "III":
                return 3;
            case "IV":
                return 4;
            default:
                return 'undefined';
        }
    }

    protected function getParticipantsData($participants, $gameDuration)
    {
        $arrayResponse = [];
        $ownArray = [];

        foreach ($participants as $participant) {
            $killParticipation = isset($participant['challenges']['killParticipation']) ? $this->getKillParticipation($participant['challenges']['killParticipation']) : 0;

            $arrayParticipantsData = [
                "riotIdGameName" => $participant['riotIdGameName'] ?? '',
                "riotIdTagline" => $participant['riotIdTagline'] ?? '',
                "championId" => $participant['championId'] ?? 0,
                "summoner1Id" => $participant['summoner1Id'] ?? 0,
                "summoner2Id" => $participant['summoner2Id'] ?? 0,
                "kills" => $participant['kills'] ?? 0,
                "deaths" => $participant['deaths'] ?? 0,
                "assists" => $participant['assists'] ?? 0,
                "kda" => isset($participant['challenges']['kda']) ? round($participant['challenges']['kda'], 2) : 0,
                "killParticipation" => $killParticipation,
                "runes" => [
                    "primaryStyle" => $participant['perks']['styles'][0]['style'] ?? 0,
                    "subStyle" => $participant['perks']['styles'][1]['style'] ?? 0
                ],
                "totalMinionsKilled" => $participant['totalMinionsKilled'] ?? 0,
                "minionsPerMinute" => $this->getMinionsPerMinute($participant['totalMinionsKilled'] ?? 0, $gameDuration),
                "items" => [
                    "item0" => $participant['item0'] ?? 0,
                    "item1" => $participant['item1'] ?? 0,
                    "item2" => $participant['item2'] ?? 0,
                    "item3" => $participant['item3'] ?? 0,
                    "item4" => $participant['item4'] ?? 0,
                    "item5" => $participant['item5'] ?? 0,
                    "item6" => $participant['item6'] ?? 0,
                ],
                "win" => $participant['win'] ?? false
            ];

            $arrayResponse[] = $arrayParticipantsData;
        }

        foreach ($arrayResponse as $participantData) {
            if (strtolower($participantData["riotIdGameName"]) == strtolower($this->name)) {
                $ownArray = $participantData;
            }
        }

        $arrayResponse[] = ["ownData" => $ownArray];

        return $arrayResponse;
    }

    protected function getGeneralGameData($machInstanceInfo)
    {
        $arrayGeneralInfo = [
            "gameCreation" => $this->getUnixTime($machInstanceInfo['gameCreation'] ?? 0),
            "gameDuration" => $this->durationMinSec($machInstanceInfo['gameDuration'] ?? 0),
            "gameMode" => $machInstanceInfo['gameMode'] ?? ''
        ];

        return $arrayGeneralInfo;
    }

    protected static function getTeamData($arrayTeams)
    {
        $teamsInfo = [];
        $side = "";

        foreach ($arrayTeams as $index => $teamData) {
            $side = $index == 0 ? 'blue' : 'red';
            $team = [
                'win' => $teamData['win'] ?? false,
                'side' => $side
            ];
            $teamsInfo[] = $team;
        }

        return $teamsInfo;
    }

    protected function getUnixTime($uTime)
    {
        if ($uTime == 0)
            return 'Invalid Time';
        $timestampInSeconds = $uTime / 1000;
        return gmdate('d/m/Y', $timestampInSeconds);
    }

    protected function getKillParticipation($killP)
    {
        return $killP >= 1 ? round($killP * 100, 2) : 0;
    }

    protected function getMinionsPerMinute($totalMinions, $gameDuration)
    {
        return $gameDuration > 0 ? round($totalMinions / ($gameDuration / 60), 2) : 0;
    }

    protected function findGameResult($machInstance)
    {
        $arrayParticipants = $machInstance['info']['participants'] ?? [];
        $win = false;

        foreach ($arrayParticipants as $participant) {
            if (strtolower($participant['riotIdGameName'] ?? '') == strtolower($this->name)) {
                if ($participant['win'] ?? false) {
                    $win = true;
                }
            }
        }

        return $win;
    }

    protected function durationMinSec($gameDurationTotalSec)
    {
        return gmdate('i:s', $gameDurationTotalSec);
    }
}
