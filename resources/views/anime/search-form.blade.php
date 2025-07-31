@extends('layouts.app')

@section('title')
  {{ __('поиск') }}
@endsection

@section('content')
  <div class="container px-4 mx-auto">

    <section class="text-white py-10">

      <div class="text-center mb-20">

        {{-- Title --}}
        <x-UI.heading class="mb-2">
          {{ __('Anime search') }}
        </x-UI.heading>

        {{-- Subtitle --}}
        <x-UI.subtitle>
          {{ __('Загрузи скриншот — покажем откуда он') }}
        </x-UI.subtitle>

      </div>

      <div class="text-center">
        <form action="{{ route('anime.search') }}" method="POST" enctype="multipart/form-data" class="max-w-1/4 w-full mx-auto">
          @csrf
          <input type="file" name="file" id="file" class="hidden">

          <div class="flex items-center flex-col gap-1 mb-20">

            {{-- File input button --}}
            <label for="file" class="w-full bg-indigo-600 hover:bg-indigo-700 px-4 py-3 text-white text-2xl font-semibold rounded cursor-pointer shadow-[0_0_10px_rgba(79,70,229,0.5)] text-shadow-lg mb-2 transition-colors">
              {{ __('Загрузить файл') }}
            </label>

            {{-- File input text --}}
            <span id="file-name" class="text-gray-400">
              {{ __('Файл не выбран') }}
            </span>

          </div>

          <div>
            {{-- Submit button --}}
            <x-UI.button>
              {{ __('Поиск 🔥') }}
            </x-UI.button>
          </div>

        </form>
      </div>

    </section>

  </div>
@endsection
