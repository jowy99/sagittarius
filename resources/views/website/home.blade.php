@extends('website.layout')

@section('main')
    <div class="w-full h-screen flex">
        <div class="w-6/12 h-full flex flex-col gap-4 items-center justify-center">
            <h1 class="uppercase font-serif text-6xl">joël arnaud</h1>
            <p id="herotext">
                Soy un joven de 23 años.
            </p>
            <a href="">
                <x-primary-button>Mis proyectos</x-primary-button>
            </a>
        </div>
        <div class="w-6/12 h-full bg-zinc-800">
            <img src="https://i.pinimg.com/564x/a0/48/af/a048af48e2e54f80c64d9f6d02c08cc8.jpg" alt="" class="w-full h-screen">
        </div>
    </div>
    <div class="w-full h-screen flex">
        <div class="w-6/12 h-full flex flex-col gap-4 items-center justify-center">
            <div class="text-xl hover:text-2xl -rotate-90">
                <p>
                    Mis proyectos
                </p>
                <p>
                    como desarrollador web.
                </p>
            </div>
        </div>
        <div class="w-6/12 h-full flex flex-col gap-4 items-center justify-center">
            <p>
                Mis otros proyectos.
            </p>
        </div>
    </div>
@endsection
