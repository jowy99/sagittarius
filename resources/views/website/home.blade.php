@extends('website.layout')

@section('main')
    <div class="w-full h-screen flex">
        <div class="w-6/12 h-full flex flex-col gap-4 items-center justify-center">
            <h1 class="uppercase font-bold text-green_light-600 text-6xl">{{ __('website.home.hero.personalname') }}</h1>
            <h1 class="uppercase font-bold text-green_light-600 text-6xl">{{ __('website.home.hero.personalsurname') }}</h1>
            <p id="herotext" class="text-green-300 text-md">
                {{ __('website.home.hero.text') }}
            </p>
            <a href="">
                <x-primary-button>{{ __('website.home.hero.projectsbutton') }}</x-primary-button>
            </a>
        </div>
        <div class="w-6/12 h-full bg-zinc-800">
            <img src="https://i.pinimg.com/564x/a0/48/af/a048af48e2e54f80c64d9f6d02c08cc8.jpg" alt="" class="w-full h-screen">
        </div>
    </div>
    <div class="w-full h-screen flex">
        <div class="w-6/12 h-full flex flex-col gap-4 items-center justify-center">
            <a href="{{ route('dev') }}" class="w-full h-full">
                <img src="{{ asset('storage/Home/devprojects.jpg') }}" alt="" class="object-fill">
            </a>
        </div>
        <div class="w-6/12 h-full flex flex-col gap-4 items-center justify-center">
            <a href="{{ route('projects') }}" class="w-full h-full">
                <img src="{{ asset('storage/Home/projects.png') }}" alt="" class="object-fill">
            </a>
        </div>
    </div>
@endsection
