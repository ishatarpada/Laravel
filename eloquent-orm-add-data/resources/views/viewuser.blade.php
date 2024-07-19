@extends('layout')

@section('title')
    User Details
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="text-gray-900 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-700 dark:border-gray-600 dark:text-white mx-auto">
            <div class="p-4">
                <h1 class="text-2xl font-bold mb-4">User Details</h1>
                <ul class="divide-y divide-gray-200 dark:divide-gray-600">
                    <li class="py-2">
                        <div class="flex justify-between">
                            <span class="font-bold text-gray-700">Name:</span>
                            <span class="text-gray-800">{{ $users->name }}</span>
                        </div>
                    </li>
                    <li class="py-2">
                        <div class="flex justify-between">
                            <span class="font-bold text-gray-700">Email:</span>
                            <span class="text-gray-800">{{ $users->email }}</span>
                        </div>
                    </li>
                    <li class="py-2">
                        <div class="flex justify-between">
                            <span class="font-bold text-gray-700">Age:</span>
                            <span class="text-gray-800">{{ $users->age }}</span>
                        </div>
                    </li>
                    <li class="py-2">
                        <div class="flex justify-between">
                            <span class="font-bold text-gray-700">City:</span>
                            <span class="text-gray-800">{{ $users->city }}</span>
                        </div>
                    </li>
                </ul>
                <div class="mt-4">
                    <a href="{{ route('users.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded inline-block">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
