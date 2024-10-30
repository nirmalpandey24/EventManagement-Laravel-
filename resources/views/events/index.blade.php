<!-- resources/views/events/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <!-- Back to Dashboard Link -->
        <a href="{{ route('dashboard') }}" class="inline-block mb-4 text-blue-500 hover:underline">
            &larr; Back to Dashboard
        </a>

        <h1 class="text-4xl font-bold mb-6 text-center">Upcoming Events</h1>

        <!-- Create Event Button -->
        <div class="mb-4 text-center">
            <a href="{{ route('events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create New Event
            </a>
        </div>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Date</th>
                    <th class="border px-4 py-2">Location</th>
                    <th class="border px-4 py-2">Category</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="border px-4 py-2">{{ $event->title }}</td>
                        <td class="border px-4 py-2">{{ $event->description }}</td>
                        <td class="border px-4 py-2">{{ $event->date ? $event->date->format('Y-m-d') : 'N/A' }}</td>
                        <td class="border px-4 py-2">{{ $event->location }}</td>
                        <td class="border px-4 py-2">{{ $event->category->name }}</td>
                        <td class="border px-4 py-2">
                            <!-- Edit and Delete buttons -->
                            <a href="{{ route('events.edit', $event->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
