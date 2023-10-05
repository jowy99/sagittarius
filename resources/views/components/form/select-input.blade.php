@props([
    'label' => null,
    'class' => '',
    'disabled' => false,
    'required' => false,
    'selectValue' => null,
    ])

<div class="flex flex-col {{ $class }}">
    @php($id = \Illuminate\Support\Str::uuid()->toString())
    @if($label !== null)
    <label
        for="{{ $id }}"
        class="capitalize block text-sm font-medium leading-6 text-white @if($required) after:content-['*'] after:text-red-500 @endif"
    >
        {{ $label }}
    </label>
    @endif
    <select
        id="{{ $id }}"
        class="text-carbon-800 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-carbon-300 placeholder:text-carbon-400 focus:ring-1 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
        @if($disabled)disabled="disabled" @endif
        @if($required)required="required" @endif
        {{ $attributes }}
    >
        {{ $slot }}
    </select>
</div>
