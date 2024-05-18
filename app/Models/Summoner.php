<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\RiotService;


class Summoner extends Model
{
    use HasFactory;
    protected string $name;
    protected string $tag;
    protected string $region;
    public RiotService $riotService ;

    public function __construct(string $name, string $tag, string $region)
    {
        $this->name = $name;
        $this->tag = $tag;
        $this->region = $region;


    }

    public function execute(){

        // CURRENT PATCH INFO /////////////////////////////
        $CURRENT_PATCH = RiotService::getLatestGameVersion();//última versión del juego
        $PUUID = RiotService::getAccountByPuuid($this->name, $this->tag,$this->region);//nombre de invocador
        $SUMMONER_DATA = RiotService::getSummonerDataByPuuid($PUUID['puuid'],$this->region);// información del invocador
        $LEAGUE_ENTRIES = RiotService::getLeagueEntriesBySummonerId($SUMMONER_DATA['id'],$this->region);// información de las ligas
        $MACH_ENTRIES =RiotService::getMatchHistoryByPuuid($PUUID['puuid'],$this->region);//array de id de partidas
        $RETURN_DATA=$this->DecoreInfo($CURRENT_PATCH,$PUUID,$SUMMONER_DATA,$LEAGUE_ENTRIES,$MACH_ENTRIES);
        // return $RETURN_DATA;
        // dd($this->getLeagueEntries($LEAGUE_ENTRIES));

    }

    //servcices//////////////////////////

    protected function DecoreInfo($currentPatch,$puuid,$summonerData,$leagueEntries,$machEntries){
        $league = $this->getLeagueEntries($leagueEntries);
        $gameStats = [];
        for ($i = 0; $i < count($machEntries); $i++) {
            $machInstance = RiotService::getMatchDataByMatchId($machEntries[$i], $this->region);
            $participantsData = $this->getParticipantsData($machInstance['info']['participants'], $machInstance['info']['gameDuration']);
            $generalGameData = $this->getGeneralGameData($machInstance['info']);
            $arrayTeams = $this->getTeamData($machInstance['info']['teams']);
            $gameStats[] = ["generalGameData"=>$generalGameData,"teams"=>$arrayTeams,"game" =>$participantsData];
        }
        // dd($gameStats);

        $performance = $this->getPerformance($gameStats);


        $returnData = [
            "gameName"=> $puuid['gameName'],
            "tagLine"=> $puuid['tagLine'],
            "profileIconId"=> $summonerData['profileIconId'],
            "summonerLevel"=>$summonerData['summonerLevel'],
            "patch"=>$currentPatch,
            "rankedSolo"=>$league['rankedSolo'],
            "rankedFlex"=>$league['rankedFlex'],
            "performance"=>$performance,
            "games"=>$gameStats
        ];
        // dd($returnData);
        return $returnData;
    }
    protected function getPerformance($arrayGames){
        $total=[];
        $rankedSolo=[];
        $rankedFlex=[];

        for($i = 0; $i < count($arrayGames); $i++) {
                $total[]=$arrayGames[$i]['game'][10]['ownData'];
                // if($$arrayGames[$i]['generalGameData']['gameMode'] =='CLASSIC'){$rankedSolo[]=$arrayGames[$i]['game'][10]['ownData'];}
                // if($$arrayGames[$i]['generalGameData']['gameMode'] =='RANKED_FLEX_SR'){$rankedFlex[]=$arrayGames[$i]['game'][10]['ownData'];}
        }
        //TOTAL
        $countsTotal = $this->ProcesPerformanceFunction($total);


        //Ranked SOLO

        //Ranqued Flex



        $returnArray = ["total"=>$countsTotal, "rankedSolo"=>[0], "rankedFlex"=>[0]];

        return $returnArray;

    }

    function ProcesPerformanceFunction($championData) {
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
            $counts[$championId]['totalKills'] += $data['kills'];
            $counts[$championId]['totalDeaths'] += $data['deaths'];
            $counts[$championId]['totalAssists'] += $data['assists'];
            $counts[$championId]['totalKDA'] += $data['kda'];
            $counts[$championId]['totalWins'] += $data['win'] ? 1 : 0;
        }

        $result = [];
        // Calcular la media
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
        usort($result, function($a, $b) {
            return $b['counts'] <=> $a['counts'];
        });

