@extends('website.layout')

@section('main')
<div class="w-full h-full bg-green-500 md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
    <div class="lg:flex lg:space-x-8">
        <div class="hidden lg:block lg:w-5/12 lg:h-full">
            <img src="https://i.pinimg.com/564x/a0/48/af/a048af48e2e54f80c64d9f6d02c08cc8.jpg" alt="" class="w-full h-full">
        </div>
        <div class="m-4">
            <div class="my-4 space-y-4">
                <x-h1>Contact us</x-h1>
                <x-p>Si tienes alguna pregunta, colaboración o simplemente quieres saludar, no dudes en ponerte en contacto conmigo. Estaré encantado/a de escucharte y responder lo antes posible.</x-p>
            </div>
            <hr class="mt-8 mb-4">
            <form action="">
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
                            id="msg"
                            name="msg"
                            label="msg"
                            placeholder="Mensaje"
                        ></x-form.textarea>
                    </div>
                </div>
                <x-form.submit>{{ __('website.opinions.button') }}</x-form.submit>
            </form>
        </div>
    </div>
</div>
@endsection
