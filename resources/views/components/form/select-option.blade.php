@props([
    'with' => null,
    'value' => null
])

@aware([
    'selectValue'
])

<option
    value="{{ $value }}"
    @if($with === $value)
    selected="selected"
    @endif
>
    {{ $slot }}
</option>
