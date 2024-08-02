<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <x-navbar></x-navbar>

    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center items-center gap-">
            @foreach ($posts as $post)
                <div class="container mx-auto p-6">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
                        <p class="text-gray-700 mb-3">{{ $post->description }}</p>
                        <hr>
                        <div class="flex items-center justify-end gap-3 m-2">
                            <a href="{{ route('updatePost', ['id' => $post->id]) }}">
                                <button type="submit"
                                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center fw-bold">Update</button>
                            </a>
                            <form action="{{ route('postDelete', $post->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center fw-bold">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <x-footer></x-footer>

</body>

</html>
