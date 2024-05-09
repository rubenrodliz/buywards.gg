<?php

namespace App\Http\Controllers;

use App\Services\RiotService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchSummoner(RiotService $riotService, Request $request) {
        // Get the summoner name and region from the request
        $searchData = $this->searchData($request->input('summoner'), $request->input('region'));

        // Obtain the puuid of the summoner
        $account = $riotService::getAccountByPuuid($searchData['summoner'], $searchData['tag'], $searchData['region']);

        if (!$account) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        // Get the summoner data
        $summonerData = $riotService::getSummonerDataByPuuid($account['puuid'], $searchData['region']);

        if (!$summonerData) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        // Get League entries of summoner
        $leagueEntries = $riotService::getLeagueEntriesBySummonerId($summonerData['id'], $searchData['region']);

        if (!$leagueEntries) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        // Get the match history of the summoner
        $matchHistory = $riotService::getMatchHistoryByPuuid($account['puuid'], $searchData['region']);

        if (!$matchHistory) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        $matches = [];
        foreach ($matchHistory as $match) {
            $matches[] = $riotService::getMatchDataByMatchId($match, $searchData['region']);
        }

        // Implementar procesamiento de datos para enviar solo la información necesaria
        dd($account, $summonerData, $leagueEntries, $matches);
    }
    
    private function searchData (string $summoner, string $region): array|RedirectResponse {
        $tagPattern = '/#(\w{3,5})$/';

        if (preg_match($tagPattern, $summoner, $matches)) {
            $tag = $matches[1];
            $summonerName = trim(str_replace("#$tag", "", $summoner));
        } else {
            return back()->withErrors(['error' => 'Summoner name and tag format is invalid'], 400);
        }

        return [
            'summoner' => $summonerName,
            'tag' => $tag,
            'region' => $region
        ];
    }
}
