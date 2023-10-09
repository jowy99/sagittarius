@extends('website.layout')

@section('main')
<div class="inline-flex md:flex md:justify-center md:items-center h-screen">
    <div class="md:w-9/12 md:h-9/12 m-4 md:p-12 rounded-lg bg-green-500 space-y-4">
        <div class="inline-block md:flex space-x-8">
            <div class="w-4/12 h-full">
                <img src="https://i.pinimg.com/564x/a0/48/af/a048af48e2e54f80c64d9f6d02c08cc8.jpg" alt="" class="w-full h-full">
            </div>
            <div class="w-8/12 h-full md:flex items-center justify-center">
                <div class="space-y-4">
                    <div class="space-y-4">
                        <x-h1>{{ __('website.opinions.title') }}</x-h1>
                        <x-p>
                            {{ __('website.opinions.text') }}
                        </x-p>
                    </div>
                    <hr>
                    <div>
                        <form action="">
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
</div>
@endsection
