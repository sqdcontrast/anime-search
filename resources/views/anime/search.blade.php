@extends('layouts.app')

@section('title')
    {{ __('поиск') }}
@endsection

@section('content')
    <div class="container px-4 mx-auto">

        <section class="text-white py-20">

            <div class="text-center mb-20">
                <h1 class="uppercase text-6xl font-bold mb-3 text-shadow-[0_0_8px_rgba(255,255,255,0.5)]">
                    {{ __('Anime search') }}
                </h1>
            </div>

            <div class="text-center">

                <ul>

                    @foreach ($data['result'] as $result)
                        @if ($result['similarity'] > 0)
                            <li class="mb-10">
                                <x-anime.anime-card :result="$result" />
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>

        </section>

    </div>
@endsection
