<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __("Modifier les horaires d'ouverture") }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Utilisez ce formulaire pour modifier les horaires d'ouverture.") }}
        </p>
    </header>

    <form method="post" action="{{ route('opening.store') }}" class="mt-6 space-y-6">
        @csrf

        <table>
            <thead>
            <tr>
                <th>{{ __('Jour') }}</th>
                <th>{{ __('De') }}</th>
                <th>{{ __('À') }}</th>
            </tr>
            </thead>
            <tbody>
            @php
                $daysOfWeek = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
                $hoursOfDay = [];
                for ($hour = 0; $hour < 24; $hour++) {
                    $hoursOfDay[sprintf('%02d:00', $hour)] = sprintf('%02d:00', $hour);
                }
            @endphp

            @foreach($daysOfWeek as $day)
                <tr>
                    <td>
                        <label>
                            <x-checkbox-input type="checkbox" name="opening_hours[{{ $day }}][enabled]" value="1" />
                            {{ $day }}
                        </label>
                    </td>
                    <td>
                        <x-select name="opening_hours[{{ $day }}][from]" :options="$hoursOfDay" />
                    </td>
                    <td>
                        <x-select name="opening_hours[{{ $day }}][to]" :options="$hoursOfDay" />
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>
        </div>
    </form>
</section>
