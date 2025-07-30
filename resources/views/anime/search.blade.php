@extends('layouts.app')

@section('title')
  {{ __('поиск') }}
@endsection

@section('content')
  <div class="container px-4 mx-auto">

    <section class="text-white py-20">

      <div class="text-center mb-20">
        {{-- Heading --}}
        <x-heading>
          {{ __('Anime search') }}
        </x-heading>
      </div>

      <div>

        {{-- Anime list --}}
        <ul>
          @foreach ($animeResults as $anime)
            <li class="py-10 border-b-4 border-neutral-700">
              {{-- Anime card --}}
              <x-anime.anime-card :anime="$anime" />
            </li>
          @endforeach
        </ul>

      </div>

    </section>

  </div>
@endsection
