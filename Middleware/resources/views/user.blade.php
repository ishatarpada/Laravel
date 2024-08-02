<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image with Buttons</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="class">
        <div class="my-5">
            <h1 class="text-center font-bold text-6xl m-5">Hello User</h1>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Sample Image"
                class="w-full h-auto">
        </div>
        <div class="flex justify-end items-center">
            <a href="{{ route('logout') }}">
                <button
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center fw-bold">Log
                    Out</button>
            </a>
        </div>
    </div>
</body>

</html>
