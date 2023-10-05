@extends('website.layout')

@section('main')
<div class="flex relative items-center justify-center">
    <div class="w-9/12 h-9/12 m-4 p-8 rounded-lg bg-green-500 space-y-4">
        <div class="space-y-4">
            <x-h1>Valoración</x-h1>
            <x-p>
                Me gustaría que opinaras sobre este sitio web.
            </x-p>
        </div>
        <hr>
        <div>
            <form action="">
                <div class="space-y-8">
                    <div class="grid grid-cols-2 gap-4">
                        <x-form.input-text
                            id="name"
                            name="name"
                            type="text"
                            label="Nombre"
                            placeholder="Escribe tu nombre"
                            required="true"
                        ></x-form.input-text>
                        <x-form.input-text
                            id="surname"
                            name="surname"
                            label="Apellido"
                            type="text"
                            placeholder="Escribe tu apellido"
                            required="true"
                        ></x-form.input-text>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <x-form.input-text
                            id="email"
                            name="email"
                            type="email"
                            label="Email"
                            placeholder="Escribe tu email"
                            required="true"
                        ></x-form.input-text>
                        <x-form.select-input
                            label="Valoración"
                            required="true"
                        >
                            <x-form.select-option
                                disabled="true"
                            >Selecciona uno</x-form.select-option>
                            <x-form.select-option
                                value="0"
                            >0</x-form.select-option>
                            <x-form.select-option
                                value="1"
                            >1</x-form.select-option>
                            <x-form.select-option
                                value="2"
                            >2</x-form.select-option>
                            <x-form.select-option
                                value="3"
                            >3</x-form.select-option>
                            <x-form.select-option
                                value="4"
                            >4</x-form.select-option>
                            <x-form.select-option
                                value="5"
                            >5</x-form.select-option>
                        </x-form.select-input>
                    </div>
                    <div>
                        <x-form.textarea
                            id="comment"
                            name="comment"
                            label="comment"
                            placeholder="Escribe tu comentario aquí"
                        ></x-form.textarea>
                    </div>
                </div>
                <x-form.submit/>
            </form>
        </div>
    </div>
</div>
@endsection
