@props([
    'id',
    'label',
    'name',
    'placeholder' => '',
    'class' => '',
    'rows' => 5,
    ])

@php
    $id = \Illuminate\Support\Str::uuid()->toString();
@endphp

<div>
    <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-white">{{ $label }}</label>
    <div class="mt-2">
        <textarea
            id="{{ $id }}"
            name="{{ $name }}"
            rows="{{ $rows }}"
            placeholder="{{ $placeholder }}"
            class="text-carbon-800 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-carbon-300 placeholder:text-carbon-400 focus:ring-1 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
        >{{ trim($slot) }}</textarea>
    </div>
</div>
