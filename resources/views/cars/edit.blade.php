<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Modifier une annonce') }}
            </h2>

            <a class="underline text-gray-800 text-sm" href="{{ route('cars.index') }}">{{ __('Voir toutes les annonces') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('cars.partials.create-car-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('cars.partials.delete-car-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
