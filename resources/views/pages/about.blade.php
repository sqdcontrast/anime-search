@extends('layouts.app')

@section('title')
  о проекте
@endsection

@section('content')
  <div class="container px-4 mx-auto">

    <section class="text-white py-20">

      <div class="text-center mb-20">
        <h1 class="uppercase text-6xl font-bold mb-3 text-shadow-[0_0_8px_rgba(255,255,255,0.5)]">
          {{ __('О проекте') }}
        </h1>

        <p>
          {{ __('Anime Search — это удобный онлайн-сервис для распознавания аниме по изображению. Просто загрузите кадр, и мы подскажем, из какого он аниме, когда он появляется в эпизоде и многое другое.') }}
        </p>

        <p>
          {{ __('В основе работы сервиса лежит API') }}
          <a href="https://trace.moe" target="_blank">trace.moe</a>,
          {{ __('которое использует нейросетевые алгоритмы для точного и быстрого поиска по миллионам кадров из аниме.') }}
        </p>

      </div>

    </section>

  </div>
@endsection
