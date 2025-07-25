<?php

use App\Http\Controllers\AnimeSearchController;
use Illuminate\Support\Facades\Route;

Route::get('/search', [AnimeSearchController::class, 'showForm'])->name('anime.form');
Route::post('/search', [AnimeSearchController::class, 'search'])->name('anime.search');
