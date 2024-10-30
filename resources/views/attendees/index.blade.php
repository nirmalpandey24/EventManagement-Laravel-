<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Attendees List</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Attendees</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendees as $attendee)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $attendee->name }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('attendees.show', $attendee) }}" class="text-blue-500 hover:underline">View</a>
                            <a href="{{ route('attendees.edit', $attendee) }}" class="text-yellow-500 hover:underline">Edit</a>
                            <form action="{{ route('attendees.destroy', $attendee) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
       
        <a href="{{ route('dashboard') }}" class="mt-4 inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Back to Dashboard</a>
        
        <a href="{{ route('attendees.create') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add Attendee</a>
    </div>
</body>
</html>
