@extends('layouts.app')

@section('title')
    {{ __('поиск') }}
@endsection

@section('content')
    <div class="container px-4 mx-auto">

        <section class="text-white py-20">

            <div class="text-center">
                <h1 class="uppercase text-6xl font-bold mb-3 text-shadow-[0_0_8px_rgba(255,255,255,0.5)]">
                    {{ __('Anime search') }}
                </h1>
            </div>

            <div>

                <ul>
                    @foreach ($animeResults as $anime)
                        <li class="py-10 border-b-4 border-neutral-700">
                            <x-anime.anime-card :anime="$anime" />
                        </li>
                    @endforeach
                </ul>

            </div>

        </section>

    </div>
@endsection
