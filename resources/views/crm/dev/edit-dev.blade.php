@extends('crm.layout')

@push('meta')
<meta property="og:image" content="{{ $devs->getFirstMediaUrl('gallery', 'thumb') }}">
<meta property="og:image:secure_url" content="{{ $devs->getFirstMediaUrl('default') }}">
@endpush

@section('main')

<div class="min-h-screen w-full space-y-12">
    <div class="p-2 md:flex md:items-center md:justify-center md:mt-8">
        <div class="w-full h-full rounded-lg py-8 bg-green-700 dark:bg-green-800 dark:border-green-700 md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
            <form action="{{ route('crm.update-dev', $devs->id) }}" method="post">
                <div class="">
                    <h1 class="capitalize font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">edit dev project: {{ $devs->title }}</h1>
                    <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
                    <div class="grid gap-4 m-4">
                        <x-form.input-text
                            id="title"
                            label="Título"
                            type="text"
                            name="title"
                            value="{{ $devs->title }}"
                            placeholder="Título"
                        ></x-form.input-text>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-4 m-4">
                        <x-form.textarea
                            id="description"
                            label="Descripción"
                            name="description"
                            placeholder="Descripción"
                        >{{ $devs->description }}</x-form.textarea>
                        <img src="{{ $devs->getFirstMedia('devProjects')->getUrl('web') }}" alt="">
                    </div>
                </div>

                <x-form.submit>{{ __('crm.default.guardar') }}</x-form.submit>
                @csrf
                @method('PUT')
            </form>
        </div>
    </div>
</div>
@endsection
