<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Age</th>
                <th scope="col" class="px-6 py-3">City</th>
                <th scope="col" class="px-6 py-3">City Name</th>
                <th scope="col" class="px-6 py-3">Created At</th>
                <th scope="col" class="px-6 py-3">Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $data)
                <tr class="bg-blue-500 border-b border-blue-400">
                    <td class="px-6 py-4">{{ $data->id }}</td>
                    <td class="px-6 py-4">{{ $data->name }}</td>
                    <td class="px-6 py-4">{{ $data->email }}</td>
                    <td class="px-6 py-4">{{ $data->age }}</td>
                    <td class="px-6 py-4">{{ $data->city }}</td>
                    <td class="px-6 py-4">{{ $data->city_name }}</td>
                    <td class="px-6 py-4">{{ $data->created_at }}</td>
                    <td class="px-6 py-4">{{ $data->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
