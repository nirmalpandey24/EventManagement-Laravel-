
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Event Management System</h1>
        <p class="text-gray-500 mb-6">Manage and organize events efficiently with our system.</p>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-black brounded-lg hover:bg-blue-600 transition">
                Log In
            </a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-green-500 text-black rounded-lg hover:bg-green-600 transition">
                Register
            </a>
        </div>
    </div>
</body>
</html>
