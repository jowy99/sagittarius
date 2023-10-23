@extends('crm.layout')

@section('main')
<div class="min-h-screen w-full space-y-12">
    <div class="p-2 md:flex md:items-center md:justify-center md:mt-8">
        <div class="w-full h-full rounded-lg py-8 bg-green-700 dark:bg-green-800 dark:border-green-700 md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
            <form action="{{ route('crm.store-dev') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <h1 class="capitalize font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">add dev project</h1>
                    <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
                    <div class="space-y-4">
                        <div>
                            <h2 class="capitalize ml-4 font-bold text-green-400 dark:text-green_light-600 text-2xl md:text-4xl">Titulo</h2>
                            <div class="grid lg:grid-cols-2 gap-4 m-4">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $devs)
                                    <x-form.input-text
                                        id="title"
                                        type="text"
                                        name="title[{{ $devs['short'] }}]"
                                        placeholder="{{ $devs['native'] }}"
                                    ></x-form.input-text>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <h2 class="capitalize ml-4 font-bold text-green-400 dark:text-green_light-600 text-2xl md:text-4xl">Descripción</h2>
                            <div class="grid lg:grid-cols-2 gap-4 m-4">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $devs)
                                    <x-form.textarea
                                        id="description"
                                        label="Descripción"
                                        name="description[{{ $devs['short'] }}]"
                                        placeholder="{{ $devs['native'] }}"
                                    ></x-form.textarea>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <h2 class="capitalize ml-4 font-bold text-green-400 dark:text-green_light-600 text-2xl md:text-4xl">GitHub</h2>
                            <div class="m-4">
                                <x-form.input-text
                                    id="github"
                                    type="text"
                                    label="Github"
                                    name="github"
                                    value="https://github.com/jowy99/"
                                    placeholder="Github"
                                ></x-form.input-text>
                            </div>
                        </div>
                        <div>
                            <h2 class="capitalize ml-4 font-bold text-green-400 dark:text-green_light-600 text-2xl md:text-4xl">Foto</h2>
                            <div class="m-4">
                                <x-form.input-file
                                    id="image"
                                    name="image"
                                ></x-form.input-file>
                            </div>
                        </div>
                    </div>
                </div>
                <x-form.submit>{{ __('crm.default.guardar') }}</x-form.submit>
            </form>
        </div>
    </div>
</div>
@endsection
