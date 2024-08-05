<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Posts</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Post Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/300" alt="Post Image"
                    class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Post Title</h3>
                <p class="text-gray-700 mb-4">Post description goes here. This is a brief description of the post
                    content.</p>
                <button
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Read
                    More</button>
            </div>
            <!-- Repeat above block for each post -->
        </div>
    </div>
</body>

</html>
