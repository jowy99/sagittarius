@extends('website.layout')

@section('main')
<div class="min-h-screen w-full mt-12 space-y-12">
    <div class="flex-col space-y-4 h-1/4 w-full">
        <h1 class="font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">Opiniones</h1>
        <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
    </div>

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
                    <form action="{{ route('web.opinions-store') }}" method="post">
                        @csrf
                        <div class="space-y-8">
                            <div class="grid md:grid-cols-2 gap-4">
                                <x-form.input-text
                                    id="name"
                                    name="name"
                                    type="text"
                                    placeholder="{{ __('website.opinions.name') }}"
                                    required="true"
                                ></x-form.input-text>
                                <x-form.input-text
                                    id="surname"
                                    name="surname"
                                    type="text"
                                    placeholder="{{ __('website.opinions.surname') }}"
                                    required="true"
                                ></x-form.input-text>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <x-form.input-text
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="{{ __('website.opinions.email') }}"
                                    required="true"
                                ></x-form.input-text>
                                <x-form.select-input
                                    name="rate"
                                    required="true"
                                >
                                    <x-form.select-option
                                        disabled="true"
                                    >{{ __('website.opinions.valoration.0') }}</x-form.select-option>
                                    <x-form.select-option
                                        value="0"
                                    >{{ __('website.opinions.valoration.1') }}</x-form.select-option>
                                    <x-form.select-option
                                        value="1"
                                    >{{ __('website.opinions.valoration.2') }}</x-form.select-option>
                                    <x-form.select-option
                                        value="2"
                                    >{{ __('website.opinions.valoration.3') }}</x-form.select-option>
                                    <x-form.select-option
                                        value="3"
                                    >{{ __('website.opinions.valoration.4') }}</x-form.select-option>
                                    <x-form.select-option
                                        value="4"
                                    >{{ __('website.opinions.valoration.5') }}</x-form.select-option>
                                    <x-form.select-option
                                        value="5"
                                    >{{ __('website.opinions.valoration.6') }}</x-form.select-option>
                                </x-form.select-input>
                            </div>
                            <div>
                                <x-form.textarea
                                    id="comment"
                                    name="comment"
                                    label="comment"
                                    placeholder="{{ __('website.opinions.msg') }}"
                                ></x-form.textarea>
                            </div>
                        </div>
                        <x-form.submit>{{ __('website.opinions.button') }}</x-form.submit>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
