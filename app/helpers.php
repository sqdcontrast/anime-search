<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('formatTime')) {
    function formatTime(float $from): string
    {
        $minutes = floor($from / 60);
        $seconds = $from - $minutes * 60;

        return sprintf('%02d:%02d', $minutes, $seconds);
    }
}

if (!function_exists('activeLink')) {
    function activeLink(string $link, string $class = 'text-white'): string
    {
        return Route::is($link) ? $class : '';
    }
}
