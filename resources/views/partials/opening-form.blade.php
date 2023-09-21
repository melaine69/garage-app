<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __("Modifier les horaires d'ouverture") }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Utilisez ce formulaire pour modifier les horaires d'ouverture.") }}
        </p>
    </header>

    <form method="post" action="{{ route('opening.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Horaires')" />
            <x-textarea-input id="text" name="text" class="mt-1 block w-full" rows="8" value="{!! old('text', $openingHour?->text) !!}" required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>
        </div>
    </form>
</section>
