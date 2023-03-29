@extends('layout')
@section('content')
    <form action="?" method="POST" class="form">
        @csrf
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" placeholder="Name" value="{{old('name')}}"><br><br>
        @error('name')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror
        <label for="email">E-Mail</label><br>
        <input type="email" id="email" name="email" placeholder="E-Mail" value="{{old('email')}}" required><br><br>
        @error('email')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror
        <label for="password">Passwort</label><br>
        <input type="password" id="password" name="password" required><br><br>
        @error('password')
        <p style="color: #ef4444">{{$message}}</p>
        @enderror
        <input type="submit" value="Abschicken">
    </form>
@endsection
