<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\View\View;
use App\Models\PatchVersion;

class HomeController extends Controller
{
    public function index(): View {
        $latestChampions = Champion::orderBy('id', 'desc')->take(3)->get();

        return view('home', [
            'latestChampions' => $latestChampions,
            'patch' => PatchVersion::latest()->first()->version,
        ]);
    }
}
