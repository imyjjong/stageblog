<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/amz3ntg.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/846de9e07b.js'])
    </head>
    <body>
        <div class="header">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="header">
                    <div class="header__navigation">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="main">
                {{ $slot }}
            </main>
            <!-- <footer class="footer">
                <p class="footer__text">Stageblog</p>
            </footer> -->
        </div>
    </body>
</html>
