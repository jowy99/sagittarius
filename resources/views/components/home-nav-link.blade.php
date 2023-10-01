@props(['active'])

@php
$classes = ($active ?? false)
            ? 'items-center justify-center bg-green-700 text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold'
            : 'items-center justify-center text-green-200 hover:text-white hover:bg-green-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
