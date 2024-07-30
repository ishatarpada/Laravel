<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-5">
    <x-alert type="danger">
        <x-slot name="title" class="fw-bold">
            Heading Goes Here.....
        </x-slot>
        <p class="mb-0">Whenever you need to, be sure to use
            {{ $component->link('just link') }}
            utilities to keep things nice and tidy.</p>
    </x-alert>

    <x-alert type="info">
        <x-slot name="title">
            Heading Goes Here.....
        </x-slot>
        <p class="mb-0">Whenever you need to, be sure to use
            {{ $component->link('just link', 'https://www.google.co.in/') }}
            utilities to keep things nice and tidy.</p>
    </x-alert>

    <x-alert type="success">
        <x-slot name="title">
            Heading Goes Here.....
        </x-slot>
        <p class="mb-0">Whenever you need to, be sure to use
            {{ $component->link('just link') }}
            utilities to keep things nice and tidy.</p>
        <x-slot name="footer">
            footer Goes Here.....
        </x-slot>
    </x-alert>

    {{-- </x-card> --}}

    @php
        $componentName = 'card';
    @endphp

    <x-dynamic-component :component="$componentName" class="m-4" />

    <x-form action="/somepage" class="form" id="form">
        <div class="m-5"></div>
        <input type="text" name="name">
        <button type="submit" class="btn">Save</button>
    </x-form>
</body>

</html>
