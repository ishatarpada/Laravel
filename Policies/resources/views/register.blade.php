<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>sign-up</title>
</head>

<body class="bg-white flex items-center justify-center min-h-screen font-serif">
    <div class="container mx-auto my-5 flex flex-col items-center justify-center">
        <div class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden">
            <div class="part-1 w-full md:w-1/2 p-5 flex flex-col items-center justify-center">
                <div class="flex justify-start items-start">
                    <img src="https://booking.webestica.com/assets/images/logo-icon.svg" alt=""
                        class="h-8 w-8 mb-4">
                </div>
                <h1 class="text-4xl font-bold font-serif mt-5 w-96">
                    Create New Account
                </h1>
                <p class="text-gray-500 text-start mb-5">Already a member ? <a href="login.blade.php"
                        class="text-purple-500">Log in</a>
                </p>



                <form class="max-w-sm mx-auto my-5" action="{{ route('registerSave') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter
                            Your
                            Name</label>
                        <input type="name" name="name"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5 "
                            placeholder="name@flowbite.com" />
                    </div>
                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">Enter
                            Your
                            email</label>
                        <input type="email" name="email"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5 "
                            placeholder="name@flowbite.com" />
                    </div>
                    <div class="mb-5">
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">Enter Your
                            Age</label>
                        <input type="number" name="age"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5"
                            placeholder="25" />
                    </div>
                    <div class="mb-5">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">Enter
                            Your
                            password</label>
                        <input type="password" name="password"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5 " />
                    </div>
                    <div class="mb-5">
                        <label for="repeat-password"
                            class="block mb-2 text-sm font-medium text-purple-900 dark:text-white">Repeat
                            password</label>
                        <input type="password" name="password_confirmation"
                            class="shadow-sm bg-gray-50 border border-purple-300 text-purple-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-96 p-2.5 " />
                    </div>
                    <div class="flex items-start mb-5 gap-2">
                        <div class="flex items-center h-5">
                            <input id="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-purple-300 rounded bg-gray-50 focus:ring-3 focus:ring-purple-300 me-5" />
                        </div>
                        <label for="terms" class="ps-5 ms-2 text-sm font-bold text-purple-900 dark:text-purple-300">I
                            agree
                            with the <a href="#"
                                class="text-purple-600 hover:underline dark:text-purple-500">terms
                                and conditions</a></label>
                    </div>
                    <button type="submit"
                        class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center fw-bold">Register
                        new account</button>
                </form>

            </div>
            <div class="part-2 w-full md:w-1/2 flex items-center justify-center p-5">
                <img src="https://booking.webestica.com/assets/images/element/signin.svg" alt="">
            </div>
        </div>
    </div>
</body>

</html>
