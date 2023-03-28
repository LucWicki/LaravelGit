@extends('layout')
@section('content')
    <form action="?" method="POST" class="form">
        @csrf
        <label for="eventname">Name des Events</label><br>
        <input type="text" id="eventname" name="eventname" value="{{old('eventname')}}"><br><br>
        @error('eventname')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror
        <label for="date">Datum</label><br>
        <input type="date" id="date" name="date" value="{{old('date')}}" required><br><br>

        @error('date')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror

        <label for="description">Bemerkungen:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"
                  value="{{old('description')}}"></textarea><br><br>
        @error('description')
        <p style="color: #ef4444">{{$message}}</p>
    @enderror
        <input type="submit" value="Abschicken">
    </form>
@endsection

<!-- eventcontroller bearbeiten-->
