<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste des utilisateurs') }}
            </h2>

            <a class="px-3 py-2 font-medium rounded-sm text-white bg-teal-600" href="{{ route('users.create') }}">{{ __('Ajouter un utilisateur') }}</a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                            <th class="p-2 text-left" >{{ __('Nom') }}</th>
                            <th class="p-2 text-left">{{ __('Email') }}</th>
                            <th class="p-2 text-left">{{ __('Role') }}</th>
                            <th class="p-2 text-left">{{ __('Actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="px-2 py-3 text-gray-600 border-b">{{ $user->name }}</td>
                            <td class="px-2 py-3 text-gray-600 border-b">{{ $user->email }}</td>
                            <td class="px-2 py-3 text-gray-600 border-b">{{ __("$user->role") }}</td>
                            <td class="px-2 py-3 text-gray-600 border-b">
                                <a href="{{ route('users.edit', $user) }}">{{ __('Modifier') }} </a> </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="p-2">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
