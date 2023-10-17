@extends('crm.layout')

@section('main')

<h1 class="mt-4 text-4xl font-bold text-center text-white">Edit Dev Project: {{ $projs->title }}</h1>

<form action="{{ route('crm.update-proj', $projs->id) }}" method="post">
    <div class="">
        <h2 class="ml-8 text-2xl text-white">Hero section</h2>
        <div class="grid gap-4 m-4">
            <x-form.input-text
                id="title"
                label="Título"
                type="text"
                name="title"
                value="{{ $projs->title }}"
                placeholder="Título"
            ></x-form.input-text>
        </div>
        <div class="grid grid-cols-2 gap-4 m-4">
            <x-form.textarea
                id="description"
                label="Descripción"
                name="description"
                placeholder="Descripción"
            >{{ $projs->description }}</x-form.textarea>
            <x-form.input-file
                id="file"
                name="file"
                label="File"
            >{{ $projs->file }}</x-form.input-file>
        </div>
    </div>

    <x-form.submit>{{ __('Enviar') }}</x-form.submit>
    @csrf
    @method('PUT')
</form>
@endsection
