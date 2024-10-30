@extends('layouts.app') 

@section('content')
<div class="container">
    <h1>Add Attendee</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('attendees.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" id="name" name="name" required class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('name') }}">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded" value="{{ old('email') }}">
            @error('email')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
    <label for="event_id" class="block text-gray-700">Event:</label>
    <select id="event_id" name="event_id" required class="mt-1 block w-full p-2 border border-gray-300 rounded text-black">
        <option value="">Select an event</option>
        @foreach ($events as $event)
            <option value="{{ $event->id }}">{{ $event->name }}</option>
        @endforeach
    </select>
    @error('event_id')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>


        <button type="submit" class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">Add Attendee</button>
    </form>
</div>
@endsection
