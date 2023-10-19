@extends('website.layout')

@section('main')
<div class="w-full min-h-screen space-y-12 p-4 lg:mt-24 lg:px-52">
    <div class="flex-col space-y-4 h-1/4 w-full">
        <h1 class="capitalize font-bold text-green-400 dark:text-green_light-600 text-4xl text-center lg:text-6xl">proyectos dev</h1>
        <p class="text-md text-green-300">bkjnds</p>
    </div>

    <!-- Project Cards -->

    <div class="grid gap-12 justify-center items-center lg:grid-cols-3 h-3/4 w-full lg:h-full lg:pt-20">
        @forelse($devs as $dev)
        <article class="relative flex flex-col rounded-lg border border-gray-200 bg-green-500 transition-shadow ease-out group divide-y divide-gray-200 hover:shadow-lg">
            <section class="relative">
                <img
                    class="w-full rounded-t-lg object-cover object-center transition-all ease-out aspect-[16/9] group-hover:brightness-75"
                    src="{{ $dev->getFirstMedia('devProjects')->getUrl('web') }}"
                >
            </section>
            <section class="px-5 py-4 space-y-4">
                <div class="font-bold text-carbon-800">
                    {{ $dev->title }}
                </div>
                <div class="text-carbon-800">
                    {{ $dev->description }}
                </div>
            </section>
            <section class="text-right">
                <div class="my-2 mx-4 flex justify-end">
                    <a href="{{ $dev->github }}" class="text-green-200 hover:text-white">
                        <x-bi-github class="w-6 h-6" />
                    </a>
                </div>
            </section>
        </article>
        @empty
        <p>Vacío</p>
        @endforelse
    </div>
    <div>
        {{ $devs->links('pagination::tailwind') }}
    </div>
</div>
@endsection
