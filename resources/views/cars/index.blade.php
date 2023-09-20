<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Mes annonces') }}
            </h2>

            <a class="px-3 py-2 font-medium rounded-sm text-white bg-teal-600" href="{{ route('cars.create') }}">{{ __('Ajouter une annonce') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (session('status'))
                <div class="mb-4 px-4 py-3 text-teal-900 rounded bg-teal-300">
                    {!! session('status') !!}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="mb-10 table-auto w-full border-collapse">
                        <thead>
                        <tr>
                            <th class="p-2 text-left" >{{ __('Marque') }}</th>
                            <th class="p-2 text-left">{{ __('Modèle') }}</th>
                            <th class="p-2 text-left">{{ __('Année') }}</th>
                            <th class="p-2 text-left">{{ __('Prix') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td class="px-2 py-3 text-gray-600 border-b">{{ $car->brand }}</td>
                                <td class="px-2 py-3 text-gray-600 border-b">{{ $car->model }}</td>
                                <td class="px-2 py-3 text-gray-600 border-b">{{ $car->year }}</td>
                                <td class="px-2 py-3 text-gray-600 border-b">{{ __(':km km', ['km' =>  $car->km]) }}</td>
                                <td class="px-2 py-3 text-gray-600 border-b">{{ __(':price €', ['price' =>  $car->price]) }}</td>
                                <td class="px-2 py-3 text-gray-600 border-b">
                                    <a href="{{ route('cars.edit', $car) }}">{{ __('Modifier') }} </a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
