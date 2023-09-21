<x-guest-layout>
    <div class="mx-auto mb-10 max-w-4xl">
        <h1 class="text-4xl sm:text-5xl font-semibold">Horaires d'ouverture</h1>
    </div>

    <div class="mx-auto max-w-4xl prose prose-lg">
        <p>Chez {{ config('app.name') }}, nous comprenons l'importance de la commodité pour nos clients. Voici nos horaires d'ouverture réguliers pour que vous puissiez planifier votre visite en conséquence.</p>

        <h2>Heures d'ouverture</h2>

        {!! nl2br($openingHour?->text) !!}

        <p>Veuillez noter que nous sommes fermés le dimanche, mais nous sommes disponibles du lundi au samedi pour répondre à tous vos besoins en matière de réparation et d'entretien automobile.</p>

        <h2>Prise de Rendez-Vous</h2>
        <p>Si vous souhaitez planifier un rendez-vous avec notre équipe, vous pouvez nous appeler pendant nos heures d'ouverture régulières au <span class="text-primary">04 78 67 54 39 </span>. Nous ferons de notre mieux pour vous accueillir à un moment qui vous convient.</p>

        <p>Chez {{ config('app.name') }}, nous nous engageons à vous fournir des services de qualité supérieure et à rendre votre expérience avec nous aussi pratique que possible. Si vous avez des questions ou des préoccupations concernant nos horaires d'ouverture ou nos services, n'hésitez pas à <a href="{{ route('contact') }}" class="text-primary">nous contacter</a></p>

        <p>Nous vous remercions de votre confiance en {{ config('app.name') }} pour tous vos besoins en matière de réparation et d'entretien automobile.</p>
    </div>
</x-guest-layout>
