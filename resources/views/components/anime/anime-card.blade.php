{{-- контейнер --}}
<div class="flex justify-between gap-x-50">

  {{-- Reslut preview --}}
  <div class="flex flex-col flex-1/2 gap-y-10 text-center">

    {{-- Subtitle --}}
    <div>
      <h4 class="text-3xl font-bold text-shadow-[0_0_8px_rgba(255,255,255,0.2)]">Preview</h4>
    </div>

    <div>
      <img class="w-full max-w-full rounded-xl" src="{{ $anime['image'] }}" alt="{{ $anime['anilist']['title']['romaji'] }}">
    </div>

    <div>
      <video class="w-full max-w-full rounded-xl" controls>
        <source src="{{ $anime['video'] }}" type="video/mp4">
        Ваш браузер не поддерживает видео.
      </video>
    </div>

  </div>

  {{-- Result info --}}
  <div class="flex-1/2 text-center text-2xl font-semibold text-shadow-[0_0_8px_rgba(255,255,255,0.2)]">

    <div class="mb-5">
      <a class="text-gray-300 hover:text-white transition-colors" href="{{ $anime['anilist']['siteUrl'] }}">
        <h3 class="text-3xl font-bold mb-2">{{ $anime['anilist']['title']['romaji'] }}</h3>
      </a>
      <p>Эпизод: {{ $anime['episode'] }}</p>
    </div>


    <div class="mb-3">
      <img class="w-full max-w-3/4 object-cover rounded-xl mx-auto" src="{{ $anime['anilist']['coverImage']['large'] }}" alt="{{ $anime['anilist']['title']['romaji'] }}">
    </div>

    <div>
      <p>точность совпадения {{ round($anime['similarity'] * 100) }}%</p>
      <p>Начало сцены {{ formatTime($anime['from']) }}</p>
      <p>
        <span class="text-red-500 text-shadow-[0_0_8px_rgba(239,68,68,0.5)]">
          18+:
        </span>
        {{ $anime['anilist']['isAdult'] ? 'Да' : 'Нет' }}
      </p>
    </div>


  </div>

</div>
