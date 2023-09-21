<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Horaires d'ouverture") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-4 px-4 py-3 text-teal-900 rounded bg-teal-300">
                    {!! session('status') !!}
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('partials.opening-form')
            </div>
        </div>
    </div>
    </x-app-layout>
