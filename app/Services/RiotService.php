<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Champion;
use App\Models\PatchVersion;

class RiotService
{
    public function checkAndUpdateChampions()
    {
        $latestVersion = $this->getLatestGameVersion();
        
        $champions = $this->fetchChampionData($latestVersion);

        foreach ($champions as $championId => $champion) {
            $existingChampion = Champion::where('champion_id', $championId)->first();
            
            if (!$existingChampion) {
                Champion::create([
                    'champion_id' => $championId,
                    'name' => $champion['name'],
                    'version' => $latestVersion,
                    'data' => json_encode($champion),
                ]); 
            } else if ($existingChampion->version !== $latestVersion) {
                $existingChampion->update([
                    'version' => $latestVersion,
                    'data' => json_encode($champion),
                ]);
            }
        }
    }

    public function getLatestGameVersion()
    {
        $response = Http::get('https://ddragon.leagueoflegends.com/api/versions.json');
        $currentVersion = $response->json()[0];
        $storedVersion = PatchVersion::latest()->first();

        if (empty($storedVersion) || $storedVersion->version !== $currentVersion) {
            PatchVersion::create([
                'version' => $currentVersion
            ]);
        }

        return $currentVersion;
    }

    public function fetchChampionData($version)
    {
        $url = "http://ddragon.leagueoflegends.com/cdn/{$version}/data/en_US/champion.json";
        $response = Http::get($url);
        return $response->json()['data'];
    }

    public static function getAccountByPuuid(string $gameName, string $tagLine, string $region): ?array {
        $response = Http::get("https://" . self::getContinentalRegion($region) . ".api.riotgames.com/riot/account/v1/accounts/by-riot-id/{$gameName}/{$tagLine}?api_key=" . ENV('RIOT_API_KEY'));
        
        if ($response->status() === 200) {
            return $response->json();
        }

        return null;
    }

    public static function getSummonerDataByPuuid(string $puuid, string $region): ?array {
        $response = Http::get("https://{$region}.api.riotgames.com/lol/summoner/v4/summoners/by-puuid/{$puuid}?api_key=" . ENV('RIOT_API_KEY'));
        
        if ($response->status() === 200) {
            return $response->json();
        }

        return null;
    }

    public static function getLeagueEntriesBySummonerId(string $encryptedSummonerId, string $region): ?array {
        $response = Http::get("https://{$region}.api.riotgames.com/lol/league/v4/entries/by-summoner/{$encryptedSummonerId}?api_key=" . ENV('RIOT_API_KEY'));
        
        if ($response->status() === 200) {
            return $response->json();
        }

        return null;
    }

    public static function getMatchHistoryByPuuid(string $puuid, string $region, int $count = 10): ?array {
        $response = Http::get("https://" . self::getContinentalRegion($region) . ".api.riotgames.com/lol/match/v5/matches/by-puuid/{$puuid}/ids?start=0&count={$count}&api_key=" . ENV('RIOT_API_KEY'));
        
        if ($response->status() === 200) {
            return $response->json();
        }

        return null;
    }

    /**
     * Returns the continental region of the given region
     *
     * @param string $region
     * @return ?string The continental region
     */
    private static function getContinentalRegion(string $region): ?string {
        $regions = [
            'americas' => ['BR1', 'LA1', 'LA2', 'NA1'],
            'asia' => ['JP1', 'KR', 'OC1', 'PH2', 'SG2', 'TH2', 'TW2', 'VN2'],
            'europe' => ['EUN1', 'EUW1', 'RU', 'TR1'],
        ];

        foreach ($regions as $continent => $regionList) {
            if (in_array($region, $regionList)) {
                return $continent;
            }
        }

        return null;
    }
}