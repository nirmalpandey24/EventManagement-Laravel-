<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Route to get all events
Route::get('/events', [EventController::class, 'apiIndex']);

// Route to get a specific event by ID
Route::get('/events/{id}', [EventController::class, 'apiShow']);
