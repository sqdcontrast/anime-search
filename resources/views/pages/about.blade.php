@extends('layouts.app')

@section('title')
  о проекте
@endsection

@section('content')
  <div class="container px-4 mx-auto">

    <section class="text-white py-10">

      <div class="mb-20 xl:max-w-2/3 mx-auto">

        <div class="mb-10">

          <x-UI.subtitle class="text-gray-400 text-shadow-[none] mb-2">
            {{ __('О проекте Anime Search') }}
          </x-UI.subtitle>

          <x-UI.text>
            {{ __('Anime Search — это удобный онлайн-сервис для распознавания аниме по изображению.') }}
          </x-UI.text>

        </div>

        <div class="mb-10">

          <x-UI.subtitle class="text-gray-400 text-shadow-[none] mb-2">
            {{ __('Описание') }}
          </x-UI.subtitle>

          <x-UI.text class="mb-2">
            {{ __('Просто загрузите кадр, и сервис подскажет, из какого он аниме, когда он появляется в эпизоде и многое другое.') }}
          </x-UI.text>

          <x-UI.text>
            {{ __('Сервис использует ') }}
            <a href="https://trace.moe/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors">API trace.moe</a>
            {{ __('которое задействует нейросетевые алгоритмы для точного и быстрого поиска по миллионам кадров из аниме.') }}
          </x-UI.text>

        </div>

        <div class="mb-10">

          <x-UI.subtitle class="text-gray-400 text-shadow-[none] mb-2">
            {{ __('Функциональность') }}
          </x-UI.subtitle>

          <x-UI.text class="mb-2">
            {{ __('Поддержка поиска по одиночным изображениям и видео.') }}
          </x-UI.text>

          <x-UI.text class="mb-2">
            {{ __('Адаптивный интерфейс для комфортного использования на любых устройствах.') }}
          </x-UI.text>

          <x-UI.text>
            {{ __('Высокая точность распознавания с оценкой совпадения.') }}
          </x-UI.text>

        </div>

        <div class="mb-10">

          <x-UI.subtitle class="text-gray-400 text-shadow-[none] mb-2">
            {{ __('Целевая аудитория') }}
          </x-UI.subtitle>

          <x-UI.text class="mb-2">
            {{ __('Фанаты аниме, которые хотят быстро определить источник понравившегося кадра.') }}
          </x-UI.text>

          <x-UI.text class="mb-2">
            {{ __('Блогеры, создающие тематический контент.') }}
          </x-UI.text>

          <x-UI.text>
            {{ __('Исследователи и аналитики аниме-контента.') }}
          </x-UI.text>

        </div>

        <div class="mb-10">

          <x-UI.subtitle class="text-gray-400 text-shadow-[none] mb-2">
            {{ __('Особенности') }}
          </x-UI.subtitle>

          <x-UI.text class="mb-2">
            {{ __('Совпадения с точностью ниже 90% почти всегда выдают неправильный результат.') }}
          </x-UI.text>

        </div>

        <div>

          <x-UI.subtitle class="text-gray-400 text-shadow-[none] mb-2">
            {{ __('Важное предупреждение') }}
          </x-UI.subtitle>

          <x-UI.text>
            {{ __('Некоторые результаты поиска могут содержать материалы с ограничением 18+') }}
          </x-UI.text>

        </div>


      </div>

    </section>

  </div>
@endsection
