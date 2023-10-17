@extends('website.layout')

@section('main')

<div class="w-full h-full md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
    <div class="my-4 space-y-4">
        <x-h1>Projects</x-h1>
        <x-p>Mis proyectos</x-p>
    </div>
    <div>
        <div class="grid md:grid-cols-3 gap-4">
            @forelse($projs as $proj)
            <article class="relative flex flex-col rounded-lg border border-gray-200 bg-green-500 transition-shadow ease-out group divide-y divide-gray-200 hover:shadow-lg">
                <section class="relative">
                    <img
                        class="w-full rounded-t-lg object-cover object-center transition-all ease-out aspect-[16/9] group-hover:brightness-75"
                        src="https://i2.wp.com/ortodontiadescomplicada.com.br/wp-content/uploads/2016/10/img-300x300.png?fit=300%2C300"
                    >
                </section>
                <section class="px-5 py-4 space-y-4">
                    <div class="font-bold text-carbon-800">
                        {{ $proj->title }}
                    </div>
                    <div class="text-carbon-800">
                        {{ $proj->description }}
                    </div>
                </section>
                <section class="text-right">
                    <div class="my-2 mx-4 flex justify-end space-x-6">
                        <a href="{{ route('projects-view', $proj->file) }}" target="_blank" class="text-green-200 hover:text-white">
                            <x-heroicon-s-eye class="w-6 h-6" />
                        </a>
                        <a href="{{ route('projects-download', $proj->file) }}" class="text-green-200 hover:text-white">
                            <x-feathericon-download class="w-6 h-6" />
                        </a>
                    </div>
                </section>
            </article>
            @empty
            <p>Vacío</p>
            @endforelse
        </div>
        <div>
            {{ $projs->links('pagination::tailwind') }}
        </div>
    </div>
</div>

@endsection
