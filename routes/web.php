<?php

use App\Http\Controllers\AnimeSearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AnimeSearchController::class, 'showForm'])->name('anime.form');
Route::post('/', [AnimeSearchController::class, 'search'])->name('anime.search');

Route::get('/about', function () {
  return view('pages.about');
})->name('pages.about');
