<!DOCTYPE html>
<html>

<head>
    <title>List of Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
</head>

<body class="bg-black text-white">

    <div class="container p-5">
        <div class="row my-5">
            <h1 class=" text-center fw-bold text-5xl font-serif mb-3 text-uppercase">Eloquent CRUD</h1>
            <hr>
        </div>

        <div class="row">
            <div class="col-12">
                <h4 class="text-3xl font-bold text-pink-100 text-center font-serif mb-3">@yield('title')</h4>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-12">
                @if (session('status'))
                    <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('status') }}</span>
                    </div>
                @endif
            </div>
        </div>
        


        <div class="row">
            <div class="col-12">
                <h4>@yield('content')</h4>
            </div>
        </div>

    </div>

</body>

</html>
