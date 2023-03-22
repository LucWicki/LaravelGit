@extends('layout')
@section('content')
    <body>
    <div>
        <h1>Alle Events</h1>
        <ul>
            @foreach($events as $event)
                <li><a href="/event/{{$event->id}}">{{$event->eventname}}</a></li>
            @endforeach
        </ul>
    </div>
    </body>
@endsection
