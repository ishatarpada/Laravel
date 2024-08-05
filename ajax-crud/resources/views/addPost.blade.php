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
            <form id="addForm">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                    <input type="text" id="title" name="title"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea id="description" name="description"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 font-semibold mb-2">Image</label>
                    <input type="file" id="image" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Add
                    Post</button>
            </form>
        </div>
    </div>

    <script>
        var addForm = document.querySelector("#addForm");

        addForm.onsubmit = async (event) => {
            event.preventDefault();
            const token = localStorage.getItem('api_token');

            const title = document.querySelector("#title").value;
            const description = document.querySelector("#description").value;
            const image = document.querySelector("#image").files[0];

            var formData = new FormData();
            formData.append('title', title);
            formData.append('description', description);
            formData.append('image', image);

            let response = await fetch("/api/posts", {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    window.location.href = 'http://127.0.0.1:8000/posts';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</body>

</html>
