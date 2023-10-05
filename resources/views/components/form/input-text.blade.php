@props([
    'id',
    'label',
    'type' => '',
    'name',
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'class' => '',
    ])

@php
$id = \Illuminate\Support\Str::uuid()->toString();
@endphp

<div>
    <label for="{{ $id }}" class="capitalize block text-sm font-medium leading-6 text-white @if($required) after:content-['*'] after:text-red-500 @endif">{{ $label }}</label>
    <div class="mt-2">
        <input
            id="{{ $id }}"
            type="{{ $type }}"
            name="{{ $name }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            @if($required)required="required" @endif
            class="flex-1 min-w-0 block sm:text-sm border-0 ring-1 ring-inset ring-gray-300 w-full py-4 px-6 border-none rounded text-gray-600 bg-gray-100 focus:ring-green-500 focus:ring-2"
        />
    </div>
</div>
