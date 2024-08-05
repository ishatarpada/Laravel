<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Add Post</h2>
            <form action="/posts" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                    <input type="text" id="title" name="title"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea id="description" name="description"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required></textarea>
                </div>
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 font-semibold mb-2">Image</label>
                    <input type="file" id="image" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Add
                    Post</button>
            </form>
        </div>
    </div>
</body>

</html>
