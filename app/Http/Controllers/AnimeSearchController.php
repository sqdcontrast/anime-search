<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeSearchController extends Controller
{
    public function showForm()
    {
        return view('pages.search-form');
    }
}
