<?php

namespace App\Http\Controllers;

use App\Services\RiotService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchSummoner(RiotService $riotService, Request $request) {
        // Get the summoner name and region from the request
        $summoner = trim($request->input('summoner'));

        // ToDo: Los summoners pueden tener entre 3 y 5 digitos
        $searchData = [
            'summoner' => trim(substr($summoner, 0, -4)),
            'tag' => trim(substr($summoner, -3)),
            'region' => $request->input('region')
        ];

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
}
