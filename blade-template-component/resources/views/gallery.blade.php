<x-layout>

    <x-slot:title>
        All Photos
    </x-slot>


    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($data as $user)
            <div class="grid gap-4">
                <div>
                    <img class="h-72 w-full object-cover rounded-lg" src="{{ asset('/storage/' . $user->file_name) }}"
                        alt="">
                </div>
            </div>
        @endforeach
    </div>

</x-layout>
