<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function create($id)
    {
        request()->validate([
            'firstname' => 'required| max: 255',
            'lastname' => 'required| max: 255',
            'email' => 'required|email|max: 255',
            'description' => 'max: 255',
            'answer' => 'required',

        ]);
        $request = request();
        $application = new Application();
        $application->fill([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'description' => $request->get('description'),
            'answer' => $request->get('answer'),
        ]);
        $application->session_id = session()->getId();
        $application->event_id = $id;
        $application->save();

        session()->flash('success', 'You application has been created');
        return redirect('/event/' . $id);
    }

    public function list($id)
    {
        $event = Event::findOrFail($id);
        $applications = $event->applications->where('answer', 'yes');
        $declinedApplications = $event->applications->where('answer', 'no')->count();

        return view('applications', [
            'event' => $event,
            'eventId' => $id,
            'applications' => $applications,
            'declinedApplications' => $declinedApplications,

        ]);

    }
}
