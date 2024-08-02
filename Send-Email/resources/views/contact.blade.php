<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-purple-100 py-8 font-serif">
    <div class="max-w-2xl mx-auto my-10 bg-white p-6 rounded-lg shadow-lg card">
        <div class="card-header">
            <h2 class="text-4xl font-bold mb-4 text-center text-purple-800">Contact Us</h2>
            @if (session('success'))
                <div class="bg-green-50 border border-green-900 text-green-900 p-5">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="bg-red-50 border border-red-900 text-red-900 p-5">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-purple-700">Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @error('name')
                        <div class="text-red-900 bg-red-50 border border-red-900 p-5">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-purple-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @error('email')
                        <div class="text-red-900 bg-red-50 border border-red-900 p-5">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Subject Field -->
                <div class="mb-4">
                    <label for="subject" class="block text-purple-700">Subject</label>
                    <input type="text" id="subject" name="subject" required
                        class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @error('subject')
                        <div class="text-red-900 bg-red-50 border border-red-900 p-5">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Message Field -->
                <div class="mb-4">
                    <label for="message" class="block text-purple-700">Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                    @error('message')
                        <div class="text-red-900 bg-red-50 border border-red-900 p-5">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- File Attachment Field -->
                <div class="mb-4">
                    <label for="file" class="block text-purple-700">Attach File</label>
                    <input type="file" id="file" name="file"
                        class="w-full px-3 py-2 mb-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @error('file')
                        <div class="text-red-900 bg-red-50 border border-red-900 p-5">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit"
                        class="px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
