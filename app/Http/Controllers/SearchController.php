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
        $account = $riotService->getAccountByPuuid($summonerData['summoner'], $summonerData['tag']);

        if (!$account) {
            return back()->withErrors(['error' => 'Summoner not found'], 404);
        }

        // Get the summoner data
        $summonerData = $riotService->getSummonerDataByPuuid($account['puuid'], $summonerData['region']);

        // Get the match history of the summoner
    }
}
