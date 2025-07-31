@extends('layouts.app')

@section('title')
  о проекте
@endsection

@section('content')
  <div class="container px-4 mx-auto">

    <section class="text-white py-20">

      <div class="text-center mb-20">

        <x-UI.heading class="mb-10">
          {{ __('О проекте') }}
        </x-UI.heading>

        <div class="mb-10">
          <x-UI.text>
            {{ __('Anime Search — это удобный онлайн-сервис для распознавания аниме по изображению.') }}
          </x-UI.text>

          <x-UI.text>
            {{ __('Просто загрузите кадр, и мы подскажем, из какого он аниме, когда он появляется в эпизоде и многое другое.') }}
          </x-UI.text>
        </div>


        <div class="mb-10">
          <x-UI.text>
            {{ __('Сервис использует') }}
            <a href="https://soruly.github.io/trace.moe-api/#/" class="underline text-gray-300 hover:text-white transition-colors" target="_blank">API trace.moe</a>,
            {{ __('которое использует нейросетевые алгоритмы для точного и быстрого поиска по миллионам кадров из аниме.') }}
          </x-UI.text>
          <x-UI.text>
            {{ __('Сервис поддерживает как одиночные изображения, так и видео, а интерфейс адаптирован для комфортного использования на любых устройствах.') }}
          </x-UI.text>
        </div>


        <div class="mb-10">
          <x-UI.text class="max-w-2/3 mx-auto mb-5">
            {{ __('Anime Search идеально подходит для фанатов, блогеров и исследователей аниме-контента, помогая находить источник кадра и создавать тематический контент.') }}
          </x-UI.text>
          <x-UI.text>
            {{ __('Совпадения с точностью ниже 90% скорее всего являются неверными. Окончательное решение — за вами: это может быть как совпадение, так и просто визуально схожий кадр.') }}
          </x-UI.text>
        </div>


        <div class="mb-10">
          <x-UI.text class="text-red-500 text-shadow-[0_0_8px_rgba(239,68,68,0.5)]">
            {{ __('Обратите внимание: некоторые результаты поиска могут содержать материалы с ограничением 18+') }}
            <br>
          </x-UI.text>
        </div>

      </div>

    </section>

  </div>
@endsection
