<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts --> 
        <link rel="stylesheet" href="https://use.typekit.net/amz3ntg.css">
        <link rel="preconnect" href="https://fonts.bunny.net">  
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])                                 	
    </head>
    <body>
        <section class="welcome">
            <article class="welcome__auth">
                @if (Route::has('login'))
                    @auth
                        <h2 class="welcome__auth--name">
                            Welcome {{Auth::user()->name}}
                        </h2>
                        <a href="{{ url('/dashboard/dashboard') }}" class="welcome__auth--dashboard">
                            Dashboard
                        </a>
                    @else
                        <h2 class="welcome__auth--name">
                            Welcome guest
                        </h2>
                        <a href="{{ route('login') }}" class="welcome__auth--signin">
                            Log in
                        </a>
                    @endauth
                @endif
            </article>
        </section> 
    </body>
</html>
