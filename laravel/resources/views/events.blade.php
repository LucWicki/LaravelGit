@extends('layout')
@section('content')
    <div>
        <h1>Alle Events</h1>
        <ul>
            @foreach($events as $event)
                <li><a href="/event/{{$event->id}}">{{$event->eventname}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
