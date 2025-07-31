<header class="py-10 text-white">
  <div class="container mx-auto px-4">

    <x-nav.list class="flex items-center justify-center gap-x-20 text-2xl font-medium">

      <x-nav.item :href="route('anime.form')" class="{{ activeLink('anime.form') }}">
        Искать
      </x-nav.item>

      <x-nav.item :href="route('pages.about')" class="{{ activeLink('pages.about') }}">
        About
      </x-nav.item>

    </x-nav.list>

  </div>
</header>
