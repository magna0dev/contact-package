<x-mail::message>
    # Contact__LaravelPlugin - TEST MESSAGE

    from: {{$name}} | {{$email}}

    message:
    {{$message}}

    <x-mail::button :url="''">
        OK (button text)
    </x-mail::button>

    Thanks,{{ config('app.name') }}
</x-mail::message>
