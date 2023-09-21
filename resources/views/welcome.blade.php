<x-guest-layout>
    <section class="mx-auto max-w-7xl px-6 lg:px-8 py-10">
        Accueil

        <div class="grid grid-cols-3 gap-10">
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
                        <span class="px-2 py-1 font-bold text-white rounded bg-fuchsia-400">
                        {{ __(':price €', ['price' => $car->price]) }}
                    </span>
                    </div>
                </article>

            @endforeach
        </div>
    </section>
</x-guest-layout>
