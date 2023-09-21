<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-3 gap-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mb-1 text-sm font-medium text-gray-600">
                    {{ __("Nombre des administrateurs") }}
                </div>
                <div class="text-2xl sm:text-3xl  font-bold text-black">
                    {{ $adminCount }}
                </div>
            </div>

            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mb-1 text-sm font-medium text-gray-600">
                    {{ __("Nombre des employés") }}
                </div>
                <div class="text-2xl sm:text-3xl  font-bold text-black">
                    {{ $employeeCount }}
                </div>
            </div>

            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mb-1 text-sm font-medium text-gray-600">
                    {{ __("Total des annonces") }}
                </div>
                <div class="text-2xl sm:text-3xl  font-bold text-black">
                    {{ $carCount }}
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
