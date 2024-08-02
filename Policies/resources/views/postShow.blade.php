<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-serif">
    <div class="container-fluid mx-auto py-6">

        <x-navbar></x-navbar>

        <!-- Display the specific post -->
        <div class="flex justify-center items-center flex-wrap mb-6 container mx-auto">
            <div class=" bg-white border border-gray-200 rounded-lg shadow m-5 flex justify-center items-center">
                <img class="rounded-t-lg object-cover h-96 w-96" src="{{ asset('storage/' . $post->image) }}"
                    alt="Post Image" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        {{ $post->title }}
                    </h5>
                    <p class="mb-3 font-normal text-gray-700">{{ $post->description }}</p>
                    <div class="flex items-center justify-center gap-3">
                        @can('update', $post)
                            <a href="{{ route('editPost', ['id' => $post->id]) }}">
                                <button type="button"
                                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center">Update</button>
                            </a>
                            <form action="{{ route('postDelete', $post->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center">Delete</button>
                            </form>
                        @else
                            <button type="button"
                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center">your
                                are not authorized </button>
                        @endcan
                    </div>
                </div>
            </div>

        </div>

        <!-- Display all posts by the authenticated user -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-bold mb-4 text-center">Your Posts</h2>
            <div class="flex justify-center items-center flex-wrap gap-4">
                @foreach ($userPosts as $userPost)
                    <a href="{{ route('postShow', ['id' => $userPost->id]) }}"
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow mb-4">
                        <img class="rounded-t-lg object-cover h-36 w-full"
                            src="{{ asset('storage/' . $userPost->image) }}" alt="Post Image" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ $userPost->title }}
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">
                                {{ $userPost->description }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <x-footer></x-footer>
    </div>
</body>

</html>
