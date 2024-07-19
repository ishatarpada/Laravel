@extends('layout')

@section('title')
    Update User Data
@endsection

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">User Information Form</h2>
        <form action={{route('users.update' , $users->id)}} method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" value="{{$users->name}}" id="name" name="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="city" class="block text-gray-700 font-bold mb-2">City</label>
                <input type="text" value="{{$users->city}}" id="city" name="city"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your city">
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700 font-bold mb-2">Age</label>
                <input type="text" value="{{$users->age}}" id="age" name="age"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your age">
            </div>
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" value="{{$users->email}}" id="email" name="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your email">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </div>
        </form>
    @endsection
