@extends('crm.layout')

@section('main')
    <h1 class="mt-4 text-4xl font-bold text-center text-white">Home</h1>

    <form action="">

        <!-- Home page -->

        <div class="">
            <h2 class="ml-8 text-2xl text-white">Hero section</h2>
            <div class="grid grid-cols-2 gap-4 m-4">
                <x-form.textarea
                    id="herotext"
                    label="Texto inicial"
                    placeholder="Escribe un texto"
                    name="herotext"
                ></x-form.textarea>
                <x-form.input-file
                    id="herosection"
                    label="Imagen hero section"
                    name="herosectionn"
                ></x-form.input-file>
            </div>
        </div>

        <!-- Page 1 -->

        <div>
            <h2 class="ml-8 text-2xl text-white">Page 1</h2>
            <div class="grid grid-cols-2 gap-4 m-4">
                <x-form.input-file
                    id="devprojects"
                    label="Imagen proyectos dev"
                    name="devprojects"
                ></x-form.input-file>
                <x-form.input-file
                    id="otherprojects"
                    label="Imagen otros proyectos"
                    name="otherprojects"
                ></x-form.input-file>
            </div>
        </div>

        <div class="flex items-center justify-center m-8">
            <x-form.submit/>
        </div>
    </form>
@endsection
