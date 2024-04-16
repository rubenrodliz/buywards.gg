<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummonerController extends Controller
{
    public function index()
    {
        return view('summoner');
    }
}
