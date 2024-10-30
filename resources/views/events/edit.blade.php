<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6 text-center">Edit Event</h1>

        <form action="{{ route('events.update', $event->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Event Title:</label>
                <input type="text" name="title" id="title" value="{{ $event->title }}" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" class="border border-gray-300 rounded-lg w-full p-2" required>{{ $event->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700">Event Date:</label>
                <input type="datetime-local" name="date" id="date" value="{{ $event->date->format('Y-m-d\TH:i') }}" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700">Location:</label>
                <input type="text" name="location" id="location" value="{{ $event->location }}" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-gray-700">Category:</label>
                <select name="category_id" id="category_id" class="border border-gray-300 rounded-lg w-full p-2" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $event->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Update Event
            </button>
        </form>

        <a href="{{ route('events.index') }}" class="inline-block mt-4 text-blue-500 hover:underline">
            &larr; Back to Events
        </a>
    </div>
</body>
</html>
