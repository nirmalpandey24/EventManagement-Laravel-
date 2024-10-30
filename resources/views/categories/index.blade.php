@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-6 text-gray-900">Categories</h1>
    <a href="{{ route('categories.create') }}" class="bg-blue-600 text-gray-100 px-4 py-2 rounded shadow hover:bg-blue-700 mb-4 inline-block">Add New Category</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-800 border border-gray-700 rounded-lg shadow-lg">
            <thead class="bg-gray-700">
                <tr>
                    <th class="py-2 px-4 border-b text-left text-gray-300">ID</th>
                    <th class="py-2 px-4 border-b text-left text-gray-300">Name</th>
                    <th class="py-2 px-4 border-b text-left text-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr class="hover:bg-gray-600">
                    <td class="py-2 px-4 border-b text-gray-200">{{ $category->id }}</td>
                    <td class="py-2 px-4 border-b text-gray-200">{{ $category->name }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-gray-100 px-3 py-1 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
