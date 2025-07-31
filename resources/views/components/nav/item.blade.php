@props([
    'href' => '#',
])

<li {{ $attributes->class(['text-gray-400 hover:text-white transition-colors']) }}>
  <a href={{ $href }}>
    {{ $slot }}
  </a>
</li>
