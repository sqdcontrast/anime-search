<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeSearchController extends Controller
{
    public function showForm()
    {
        return view('anime.search-form');
    }

    public function search()
    {
        return view('anime.search');
    }
}
