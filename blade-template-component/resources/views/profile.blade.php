<x-layout>
    <x-slot:title>
        Add Photos
    </x-slot>

    <div>
        @if (session('status'))
            <div
                class="p-4 mb-4 text-sm text-center font-serif text-green-800 bg-green-50 border border-green-300 rounded-lg">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <x-form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                <div class="bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                <div
                                    class="flex
                                flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" name="photo"
                                    accept="image/*" />
                            </label>
                        </div>

                        @error('photo')
                            <div class="text-red-500 text-xs italic mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 flex justify-center">
                        <input type="submit" value="Submit"
                            class="btn w-48 px-5 py-2 my-2 rounded bg-purple-500 text-white hover:bg-purple-600">
                    </div>
                </div>
            </x-form>
        </div>
    </div>
</x-layout>
