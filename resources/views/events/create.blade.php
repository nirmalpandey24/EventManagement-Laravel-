<!-- resources/views/events/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <a href="{{ route('events.index') }}" class="inline-block mb-4 text-blue-500 hover:underline">
            &larr; Back to Events
        </a>

        <h1 class="text-4xl font-bold mb-6 text-center">Create New Event</h1>

        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-red-500">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('events.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" name="title" id="title" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" class="border border-gray-300 rounded-lg w-full p-2" required></textarea>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" name="date" id="date" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700">Location:</label>
                <input type="text" name="location" id="location" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-gray-700">Category:</label>
                <select name="category_id" id="category_id" class="border border-gray-300 rounded-lg w-full p-2" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create Event
            </button>
        </form>
    </div>
</body>
</html>
