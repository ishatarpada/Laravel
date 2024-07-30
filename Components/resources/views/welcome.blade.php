<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </script>
</head>

<body>

    @php
        $message = 'this is just testing';
    @endphp

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-lg mx-auto">
            <!-- Success Alert -->
            {{-- <x-alert class="mt-4" type="success" message="{{ $message }}" /> --}}
            <x-alert class="mt-4" type="success" :$message role="flash" />
            <x-alert class="mt-4" dismissible type="danger" message="this is error message" />
            <x-alert class="mt-4" type="info" message="this is info message" />
            <x-alert class="mt-4" type="danger" />
            <x-alert message="this is info message" dismissible />
            <x-alert />
        </div>
    </div>
</body>
