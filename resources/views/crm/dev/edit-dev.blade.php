@extends('crm.layout')

@push('meta')
<meta property="og:image" content="{{ $devs->getFirstMediaUrl('gallery', 'thumb') }}">
<meta property="og:image:secure_url" content="{{ $devs->getFirstMediaUrl('default') }}">
@endpush

@section('main')

<h1 class="mt-4 text-4xl font-bold text-center text-white">Edit Dev Project: {{ $devs->title }}</h1>

<form action="{{ route('crm.update-dev', $devs->id) }}" method="post">
    <div class="">
        <h2 class="ml-8 text-2xl text-white">Hero section</h2>
        <div class="grid gap-4 m-4">
            <x-form.input-text
                id="title"
                label="Título"
                type="text"
                name="title"
                value="{{ $devs->title }}"
                placeholder="Escribe un título..."
            ></x-form.input-text>
        </div>
        <div class="grid grid-cols-2 gap-4 m-4">
            <x-form.textarea
                id="description"
                label="Descripción"
                name="description"
                placeholder="Escribe una descripción..."
            >{{ $devs->description }}</x-form.textarea>
            <img src="{{ $devs->getMedia('gallery')->first()->getUrl('web') }}" alt="{{ $devs->getMedia('gallery')->first()->name }}">
        </div>
    </div>

    <x-form.submit>{{ __('crm.default.guardar') }}</x-form.submit>
    @csrf
    @method('PUT')
</form>
@endsection
