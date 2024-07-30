<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black font-serif">
    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg mt-8">
        <div class="flex justify-end mb-4">
            <a href="{{ route('users.create') }}"
                class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                Add New Employee
            </a>
        </div>

        <div>
            @if (session('success'))
                <div
                    class="p-4 mb-4 text-center text-green-800 bg-green-50 border border-green-800 rounded-lg font-bold">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <h1 class="text-2xl font-bold mb-4">Employee Table</h1>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Salary</th>
                        <th class="py-2 px-4 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->date }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->salary }}</td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex space-x-2">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="bg-yellow-500 text-black px-3 py-1 rounded-md hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
