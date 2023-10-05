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
    <label for="{{ $id }}" class="capitalize block text-sm font-medium leading-6 text-white">{{ $label }}</label>
    <div class="mt-2">
        <textarea
            id="{{ $id }}"
            name="{{ $name }}"
            rows="{{ $rows }}"
            placeholder="{{ $placeholder }}"
            class="w-full py-4 px-6 border-none text-gray-600 bg-gray-100 focus:ring-2 mt-2 resize-y focus:ring-green-500 focus:shadow-md focus:border-green-500 rounded-md sm:text-sm border-gray-300"
        >{{ trim($slot) }}</textarea>
    </div>
</div>
