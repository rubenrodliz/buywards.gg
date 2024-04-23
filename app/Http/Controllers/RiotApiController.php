<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RiotApiController extends Controller
{
    protected $riotService;

    public function __construct()
    {
        $this->riotService = app()->make('App\Services\RiotService');
    }

    public function checkAndUpdateChampions()
    {
        $this->riotService->checkAndUpdateChampions();
        return response()->json(['message' => 'Champions updated successfully']);
    }
}
