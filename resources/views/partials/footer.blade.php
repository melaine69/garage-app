<footer class="bg-gray-100">
    <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-0 mx-auto max-w-7xl px-6 lg:px-8 py-8">
        <p class="text-gray-500">© Copyright {{ date('Y') }} - {{ config('app.name') }}</p>

        <ul class="sm:ml-auto flex flex-col sm:flex-row items-center gap-2 sm:gap-6">
            <li><a class="font-medium text-gray-600 hover:text-black" href="{{ route('opening') }}">{{ __("Horaires d'ouverture") }}</a></li>
            <li><a class="font-medium text-gray-600 hover:text-black" href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
            <li><a class="font-medium text-gray-600 hover:text-black" href="{{ route('terms') }}">{{ __('Politique de confidentialité') }}</a></li>
        </ul>
    </div>
</footer>
