@extends('website.layout')

@section('main')

<div class="w-full h-full md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
    <div class="my-4 space-y-4">
        <x-h1>Dev</x-h1>
        <x-p>Mis proyectos</x-p>
    </div>
    <div>
        <div class="grid md:grid-cols-3 gap-4">
            @forelse($devs as $dev)
            <article class="relative flex flex-col rounded-lg border border-gray-200 bg-green-500 transition-shadow ease-out group divide-y divide-gray-200 hover:shadow-lg">
                <section class="relative">
                    <a class="relative" href="">
                        <img
                            class="w-full rounded-t-lg object-cover object-center transition-all ease-out aspect-[16/9] group-hover:brightness-75"
                            src="{{ $dev->getMedia('gallery')->first()->getUrl('web') }}"
                            alt="{{ $dev->getMedia('gallery')->first()->name }}"
                        >
                    </a>
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
                    <div>
                        <p>Redes</p>
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
</div>

@endsection
