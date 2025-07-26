@php
    $fromMinutes = floor($anime['from'] / 60);
    $fromSeconds = $anime['from'] - $fromMinutes * 60;

    $toMinutes = floor($anime['to'] / 60);
    $toSeconds = $anime['to'] - $toMinutes * 60;
@endphp
 
{{-- контейнер --}}
    <div class="flex justify-between items-center py-10">

        {{-- левая часть --}}
        <div class="flex flex-col items-center gap-10">
            <h4 class="text-3xl font-bold mb-3 text-shadow-[0_0_8px_rgba(255,255,255,0.2)]">Preview</h4>
            <div class="w-full">
                <img class="w-full" src="{{ $anime['image'] }}" alt="{{ $anime['anilist']['title']['romaji'] }}">
            </div>

            <div class="w-full">
                <video width="640" height="360" controls>
                    <source src="{{ $anime['video'] }}" type="video/mp4">
                    Ваш браузер не поддерживает видео.
                </video>
            </div>

        </div>

        {{-- правая часть --}}
        <div>

            <div class="mb-5">
                <h3 class="text-3xl font-bold mb-3 text-shadow-[0_0_8px_rgba(255,255,255,0.5)]">{{ $anime['anilist']['title']['romaji'] }}</h3>
                <div class="w-full">
                    <img class="max-w-full w-full" src="{{ $anime['anilist']['coverImage']['large'] }}" alt="{{ $anime['anilist']['title']['romaji'] }}">
                </div>
            </div>

            <div class="text-3xl font-bold mb-3 text-shadow-[0_0_8px_rgba(255,255,255,0.2)]">
                <p>Эпизод: {{ $anime['episode'] }}</p>
                <p>Начало сцены {{ sprintf('%02d:%02d', $fromMinutes, $fromSeconds) }}</p>
                <p>точность совпадения {{ round($anime['similarity'] * 100) }}%</p>
                <p><span class="text-red-500 text-shadow-[0_0_8px_rgba(239,68,68,0.5)]">18+: </span>{{ $anime['anilist']['isAdult'] ? 'Да' : 'Нет' }}</p>
            </div>

        </div>
    </div>
