<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function index()
    {
        $attendees = Attendee::with('event')->get(); // Load associated event data
        return view('attendees.index', compact('attendees'));
    }

    public function create()
    {
        $events = Event::all();
        return view('attendees.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'event_id' => 'required|exists:events,id',
        ]);

        Attendee::create($request->only(['name', 'email', 'event_id']));

        return redirect()->route('attendees.index')->with('success', 'Attendee added successfully.');
    }

    public function show(Attendee $attendee)
    {
        $attendee->load('event'); // Load associated event data
        return view('attendees.show', compact('attendee'));
    }

    public function edit(Attendee $attendee)
    {
        $events = Event::all();
        return view('attendees.edit', compact('attendee', 'events'));
    }

    public function update(Request $request, Attendee $attendee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'event_id' => 'required|exists:events,id',
        ]);

        $attendee->update($request->only(['name', 'email', 'event_id']));

        return redirect()->route('attendees.index')->with('success', 'Attendee updated successfully.');
    }

    public function destroy(Attendee $attendee)
    {
        $attendee->delete();
        return redirect()->route('attendees.index')->with('success', 'Attendee deleted successfully.');
    }
}
