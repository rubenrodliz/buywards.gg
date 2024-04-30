<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View {
        $latestChampions = Champion::orderBy('id', 'desc')->take(3)->get();
        
        return view('home', compact('latestChampions'));
    }
}
