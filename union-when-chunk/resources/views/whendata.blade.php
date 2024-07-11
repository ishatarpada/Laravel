<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="background-color: black">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-transparent">
                    <div class="card-header bg-pink-50">
                        <h2 class="card-title font-bold text-center text-3xl text-pink-700">When data</h2>
                    </div>
                    <div class="card-body">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-pink-100 dark:text-pink-100">
                                <thead class="text-xl text-white uppercase bg-pink-600 dark:text-white">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">ID</th>
                                        <th scope="col" class="px-6 py-3">Name</th>
                                        <th scope="col" class="px-6 py-3">Email</th>
                                        <th scope="col" class="px-6 py-3">Age</th>
                                        <th scope="col" class="px-6 py-3">City</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $data)
                                        <tr class="bg-pink-50 hover:bg-pink-100 border-b border-pink-200">
                                            <td class="px-6 py-4 text-pink-700 font-semibold text-xl ">
                                                {{ $data->id }}</td>
                                            <td class="px-6 py-4 text-pink-700 font-semibold text-xl ">
                                                {{ $data->name }}</td>
                                            <td class="px-6 py-4 text-pink-700 font-semibold text-xl ">
                                                {{ $data->email }}</td>
                                            <td class="px-6 py-4 text-pink-700 font-semibold text-xl ">
                                                {{ $data->age }}</td>
                                            <td class="px-6 py-4 text-pink-700 font-semibold text-xl ">
                                                {{ $data->city}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
