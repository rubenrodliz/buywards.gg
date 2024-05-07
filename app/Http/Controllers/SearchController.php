<?php

namespace App\Http\Controllers;

use App\Services\RiotService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchSummoner(RiotService $riotService, Request $request) {
        // Get the summoner name and region from the request
        $summoner = trim($request->input('summoner'));
        $summonerData = [
            'summoner' => substr($summoner, 0, -4),
            'tag' => substr($summoner, -3),
            'region' => $request->input('region')
        ];

        // Obtain the puuid of the summoner
        $account = $riotService::getAccountByPuuid($summonerData['summoner'], $summonerData['tag'], $summonerData['region']);

        if (!$account) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        // Get the summoner data
        $summonerData = $riotService::getSummonerDataByPuuid($account['puuid'], $summonerData['region']);

        if (!$summonerData) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        // Get League entries of summoner
        $leagueEntries = $riotService::getLeagueEntriesBySummonerId($summonerData['id'], $summonerData['region']);

        if (!$leagueEntries) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        // Get the match history of the summoner
        $matchHistory = $riotService::getMatchHistoryByPuuid($account['puuid'], $summonerData['region']);
    }
}
