

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">

    <div class="text-center py-8">
        <h1 class="text-3xl font-bold text-gray-800">Welcome to Your Dashboard</h1>
        <p class="text-gray-500 mt-2">You are logged in as {{ auth()->user()->name }}!</p>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        
        <a href="{{ route('categories.index') }}" class="block p-6 bg-white rounded-lg shadow-lg transition duration-200 hover:shadow-xl hover:bg-indigo-50">
            <h2 class="text-xl font-semibold text-indigo-600">Manage Categories</h2>
            <p class="text-gray-500 mt-2">Create, view, edit, or delete categories for events.</p>
        </a>

        
        <a href="{{ route('events.index') }}" class="block p-6 bg-white rounded-lg shadow-lg transition duration-200 hover:shadow-xl hover:bg-green-50">
            <h2 class="text-xl font-semibold text-green-600">Manage Events</h2>
            <p class="text-gray-500 mt-2">Create, view, edit, or delete events to keep your users updated.</p>
        </a>

        
        <a href="{{ route('attendees.index') }}" class="block p-6 bg-white rounded-lg shadow-lg transition duration-200 hover:shadow-xl hover:bg-yellow-50">
            <h2 class="text-xl font-semibold text-yellow-600">Manage Attendees</h2>
            <p class="text-gray-500 mt-2">View and manage attendees registered for events.</p>
        </a>
    </div>

    
    <div class="text-center mt-10">
        <a href="{{ route('logout') }}" class="inline-block px-6 py-2 text-sm font-medium text-white bg-red-500 rounded hover:bg-red-600"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</div>
@endsection
