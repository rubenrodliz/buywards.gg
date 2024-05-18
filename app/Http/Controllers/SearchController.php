<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Services\RiotService;
use App\Models\Summoner;

class SearchController extends Controller
{
    public function searchSummoner(Request $request) {
        $searchData = $this->searchData($request->summoner, $request->region);

        $summoner = new Summoner($searchData['summoner'], $searchData['tag'], $searchData['region']);
        
        $summonerData = $summoner->execute();
        
        if (!$summonerData) {
            return abort(404);
        }

        return view('summoner', ['summonerData' => $summonerData]);
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
