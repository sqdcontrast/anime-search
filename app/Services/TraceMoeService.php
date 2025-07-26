<?php

namespace App\Services;

class TraceMoeService
{
    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://api.trace.moe/search';
    }
}
