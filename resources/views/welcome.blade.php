<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
<div class="hidden">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<section class="mx-auto max-w-7xl px-6 lg:px-8 py-10">
    <div class="grid grid-cols-3 gap-10">
        @foreach($cars as $car)
            <article class="p-4 rounded-md border border-gray-200">

                <header class="mb-2">
                    <img class="mb-2 w-full h-auto" alt="{{ $car->model }}" src="https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80"/>
                    <h2 class="font-bold">{{ $car->brand }} {{ $car->model }}</h2>
                </header>
                <div>
                    <ul class="space-y-1 mb-4 text-sm text-gray-600">
                        <li>{{ __('Année :year', ['year' => $car->year]) }}</li>
                        <li>{{ __(':km km', ['km' => $car->km]) }}</li>
                    </ul>
                    <span class="px-2 py-1 font-bold text-white rounded bg-fuchsia-400">
                        {{ __(':price €', ['price' => $car->price]) }}
                    </span>
                </div>
            </article>

        @endforeach
    </div>
</section>
</body>
</html>
