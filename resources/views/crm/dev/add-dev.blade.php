@extends('crm.layout')

@section('main')

<h1 class="mt-4 text-4xl font-bold text-center text-white">Dev Projects</h1>

<form action="{{ route('crm.store-dev') }}" method="post">
    @csrf
    <!-- Home page -->

    <div class="">
        <h2 class="ml-8 text-2xl text-white">Hero section</h2>
        <div class="grid grid-cols-2 gap-4 m-4">
            <x-form.input-text
                id="title"
                type="text"
                label="Título"
                name="title"
                placeholder="Escribe un título..."
            ></x-form.input-text>
            <x-form.input-file
                id="image"
                name="image"
                label="Imagen"
            ></x-form.input-file>
        </div>
        <div class="grid grid-cols-2 gap-4 m-4">
            <x-form.textarea
                id="description"
                label="Descripción"
                name="description"
                placeholder="Escribe una descripción..."
            ></x-form.textarea>
        </div>
    </div>

    <x-form.submit/>
</form>
@endsection
