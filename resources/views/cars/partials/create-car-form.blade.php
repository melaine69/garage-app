@php
    $currentYear = date("Y");
    $years = [];

    for ($i = $currentYear; $i >= $currentYear - 49; $i--) {
        $years[$i] = $i;
    }
@endphp

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ $car ?__("Modifier l'annonce") : __('Ajouter une nouvelle annonce') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ $car ?__("Utilisez ce formulaire pour modifier une annonce.") :__("Utilisez ce formulaire et ajouter une nouvelle annonce.") }}
        </p>
    </header>

    <form method="post" action="{{ $car ? route("cars.update", $car) : route('cars.store') }}" class="mt-6 space-y-6">
        @csrf
        @if($car) @method('patch') @endif

        <div>
            <x-input-label for="brand" :value="__('Marque')" />
            <x-text-input id="brand" name="brand" type="text" class="mt-1 block w-full" :value="old('brand', $car?->brand)" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('brand')" />
        </div>

        <div>
            <x-input-label for="model" :value="__('Modèle')" />
            <x-text-input id="model" name="model" type="text" class="mt-1 block w-full" :value="old('model', $car?->model)" required />
            <x-input-error class="mt-2" :messages="$errors->get('model')" />
        </div>

        <div>
            <x-input-label for="year" :value="__('Année')" />
            <x-select id="year" name="year" type="text" class="mt-1 block w-full" :options="$years" :value="old('year', $car?->year)" required />
            <x-input-error class="mt-2" :messages="$errors->get('year')" />
        </div>

        <div>
            <x-input-label for="km" :value="__('Kilométrage (km)')" />
            <x-text-input id="km" name="km" type="number" class="mt-1 block w-full" :value="old('km', $car?->km)" min="1" required />
            <x-input-error class="mt-2" :messages="$errors->get('km')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-textarea-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $car?->description)" rows=6 required />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="price" :value="__('Prix (€)')" />
            <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" :value="old('price', $car?->price)" min="1" required />
            <x-input-error class="mt-2" :messages="$errors->get('price')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ $car ? __("Modifier") : __('Créer') }}</x-primary-button>
        </div>
    </form>
</section>
