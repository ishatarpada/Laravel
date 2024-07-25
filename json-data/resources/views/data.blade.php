<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Data</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">  <!-- Ensure Tailwind CSS is linked -->
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Test Data</h1>

        <!-- Check if there are any tests -->
        @if($tests->isNotEmpty())
            <div class="bg-white shadow-md rounded-lg p-6">
                <ul class="space-y-4">
                    @foreach($tests as $test)
                        <li class="border-b border-gray-200 pb-4">
                            <h2 class="text-xl font-semibold">{{ $test->title }}</h2>
                            <p class="text-gray-600">{{ $test->description }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        @else
            <p class="text-gray-600">No test data available.</p>
        @endif
    </div>

</body>
</html>
