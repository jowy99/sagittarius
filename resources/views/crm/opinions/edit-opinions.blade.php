@extends('crm.layout')

@section('main')
<form action="">
    <div class="">
        <h1 class="mt-4 text-4xl font-bold text-center text-white">{{ __('crm.default.opiniones') }}</h1>
        <div class="m-4">
            <x-form.input-text
                id="title"
                name="title"
                label="Nombre"
                value="{{ __('website.opinions.title') }}"
                placeholder="{{ __('crm.default.nombre') }}"
            ></x-form.input-text>
        </div>
        <div class="m-4">
            <x-form.textarea
                id="text"
                name="text"
                label="text"
                placeholder=""
            >{{ __('website.opinions.text') }}</x-form.textarea>
        </div>
    </div>
</form>
@endsection
