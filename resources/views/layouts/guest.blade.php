<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Zepelin Store') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" style="background: rgb(26, 26, 26);">
    <br>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 mb-6 sm:pt-0">
            <div class="container" style="width: 20rem; border-color: rgb(54, 54, 54);">
                <a href="{{ url('/#') }}"><img src="{{ asset('images\logo-zeppelin.png') }}" class="card-img-top" alt="..."></a> 
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg" style="background: linear-gradient(90deg, #ffcc2f, #ef5734);">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
