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

                <p class="text-indigo-500 text-3xl font-semibold text-shadow-[0_0_6px_rgba(79,70,229,0.7)]">
                    {{ __('Загрузи скриншот — покажем откуда он') }}
                </p>
            </div>

            <div class="text-center">
                <form action="{{ route('anime.search') }}" method="POST" enctype="multipart/form-data" class="max-w-60 w-full mx-auto">
                    @csrf

                    <input type="file" name="file" id="file" class="hidden">

                    <div class="flex items-center flex-col gap-1 mb-20">

                        <label for="file" class="w-full bg-indigo-600 hover:bg-indigo-700 px-4 py-3 text-white text-2xl font-semibold rounded cursor-pointer shadow-[0_0_10px_rgba(79,70,229,0.5)] text-shadow-lg mb-2 transition-colors">
                            {{ __('Загрузить файл') }}
                        </label>

                        <span id="file-name" class="text-gray-400">
                            {{ __('Файл не выбран') }}
                        </span>

                    </div>

                    <div>
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 px-4 py-3 text-white text-2xl font-semibold rounded cursor-pointer shadow-[0_0_10px_rgba(79,70,229,0.5)] text-shadow-lg transition-colors">
                            {{ __('Поиск 🔥') }}
                        </button>
                    </div>

                </form>
            </div>

        </section>

    </div>
@endsection
