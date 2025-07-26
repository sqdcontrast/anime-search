<?php

namespace App\Http\Controllers;

use App\Services\TraceMoeService;
use Illuminate\Http\Request;

class AnimeSearchController extends Controller
{
    public function showForm()
    {
        return view('anime.search-form');
    }

    public function search(Request $request, TraceMoeService $traceMoeService)
    {
        $request->validate([
            'file' => ['required', 'file', 'max:25600', 'mimetypes:image/*,video/*']
        ]);

        $file = $request->file('file');

        $data = $traceMoeService->findAnime($file);

        return view('anime.search', compact('data'));
    }
}
