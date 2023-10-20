@extends('website.layout')

@section('main')
<div class="min-h-screen w-full mt-12 space-y-12">
    <div class="flex-col space-y-4 h-1/4 w-full">
        <h1 class="font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">About Me</h1>
        <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
    </div>

    <!-- Contact Form -->
    <div class="p-2 md:flex md:items-center md:justify-center md:mt-8">
        <div class="w-full h-full rounded-lg py-8 bg-green-700 dark:bg-green-800 dark:border-green-700 md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
            <div class="lg:flex lg:space-x-8">
                <div class="hidden lg:block lg:w-5/12 lg:h-full">
                    <img src="https://i.pinimg.com/564x/a0/48/af/a048af48e2e54f80c64d9f6d02c08cc8.jpg" alt="" class="w-full h-full">
                </div>
                <div class="m-4">
                    <div class="my-4">
                        <x-p>Si tienes alguna pregunta, colaboración o simplemente quieres saludar, no dudes en ponerte en contacto conmigo. Estaré encantado/a de escucharte y responder lo antes posible.</x-p>
                    </div>
                    <hr class="mt-8 mb-4">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
