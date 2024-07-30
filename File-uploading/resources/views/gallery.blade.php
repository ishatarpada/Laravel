<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black">
    <div class="container mx-auto my-5 p-5">

        <p class="font-serif font-bold text-4xl text-white text-center">Photo Gallery</p>

        <div class="flex justify-end my-3 gap-2">
            <a href="{{ route('user.index') }}"
                class="inline-block px-6 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue font-serif">
                Add new Photo
            </a>
            <a href="{{ route('changeImage') }}"
                class="inline-block px-6 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-lg active:bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow font-serif">
                Change Photo
            </a>
        </div>


        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($data as $user)
                <div class="grid gap-4">
                    <div>
                        <img class="h-48 w-full object-cover rounded-lg"
                            src="{{ asset('/storage/' . $user->file_name) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</body>

</html>
