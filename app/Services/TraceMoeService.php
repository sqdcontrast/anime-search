<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class TraceMoeService
{
    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://api.trace.moe/search?anilistInfo&cutBorders';
    }

    public function findAnime(UploadedFile $file)
    {

        $cacheKey = 'trace_moe_' . md5_file($file->getRealPath());

        return Cache::remember($cacheKey, now()->addHours(24), function () use ($file) {
            $response = Http::attach(
                'image',
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            )->post($this->baseUrl);

            if ($response->successful()) {
                return $response->json();
            }
        });

        throw new \Exception('Ошибка запроса: ' . $response->body());
    }
}
