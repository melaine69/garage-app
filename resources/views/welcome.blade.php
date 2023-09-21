<x-guest-layout>
    <section class="py-10">
        <form class="mb-10" action="{{ route('welcome') }}">
            <div class="grid md:grid-cols-4 gap-8 w-full max-w-3xl">
                <div>
                    <span class="block mb-2 font-bold">{{ __('Kilométrage') }}</span>
                    <div class="grid grid-cols-2 gap-2">
                        <x-text-input id="km_min" name="km_min" type="number" placeholder="{{ __('min') }}" min="1"
                                      :value="old('km_min', $appliedFilters['km_min'] ?? null)"/>
                        <x-text-input id="km_max" name="km_max" type="number" placeholder="{{ __('max') }}" min="1" :value="old('km_max', $appliedFilters['km_max'] ?? null)"/>
                    </div>
                </div>

                <div>
                    <span class="block mb-2 font-bold">{{ __('Prix (€)') }}</span>
                    <div class="grid grid-cols-2 gap-2">
                        <x-text-input id="price_min" name="price_min" type="number" placeholder="{{ __('min') }}" min="1" :value="old('price_min', $appliedFilters['price_min'] ?? null)" />
                        <x-text-input id="price_max" name="price_max" type="number" placeholder="{{ __('max') }}" min="1" :value="old('price_max', $appliedFilters['price_max'] ?? null)" />
                    </div>
                </div>

                <div>
                    <span class="block mb-2 font-bold">{{ __('Année') }}</span>
                    <div class="grid grid-cols-2 gap-2">
                        <x-text-input id="year_min" name="year_min" type="number" placeholder="{{ __('min') }}" :min="\App\Models\Car::min('year')"
                                      :value="old('year_min', $appliedFilters['year_min'] ?? null)"/>
                        <x-text-input id="year_max" name="year_max" type="number" placeholder="{{ __('max') }}" :min="\App\Models\Car::min('year')" :value="old('year_max', $appliedFilters['year_max'] ?? null)"/>
                    </div>
                </div>

                <div class="flex items-end">
                    <x-primary-button>{{ __('Rechercher') }}</x-primary-button>
                </div>
            </div>

            @if (!empty($appliedFilters))
                <a class="inline-block mt-2 text-sm text-gray-600 hover:underline" href="{{ route('welcome') }}">{{ __('Réeinitialiser les filtres') }}</a>
            @endif
        </form>

        <div class="grid grid-cols-3 gap-10">
            @if (!$cars->count())
                <p class="col-span-3 text-gray-600">{{ __("Il n'y a aucune voiture qui corresponde à votre recherche.") }}</p>
            @endif

            @foreach($cars as $car)
                <article class="p-4 rounded-md border border-gray-200">

                    <header class="mb-2">
                        <img class="mb-2 w-full h-auto" alt="{{ $car->model }}"
                             src="https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80"/>
                        <h2 class="font-bold">{{ $car->brand }} {{ $car->model }}</h2>
                    </header>
                    <div>
                        <ul class="space-y-1 mb-4 text-sm text-gray-600">
                            <li>{{ __('Année :year', ['year' => $car->year]) }}</li>
                            <li>{{ __(':km km', ['km' => $car->km]) }}</li>
                        </ul>
                        <span class="px-2 py-1 font-bold text-white rounded bg-primary">
                        {{ __(':price €', ['price' => $car->price]) }}
                    </span>
                    </div>
                </article>
            @endforeach

            <div class="col-span-3">
                {!! $cars->links() !!}
            </div>
        </div>
    </section>
</x-guest-layout>
