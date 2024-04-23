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
}