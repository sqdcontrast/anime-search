<?php

if (!function_exists('formatTime')) {
    function formatTime($from)
    {
        $minutes = floor($from / 60);
        $seconds = $from - $minutes * 60;

        return sprintf('%02d:%02d', $minutes, $seconds);
    }
}
