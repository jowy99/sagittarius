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
                label="Título"
                name="title"
                placeholder="Escribe un título..."
            ></x-form.input-text>
            <x-form.textarea
                id="description"
                label="Descripción"
                name="description"
                placeholder="Escribe una descripción..."
            ></x-form.textarea>
        </div>
    </div>

    <div class="flex items-center justify-center m-8">
        <x-form.submit/>
    </div>
</form>
@endsection
