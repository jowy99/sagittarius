{{--@formatter:off--}}
@component('mail::message')
# Nueva solicitud de contacto

Has recibido una nueva solicitud de contacto.

El cliente ha proporcionado la siguiente información:
@component('mail::panel')
* Nombre: {{ $request->name }}
* Apellido: {{ $request->surname }}
* Email: {{ $request->email }}
@endcomponent
Y el siguiente mensaje:
@component('mail::panel')
{{ $request->message }}
@endcomponent

Puedes responder a este mensaje o bien,
<x-mail::button url="mailto:{{ $request->email }}">
    Empezar un nuevo mensaje
</x-mail::button>
@endcomponent
