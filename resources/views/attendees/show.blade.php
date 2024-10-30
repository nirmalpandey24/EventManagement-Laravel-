<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Attendee Details</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Attendee Details</h1>
        <p class="text-lg">Name: <span class="font-semibold">{{ $attendee->name }}</span></p>
        <a href="{{ route('attendees.index') }}" class="mt-4 inline-block text-blue-500 hover:underline">Back to Attendees</a>
    </div>
</body>
</html>