        // dd($result); // Para depuración
        return $result;
    }
    protected function getLeagueEntries($leagueEntries){

        switch (count($leagueEntries)){
            case 1:
                if($leagueEntries[0]['queueType'] == "RANKED_SOLO_5x5"){
                    return ["rankedSolo"=>[
                        "queueType"=>$leagueEntries[0]['queueType'],
                        "tier"=> $leagueEntries[0]['tier'],
                        "rank"=> $this->transformRank($leagueEntries[0]['rank']),
                        "leaguePoints"=> $leagueEntries[0]['leaguePoints'],
                        "wins"=> $leagueEntries[0]['wins'],
                        "losses"=> $leagueEntries[0]['losses'],
                        "winRatio"=> $this->getWinrate($leagueEntries[0]['wins'],$leagueEntries[0]['losses'])
                    ],"rankedFlex"=>"UNRANKED"];

                }else if($leagueEntries[0]['queueType'] == "RANKED_FLEX_SR"){
                    return ["rankedSolo"=> "UNRANKED","rankedFlex"=>[
                        "queueType"=>$leagueEntries[0]['queueType'],
                        "tier"=> $leagueEntries[0]['tier'],
                        "rank"=> $this->transformRank($leagueEntries[0]['rank']),
                        "leaguePoints"=> $leagueEntries[0]['leaguePoints'],
                        "wins"=> $leagueEntries[0]['wins'],
                        "losses"=> $leagueEntries[0]['losses'],
                        "winRatio"=> $this->getWinrate($leagueEntries[0]['wins'],$leagueEntries[0]['losses'])
                    ]];
                }

            break;

            case 2;
                return ["rankedSolo"=> [
                    "queueType"=>$leagueEntries[1]['queueType'],
                    "tier"=> $leagueEntries[1]['tier'],
                    "rank"=> $this->transformRank($leagueEntries[1]['rank']),
                    "leaguePoints"=> $leagueEntries[1]['leaguePoints'],
                    "wins"=> $leagueEntries[1]['wins'],
                    "losses"=> $leagueEntries[1]['losses'],
                    "winRatio"=> $this->getWinrate($leagueEntries[1]['wins'],$leagueEntries[1]['losses'])
                ],"rankedFlex"=>[
                    "queueType"=>$leagueEntries[0]['queueType'],
                    "tier"=> $leagueEntries[0]['tier'],
                    "rank"=> $this->transformRank($leagueEntries[0]['rank']),
                    "leaguePoints"=> $leagueEntries[0]['leaguePoints'],
                    "wins"=> $leagueEntries[0]['wins'],
                    "losses"=> $leagueEntries[0]['losses'],
                    "winRatio"=> $this->getWinrate($leagueEntries[0]['wins'],$leagueEntries[0]['losses'])
                ]];
            break;

            default: return ["rankedSolo"=>'"queueType":"UNRANKED"',"rankedFlex"=>'"queueType":"UNRANKED"'];

        }
    }
    protected function getWinrate($wins,$losses){
        $total_games=$wins+$losses;
        $winrate=($wins*100)/$total_games;
        return $winrate;
    }
    protected function transformRank($tier){
        switch($tier){
            case "I":return 1;
            case "II":return 2;
            case "III":return 3;
            case "IV":return 4;
            default: return 'undefined';
        }
    }
    protected function getParticipantsData($participants,$gameDuration){
        $arrayResponse = [];
        $ownArray=[];
        for($i = 0 ;  $i<count($participants); $i++){
            // $league=$this->getTierRankForOthers($participants[$i]['riotIdGameName'],$participants[$i]['riotIdTagline'],$this->region);
            $arrayParticipantsData=[
                "riotIdGameName"=>$participants[$i]['riotIdGameName'],
                "riotIdTagline"=>$participants[$i]['riotIdTagline'],
                "championId"=>$participants[$i]['championId'],
                "summoner1Id"=>$participants[$i]['summoner1Id'],
                "summoner2Id"=>$participants[$i]['summoner2Id'],
                // "tier"=>$league['tier'],
                // "rank"=>$league['rank'],
                "kills"=>$participants[$i]['kills'],
                "deaths"=>$participants[$i]['deaths'],
                "assists"=>$participants[$i]['assists'],
                "kda"=>round($participants[$i]['challenges']['kda'],2),
                "killParticipation"=>$this->getkillParticipation($participants[$i]['challenges']['killParticipation']),
                "runes"=>[
                    "primaryStyle" =>$participants[$i]['perks']['styles'][0]['style'],
                    "subStyle" =>$participants[$i]['perks']['styles'][1]['style']
                ],
                "totalMinionsKilled" => $participants[$i]['totalMinionsKilled'],
                "minionsPerMinute" => $this->getMininosPerMinute($participants[$i]['totalMinionsKilled'],$gameDuration),//otro metodo
                "items" => [
                    "item0"=>$participants[$i]['item0'],
                    "item1"=>$participants[$i]['item1'],
                    "item2"=>$participants[$i]['item2'],
                    "item3"=>$participants[$i]['item3'],
                    "item4"=>$participants[$i]['item4'],
                    "item5"=>$participants[$i]['item5'],
                    "item6"=>$participants[$i]['item6'],
                ],
                "win" => $participants[$i]['win']
            ];
            $arrayResponse[] = $arrayParticipantsData;
        }
        for($y = 0 ; $y <count($arrayResponse); $y++){

            if(strtolower($arrayResponse[$y]["riotIdGameName"]) == strtolower($this->name)){
                $ownArray = $arrayResponse[$y];

            }
        }
        $arrayResponse[] = ["ownData"=>$ownArray];

        return $arrayResponse;
    }
    protected function getGeneralGameData($machInstanceInfo){
        for($i = 0 ;  $i<count($machInstanceInfo); $i++){
            $arrayGeneralInfo=[
                "gameCreation"=>$this->getUnixTime($machInstanceInfo['gameCreation']),
                "gameDuration"=>$this->durationMinSec($machInstanceInfo['gameDuration']),
                "gameMode"=>$machInstanceInfo['gameMode']
            ];

        }
        return $arrayGeneralInfo;
    }
    protected static function getTeamData($arrayTeams){//$MACH_INSTANCE['info']['teams']
        $teamsInfo=[];
        $team0;
        $team1;
        $side="";
        for($i = 0 ; $i <count($arrayTeams); $i++){
            if($i == 0){$side = 'blue';}else{$side = 'red';}
            $team = 'team'.$i;
            $team=['win'=> $arrayTeams[$i]['win'],'side' => $side];
            $teamsInfo[] = $team;

        }
        return $teamsInfo;
    }
    protected function getUnixTime($uTime){
        $timestampInSeconds = $uTime / 1000;
        return gmdate('d/m/Y', $timestampInSeconds);
    }
    protected function getkillParticipation($killP){
        if($killP>=1){
            return round($killP*100,2);
        }else {
            return 0;
        }
    }
    protected function getMininosPerMinute($totalMinions,$gameDuration){
        return round($totalMinions/($gameDuration/60),2);
    }
    protected function findGameResult($machInstance){
        $arrayParticipants=$machInstance['info']['participants'];
        $win = false;
        for($i = 0 ; $i <count($arrayParticipants); $i++){
            if($arrayParticipants[$i]['riotIdGameName'] == $this->name){
                if($arrayParticipants[$i]['win']==true){
                    $win = true;
                }
            }
        }
        return $win;

    }
    protected function durationMinSec($gameDurationTotalMin){

        if($gameDurationTotalMin < 3600){
            $gameTime = date("i:s", $gameDurationTotalMin);
            return  $gameTime;
        }else{
            $gameTime = date("h:i:s", $gameDurationTotalMin);
            return $gameTime;
        }
        return  null;

    }

    // protected function getTierRankForOthers($name,$tag,$region){
    //     $puuid=RiotService::getAccountByPuuid($name,$tag,$region)['puuid'];
    //     $idInfo=RiotService::getSummonerDataByPuuid($puuid,$region)['id'];
    //     $tierRank = RiotService::getLeagueEntriesBySummonerId($idInfo,$region);

    //     for($u = 0 ; $u < count($tierRank); $u++){
    //         if($tierRank[$u]['queueType']=='RANKED_SOLO_5x5'){
    //             return ["rank" => $tierRank[$u]['rank'],"tier" => $tierRank[$u]['tier']];
    //         }
    //     }
    //     return ["rank" => "","tier" => "UNRANKED"];

    // }
}
