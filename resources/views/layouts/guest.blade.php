<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900" style="background: radial-gradient(circle at 0% 0%, rgba(52, 48, 48, 0.95), rgba(2, 0, 1, 0) 100%),  radial-gradient(circle at 100% 100%, rgba(215, 211, 211, 0), rgba(2, 2, 24, 0) 100%);">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div class="row ">
                <div class="col-10 col-md-8 col-lg-7 mx-auto mt-2 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg" style="background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
