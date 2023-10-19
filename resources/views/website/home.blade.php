@extends('website.layout')

@section('main')

    <!-- Hero -->

    <div class="w-full h-screen md:flex">
        <div class="md:w-6/12 w-full h-full flex flex-col gap-4 items-center justify-center">
            <h1 class="uppercase font-bold text-green-400 dark:text-green_light-600 text-6xl">{{ __('website.home.hero.personalname') }}</h1>
            <h1 class="uppercase font-bold text-green-400 dark:text-green_light-600 text-6xl">{{ __('website.home.hero.personalsurname') }}</h1>
            <p id="herotext" class="text-green-300 text-md">
                {{ __('website.home.hero.text') }}
            </p>
            <a href="">
                <x-primary-button>{{ __('website.home.hero.projectsbutton') }}</x-primary-button>
            </a>
        </div>
        <div class="hidden md:block md:w-6/12 md:h-full bg-zinc-800">
            <img src="https://i.pinimg.com/564x/a0/48/af/a048af48e2e54f80c64d9f6d02c08cc8.jpg" alt="" class="w-full h-screen">
        </div>
    </div>

    <!-- Section 1 - Projects -->

    <div class="w-full min-h-screen space-y-12 p-4 md:mt-24 md:px-52">
        <div class="flex-col space-y-4 h-1/4 w-full">
            <h1 class="font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">Mis proyectos</h1>
            <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
        </div>

        <!-- Project Cards -->

        <div class="grid gap-12 justify-center items-center sm:grid-cols-1 md:grid-cols-2 h-3/4 w-full md:h-full md:pt-20">
            <!-- Dev Projects Card -->
            <div class="w-full h-full border border-green-200 rounded-lg shadow bg-green-700 dark:bg-green-800 dark:border-green-700 md:flex">
                <a href="#" class="md:w-1/2 md:h-full">
                    <img class="rounded-t-lg" src="{{ asset('storage/Home/devprojects.jpg') }}" alt="" />
                </a>
                <div class="p-5 space-y-6 md:space-y-12 md:w-1/2 md:h-full">
                    <a href="#">
                        <h5 class="capitalize mb-2 text-2xl font-bold tracking-tight text-green_light-500 dark:text-white">proyectos de desarrollo</h5>
                    </a>
                    <p class="mb-3 font-normal text-light-500 dark:text-green_light-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </div>

            <!-- Projects Card -->
            <div class="w-full h-full border border-green-200 rounded-lg shadow bg-green-700 dark:bg-green-800 dark:border-green-700 md:flex">
                <a href="#" class="md:w-1/2 md:h-full">
                    <img class="rounded-t-lg" src="{{ asset('storage/Home/projects.png') }}" alt="" />
                </a>
                <div class="p-5 space-y-6 md:space-y-12 md:w-1/2 md:h-full">
                    <a href="#">
                        <h5 class="capitalize mb-2 text-2xl font-bold tracking-tight text-green_light-500 dark:text-white">otros proyectos</h5>
                    </a>
                    <p class="mb-3 font-normal text-light-500 dark:text-green_light-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </div>
        </div>


        <!-- End Project Cards -->

    </div>

    <!-- Section 2 - Contact -->

    <div class="min-h-screen w-full mt-12 space-y-12">
        <div class="flex-col space-y-4 h-1/4 w-full">
            <h1 class="font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">Contacto</h1>
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
                        <form action="{{ route('send-contact') }}" method="post">
                            @csrf
                            <div class="space-y-4 md:space-y-8">
                                <div class="grid gap-2 md:grid-cols-2 md:gap-4">
                                    <x-form.input-text
                                        id="name"
                                        name="name"
                                        type="text"
                                        placeholder="{{ __('crm.default.nombre') }}"
                                        required="true"
                                    ></x-form.input-text>
                                    <x-form.input-text
                                        id="surname"
                                        name="surname"
                                        type="text"
                                        placeholder="{{ __('crm.default.apellido') }}"
                                        required="true"
                                    ></x-form.input-text>
                                </div>
                                <div>
                                    <x-form.input-text
                                        id="email"
                                        name="email"
                                        type="email"
                                        placeholder="Email"
                                        required="true"
                                    ></x-form.input-text>
                                </div>
                                <div>
                                    <x-form.textarea
                                        id="message"
                                        name="message"
                                        label="message"
                                        placeholder="Mensaje"
                                    ></x-form.textarea>
                                </div>
                            </div>
                            <x-form.submit>{{ __('website.opinions.button') }}</x-form.submit>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Form -->
    </div>

@endsection
