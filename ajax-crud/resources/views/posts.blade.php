<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Posts</h2>
            <button id="btn"
                class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                Logout
            </button>
        </div>
        <div id="posts-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Posts will be injected here by JavaScript -->
        </div>
    </div>

    <!-- View Modal -->
    <div id="posts-modal" class="modal fade" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content">
                <!-- Modal content will be injected here by JavaScript -->
            </div>
        </div>
    </div>

    <!-- Update Post Modal -->
    <div id="update-post-modal" class="modal fade" tabindex="-1" aria-labelledby="update-modal-title"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header">
                    <h5 id="update-modal-title" class="modal-title">Update Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form id="update-post-form">
                        <input type="hidden" id="post-id" name="post-id">
                        <div class="mb-3">
                            <label for="post-title" class="form-label">Title</label>
                            <input type="text" id="post-title" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="post-description" class="form-label">Description</label>
                            <textarea id="post-description" name="description" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="post-image" class="form-label">Image URL</label>
                            <img src="" alt="" id="showImage" class="h-48 w-72 my-3 mx-auto rounded">
                            <input type="file" id="post-image" name="image" class="form-control">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector("#btn").addEventListener('click', function() {
            const token = localStorage.getItem('api_token');

            fetch("/api/logout", {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    window.location.href = 'http://127.0.0.1:8000/';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        function loadData() {
            const token = localStorage.getItem('api_token');

            fetch("/api/posts", {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const postsContainer = document.getElementById('posts-container');
                    postsContainer.innerHTML = ''; // Clear existing content

                    data.data.posts.forEach(post => {
                        const postCard = `
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <img src="/uploads/${post.image}" alt="Post Image" class="w-full h-48 object-cover rounded-md mb-4">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">${post.title}</h3>
                            <p class="text-gray-700 mb-4">${post.description}</p>
                            <div class="d-flex justify-between items-center gap-2">
                                <button 
                                    class="btn btn-primary w-100 mb-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#posts-modal"
                                    data-bs-postid="${post.id}"
                                    data-bs-title="${post.title}"
                                    data-bs-description="${post.description}"
                                    data-bs-image="/uploads/${post.image}"
                                >View</button>
                                <button 
                                    class="btn btn-success w-100 mb-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#update-post-modal"
                                    data-bs-postid="${post.id}"
                                    data-bs-title="${post.title}"
                                    data-bs-description="${post.description}"
                                    data-bs-image="/uploads/${post.image}"
                                >Update</button>
                                <button 
                                    class="btn btn-danger w-100 mb-2"
                                    onclick="deletePost('${post.id}')"
                                >Delete</button>
                            </div>
                        </div>
                    `;
                        postsContainer.innerHTML += postCard;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        document.querySelector("#posts-modal").addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-bs-postid');
            const token = localStorage.getItem('api_token');

            fetch(`/api/posts/${id}`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.data && data.data.post.length > 0) {
                        const post = data.data.post[0];
                        const modalContent = document.querySelector('#posts-modal #modal-content');
                        modalContent.innerHTML = `
                    <div class="modal-header">
                        <h5 id="modal-title" class="modal-title">${post.title}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="modal-image" src="http://127.0.0.1:8000/uploads/${post.image}" alt="Post Image" class="w-100 mb-4">
                        <p id="modal-description">${post.description}</p>
                    </div>
                `;
                    } else {
                        console.error('No post data available');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        document.querySelector("#update-post-modal").addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;

            const id = button.getAttribute('data-bs-postid');
            console.log(id);

            const token = localStorage.getItem('api_token');

            fetch(`/api/posts/${id}`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const post = data.data.post[0];

                    document.querySelector("#post-id").value = post.id;
                    document.querySelector("#post-title").value = post.title;
                    document.querySelector("#post-description").value = post.description;
                    document.querySelector("#showImage").src = `uploads/${post.image}`;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        const update_form = document.querySelector("#update-post-form");
        update_form.onsubmit = async (event) => {
            event.preventDefault();
            const token = localStorage.getItem('api_token');

            const id = document.querySelector("#post-id").value;
            const title = document.querySelector("#post-title").value;
            const description = document.querySelector("#post-description").value;

            var formData = new FormData();
            formData.append('title', title);
            formData.append('description', description);

            if (document.querySelector("#post-image").files.length > 0) {
                const image = document.querySelector("#post-image").files[0];
                formData.append('image', image);
            }

            let response = await fetch(`/api/posts/${id}`, {
                method: 'POST',
                body: formData,
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'X-HTTP-Method-Override': 'PUT'
                }
            });

            let data = await response.json();
            if (response.ok) {
                console.log(data);
                loadData(); // Reload data to reflect changes
                var modal = bootstrap.Modal.getInstance(document.getElementById('update-post-modal'));
                modal.hide();
            } else {
                console.error('Error:', data.message);
            }
        }


        function deletePost(postId) {
            const token = localStorage.getItem('api_token');

            fetch(`/api/posts/${postId}`, {
                    method: 'DELETE',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    loadData(); // Reload the data to reflect changes
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Load data on page load
        loadData();
    </script>

</body>

</html>
