document.querySelector("#btn").addEventListener('click', function () {
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