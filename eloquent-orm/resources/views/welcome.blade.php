<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-black font-serif text-center">
    <div class="container mx-auto mt-10">
        <div class="overflow-x-auto">
            <div class="card bg-transparent">
                <div class="card-header">
                    <h1 class="text-center font-bold text-3xl mb-5 text-yellow-600 font-serif">Data</h1>
                </div>
                <div class="card-body">
                    <table class="min-w-full table table-striped bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-yellow-500">
                                <th class="py-4 text-2xl px-4 border-b">ID</th>
                                <th class="py-4 text-2xl px-4 border-b">Name</th>
                                <th class="py-4 text-2xl px-4 border-b">Email</th>
                                <th class="py-4 text-2xl px-4 border-b">Age</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="py-4 text-xl px-4 border-b">{{$user->id}}</td>
                                <td class="py-4 text-xl px-4 border-b">{{$user->name}}</td>
                                <td class="py-4 text-xl px-4 border-b">{{$user->email}}</td>
                                <td class="py-4 text-xl px-4 border-b">{{$user->age}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</body>

</html>
