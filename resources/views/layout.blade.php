<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title') Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-center bg-gray-100 dark:bg-gray-900 text-white">
            <nav>
                <ul class="flex gap-3">
                    <li><a href="{{route('home.welcome')}}">Welcome</a></li>
                    <li><a href="{{route('home.index')}}">Home</a></li>
                    <li><a href="{{route('computers.index')}}">Computers</a></li>
                    <li><a href="{{route('computers.create')}}">Create Computer</a></li>
                    <li><a href="{{route('home.about')}}">About</a></li>
                </ul>
            </nav>
            @yield('content')
        </div>
    </body>
</html>
