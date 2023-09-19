<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Ajouter un nouveau utilisateur') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Utilisez ce formulaire et ajouter un nouveau utilisateur au répertoire.") }}
        </p>
    </header>

    <form method="post" action="{{ route('users.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email')" required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Mot de passe')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" :value="old('password')" required />
            <x-input-error class="mt-2" :messages="$errors->get('password')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Créer') }}</x-primary-button>
        </div>
    </form>
</section>
