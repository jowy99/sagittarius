<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        {{--<link rel="preconnect" href="https://fonts.bunny.net">
        <link
            rel="stylesheet"
            href="https://fonts.bunny.net/css?family=acme:400"
        />--}}


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="dark:bg-zinc-800">
        <div class="min-h-screen sm:flex">
            @include('crm.partials.navbar')
            <main class="w-full lg:w-10/12 min-h-screen flex flex-col relative dark:text-white z-0">
                @yield('main')
            </main>
        </div>
        @include('website.partials.footer')
    </body>
</html>
