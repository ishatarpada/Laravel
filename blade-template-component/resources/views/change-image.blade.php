<x-layout>

    <x-slot:title>
        Update/Delete Photos
    </x-slot>


    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($users as $user)
            <div class="grid gap-4">
                <div>
                    <img class="h-48 w-full object-cover rounded-lg" src="{{ asset('/storage/' . $user->file_name) }}"
                        alt="">
                    <div class="shadow my-2 flex justify-evenly">
                        <x-form action="{{ route('user.destroy', $user->id) }}" method="DELETE">
                            <button type="submit" name="delete"
                                class="text-white font-serif bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                Delete
                            </button>
                        </x-form>


                        <a href="{{ route('user.edit', $user->id) }}">
                            <button type="submit" name="delete"
                                class="text-white font-serif bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300  shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update</button>
                        </a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</x-layout>
