@extends('layout')
@section('content')
    <div>
        <h1>Mein super Event!</h1>
        <p>Melde dich hier für den besten Event aller Zeiten an!
            <br/>
            Datum: 1. März um 16:53 Uhr
        </p>
        <p>
            <a href="/event/{{$event-> id}}/applications">Anmeldungen ansehen</a>
            <br/>
            <a href="/event/{{$event-> id}}/">Zurück</a>
        </p>

        <h1> Anmeldung</h1>
        <ul>
            @foreach($applications as $application)
                <li>{{ $application->firstname }} {{ $application->lastname }}</li>

            @endforeach
        </ul>
        <div>
            <small>({{ $declinedApplications }}) Abmeldungen</small>
        </div>

    </div>
@endsection
