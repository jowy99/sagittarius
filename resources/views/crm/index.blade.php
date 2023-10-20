@extends('crm.layout')

@section('main')
<div class="min-h-screen w-full space-y-12">
    <div class="p-2 md:flex md:items-center md:justify-center md:mt-8">
        <div class="w-full h-full rounded-lg py-8 bg-green-700 dark:bg-green-800 dark:border-green-700 md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- Home page -->
                <div class="">
                    <h1 class="capitalize font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">edit home page</h1>
                    <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
                    <div class="grid lg:grid-cols-2 gap-4 m-4">
                        <x-form.input-text
                            id="nombre"
                            name="nombre"
                            label="Nombre"
                            value="{{ __('website.home.hero.personalname') }}"
                            placeholder="{{ __('crm.default.nombre') }}"
                        ></x-form.input-text>
                        <x-form.input-text
                            id="apellido"
                            name="apellido"
                            label="Apellido"
                            value="{{ __('website.home.hero.personalsurname') }}"
                            placeholder="{{ __('crm.default.apellido') }}"
                        ></x-form.input-text>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-4 m-4">
                        <x-form.textarea
                            id="herotext"
                            label="Texto inicial"
                            placeholder="Escribe un texto"
                            name="herotext"
                        >{{ __('website.home.hero.text') }}</x-form.textarea>
                        <x-form.input-file
                            id="herosection"
                            label="Imagen hero section"
                            name="herosectionn"
                        ></x-form.input-file>
                    </div>
                </div>

                <!-- Page 1 -->

                <div>
                    <h2 class="capitalize ml-4 font-bold text-green-400 dark:text-green_light-600 text-2xl md:text-4xl">projects</h2>
                    <div class="grid lg:grid-cols-2 gap-4 m-4">
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

                <div>
                    <h2 class="capitalize ml-4 font-bold text-green-400 dark:text-green_light-600 text-2xl md:text-4xl">contact</h2>
                    <div class="grid gap-4 m-4">
                        <x-form.input-file
                            id="contact"
                            label="contact"
                            name="contact"
                        ></x-form.input-file>
                    </div>
                </div>

                <div class="flex items-center justify-center m-8">
                    <x-form.submit>{{ __('crm.default.guardar') }}</x-form.submit>
                </div>
                @csrf
                @method('PUT')
            </form>
        </div>
    </div>
</div>
@endsection
