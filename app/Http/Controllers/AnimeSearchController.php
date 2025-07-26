<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimeSearchRequest;
use App\Services\TraceMoeService;

class AnimeSearchController extends Controller
{
    public function showForm()
    {
        return view('anime.search-form');
    }

    public function search(AnimeSearchRequest $request, TraceMoeService $traceMoeService)
    {
        $file = $request->file('file');

        $animeResults = $traceMoeService->findAnime($file);

        // $sortedAnimeResults = collect($animeResults['result'])
        //     ->sortByDesc('similarity')
        //     ->take(2)
        //     ->toArray();

        return view('anime.search', compact('animeResults'));
    }
}
