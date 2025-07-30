@props([
    'type' => 'submit',
])

<button type={{ $type }} {{ $attributes->class(['w-full bg-indigo-600 hover:bg-indigo-700 px-4 py-3 text-white text-2xl font-semibold rounded cursor-pointer shadow-[0_0_10px_rgba(79,70,229,0.5)] text-shadow-lg transition-colors']) }}>
  {{ $slot }}
</button>
