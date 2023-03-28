@extends('layout')
@section('content')
    <div>
        <h1>{{$event-> eventname}}</h1>

        <p>
            {{$event->description}} <br/>
            <br/>
            Datum: {{$event-> date}}
        </p>
    </div>

    <p><a href="/event/{{$event-> id}}/applications">Anmeldungen Ansehen</a>
        <br/>
        <a href="/">Zurück</a>
    </p>


    <form action="?" method="POST" class="form">
        @csrf

        <div>
            <p>Sind Sie dabei?:</p><br>
            <input type="radio" id="yes" name="answer" value="yes">
            <label for="yes">Ja,ich bin dabei</label>
            <input type="radio" id="no" name="answer" value="no">
            <label for="no">Nein, ich möchte nicht</label><br>
        </div>
        <br><br>

        <label for="email">E-Mail:</label><br>
        <input type="email" id="email" name="email" value="{{old('email')}}"><br><br>
        @error('email')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror
        <label for="firstname">Vorname:</label><br>
        <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}" required><br><br>
        @error('firstname')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror
        <label for="lastname">Nachname:</label><br>
        <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}" required><br><br>
        @error('lastname')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror
        <label for="description">Bemerkungen:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"
                  value="{{old('description')}}"></textarea><br><br>
        <input type="submit" value="Abschicken">
    </form>
    @if (session()->has('success'))
        <div>
            <p>{{session()->get('success')}}</p>
        </div>
    @endif
@endsection
