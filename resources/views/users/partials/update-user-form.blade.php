<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __("Modifier l'utilisateur") }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Utilisez ce formulaire pour modifier les informations de l'utilisateur") }}
        </p>
    </header>

    <form method="post" action="{{ route('users.update', $user) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required  />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $user->email)" required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Modifier') }}</x-primary-button>
        </div>
    </form>
</section>
