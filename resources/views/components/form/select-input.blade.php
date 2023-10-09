@props([
    'class' => '',
    'name' => '',
    'disabled' => false,
    'required' => false,
    'selectValue' => null,
    ])

<div class="flex flex-col {{ $class }}">
    @php($id = \Illuminate\Support\Str::uuid()->toString())

    <select
        id="{{ $id }}"
        name="{{ $name }}"
        class="flex-1 min-w-0 block drop-shadow-md sm:text-md border-0 ring-1 ring-inset ring-gray-300 w-full py-2 px-6 border-none rounded text-gray-600 bg-gray-100 focus:ring-green-500 focus:ring-2"
        @if($disabled)disabled="disabled" @endif
        @if($required)required="required" @endif
        {{ $attributes }}
    >
        {{ $slot }}
    </select>
</div>
