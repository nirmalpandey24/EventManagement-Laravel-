<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\AttendeeController; 

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
    Route::resource('categories', CategoryController::class);
    Route::resource('events', EventController::class);
    Route::resource('attendees', AttendeeController::class); 
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
});
