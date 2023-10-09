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
    <body>
        <div class="min-h-screen flex">
            @include('crm.partials.navbar')
            <main class="w-10/12 flex flex-col relative dark:bg-zinc-800 z-0">
                <div class="flex items-center justify-center">
                    <div class="m-4 w-8/12 h-8/12 rounded-lg bg-green-500 place-self-center">
                        @yield('main')
                    </div>
                </div>
            </main>
        </div>
        @include('website.partials.footer')
    </body>
</html>
