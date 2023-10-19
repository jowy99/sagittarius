@extends('crm.layout')

@section('main')
<div class="min-h-screen w-full space-y-12">
    <div class="p-2 md:flex md:items-center md:justify-center md:mt-8">
        <div class="w-full h-full rounded-lg py-8 bg-green-700 dark:bg-green-800 dark:border-green-700 md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
            <form action="">
                <div class="">
                    <h1 class="capitalize font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">edit opinions</h1>
                    <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
                    <div class="m-4">
                        <x-form.input-text
                            id="title"
                            name="title"
                            label="Nombre"
                            value="{{ __('website.opinions.title') }}"
                            placeholder="{{ __('crm.default.nombre') }}"
                        ></x-form.input-text>
                    </div>
                    <div class="m-4">
                        <x-form.textarea
                            id="text"
                            name="text"
                            label="text"
                            placeholder=""
                        >{{ __('website.opinions.text') }}</x-form.textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
