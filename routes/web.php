<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiotApiController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/search', [SearchController::class, 'searchSummoner'])->name('search.summoner');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/summoner', function () {
    return view('summoner');
})->name('summoner');

Route::get('/summonerdev', function () {
    return view('summonerdev');
})->name('summonerdev');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/latest-champions', [RiotApiController::class, 'checkAndUpdateChampions']);

require __DIR__.'/auth.php';
