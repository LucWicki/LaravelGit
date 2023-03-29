<?php

namespace App\Http\Controllers;

use App\Models\Event;


class EventController extends Controller
{
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event', [
            'event' => $event
        ]);
    }

    public function list()
    {
        $events = Event::all();
        return view('events', [
            'events' => $events
        ]);
    }

    public function createevent()
    {
        request()->validate([
            'eventname' => 'required| max: 255',
            'date' => 'required',
            'description' => 'required|max: 255',
        ]);
        $request = request();
        $event = new Event();
        $event->fill([
            'eventname' => $request->get('eventname'),
            'date' => $request->get('date'),
            'description' => $request->get('description'),
        ]);
        $event->save();

        session()->flash('success', 'Your event has been created');
        return redirect('/eventcreator');
    }

    public function showeventform()
    {
        return view('eventcreator');
    }
}
