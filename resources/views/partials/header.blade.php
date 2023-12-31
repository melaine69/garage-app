<header class="flex-shrink-0 border-b border-gray-100">
    <div class="flex items-center mx-auto max-w-7xl px-6 lg:px-8 py-4">
        <a class="text-xl font-bold text-primary" href="{{ route('welcome') }}" title="{{ config('app.name') }}">
            {{ config('app.name') }}
        </a>

        <nav class="hidden sm:block ml-6">
            <ul class="sm:ml-auto flex flex-col sm:flex-row items-center gap-2 sm:gap-6">
                <li><a class="font-medium text-gray-600 hover:text-black" href="{{ route('opening') }}" title="{{ __("Horaires d'ouverture") }}">{{ __("Horaires d'ouverture") }}</a></li>
                <li><a class="font-medium text-gray-600 hover:text-black" href="{{ route('contact') }}" title="{{ __('Contact') }}">{{ __('Contact') }}</a></li>
            </ul>
        </nav>

        @if (Route::has('login'))
            <div class="flex items-center gap-2 ml-auto">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="font-medium text-gray-600 hover:text-black">{{ __('Dashboard') }}</a>
                @else
                    <a href="{{ route('login') }}" class="px-3 py-2 rounded-md bg-gray-200">{{ __('Log in') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-3 py-2 text-white rounded-md bg-primary">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</header>
