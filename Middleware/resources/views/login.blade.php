<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body class="bg-white flex items-center justify-center min-h-screen font-serif">
    <div class="container mx-auto my-5 flex flex-col items-center justify-center">
        <div class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden">
            <div class="part-1 w-full md:w-1/2 p-5 flex flex-col items-center justify-center">
                <div class="flex justify-start items-start">
                    <img src="https://booking.webestica.com/assets/images/logo-icon.svg" alt=""
                        class="h-8 w-8 mb-4">
                </div>
                <h1 class="text-4xl font-bold font-serif mt-5">
                    Welcome back
                </h1>
                <p class="text-gray-500 text-start mb-5">
                    New here? <a href="{{ route('register') }}" class="text-purple-500">Create an account</a>
                </p>




                <form class="max-w-sm mx-auto my-5" action="{{ route('loginDetail') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter
                            Your
                            Name</label>
                        <input type="name" name="name"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5 "
                            placeholder="name@flowbite.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">Enter
                            Your
                            email</label>
                        <input type="email" name="email"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5 "
                            placeholder="name@flowbite.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">Enter
                            Your
                            password</label>
                        <input type="password" name="password"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5 "
                            required />
                    </div>


                    <button type="submit"
                        class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center fw-bold">Login</button>
                </form>

            </div>
            <div class="part-2 w-full md:w-1/2 flex items-center justify-center p-5">
                <img src="https://booking.webestica.com/assets/images/element/signin.svg" alt="">
            </div>
        </div>
    </div>
</body>

</html>
