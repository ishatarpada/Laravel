<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Login</h2>
        <form id="loginForm" action="#">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-gray-900">Remember me</label>
                </div>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">Forgot password?</a>
            </div>
            <button type="submit" id="btn"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Login</button>
        </form>
        <p id="error" class="mt-4 text-red-600"></p>
        <p class="mt-6 text-gray-600 text-center">Don't have an account? <a href="#"
                class="text-blue-600 hover:text-blue-800">Sign up</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#btn").on('click', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                const email = $("#email").val();
                const password = $("#password").val();
                const error = $("#error");

                $.ajax({
                    url: '/API/login',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        email: email,
                        password: password,
                    }),
                    success: function(response) {
                        console.log(response);

                        localStorage.setItem('api_token', response.token);
                        window.location.href = "/posts";
                    },
                    error: function(xhr, status, errorThrown) {
                        error.text('Error: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>
