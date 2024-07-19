@extends('layout')

@section('title')
    All Users Data
@endsection

@section('content')
    <div class="mx-auto">
        <div class="flex justify-end items-center">
            <a href="{{ route('users.create') }}" class="bg-green-500 text-white py-2 px-4 rounded mb-5 inline-block">Add new
                User</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-black font-serif uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Age</th>
                        <th class="py-3 px-6 text-left">City</th>
                        <th class="py-3 px-6 text-left">View</th>
                        <th class="py-3 px-6 text-left">Delete</th>
                        <th class="py-3 px-6 text-left">Update</th>
                    </tr>
                </thead>
                <tbody class="text-black font-serif text-sm font-light">
                    @foreach ($users as $user)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left font-bold">{{ $user->id }}</td>
                            <td class="py-3 px-6 text-left font-bold">{{ $user->name }}</td>
                            <td class="py-3 px-6 text-left font-bold">{{ $user->email }}</td>
                            <td class="py-3 px-6 text-left font-bold">{{ $user->age }}</td>
                            <td class="py-3 px-6 text-left font-bold">{{ $user->city }}</td>
                            <td class="py-3 px-6 text-left font-bold">
                                <a href="{{ route('users.show', $user->id) }}"
                                    class="bg-blue-500 text-white py-2 px-3 rounded text-xs">View</a>
                            </td>
                            <td class="py-3 px-6 text-left font-bold">
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white py-2 px-3 rounded text-xs">Delete</button>
                                </form>
                            </td>
                            <td class="py-3 px-6 text-left font-bold">
                                <a href="{{ route('users.edit', $user->id) }}"
                                    class="bg-yellow-500 text-white py-2 px-3 rounded text-xs">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-5">
            {{$users->links()}}
        </div>
    </div>
@endsection
