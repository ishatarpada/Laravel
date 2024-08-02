<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="bg-white flex items-center justify-center min-h-screen font-serif">
    <div class="container mx-auto my-5 flex flex-col items-center justify-center">
        <div class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden">
            <div class="part-1 w-full md:w-1/2 p-5 flex flex-col items-center justify-center">

                <p class="font-bold text-6xl my-3 text-purple-700">
                    Hello {{ Auth::user()->name }}
                </p>
                <h1 class="font-bold text-2xl text-purple-700">Welcome To MY Website</h1>

                <div class="my-5 flex justify-center items-center flex-wrap gap-2">
                    <a href="{{ route('logout') }}">
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center fw-bold">Log
                            Out</button>
                    </a>
                    <a href="{{ route('photo') }}">
                        <button
                            class="text-white bg-black hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center fw-bold">Show
                            Photo</button>
                    </a>
                </div>

            </div>
            <div class="part-2 w-full md:w-1/2 flex items-center justify-center p-5">
                <img src="https://booking.webestica.com/assets/images/element/signin.svg" alt="">
            </div>
        </div>
    </div>
</body>

</html>
