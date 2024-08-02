<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="min-h-screen h-screen flex justify-center items-center w-screen font-serif">

    <div class="class">
        <h1 class="m-5 p-3 border-indigo-950 bg-indigo-50 text-indigo-800 text-center font-bold text-3xl">
            {{ $value }}
        </h1>

        @if (session('status'))
            <div class="m-5 p-3 border-green-800 bg-green-50 text-green-800 text-center font-bold text-xl">
                {{ session('status') }}
            </div>
            @endsession
    </div>

</body>

</html>
