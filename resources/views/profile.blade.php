@extends('layouts.home')

@section('containerTitle')
    <b>Profile - {{ Auth::user()->name }}</b>
@endsection

@section('contentContainer')
    <form>
        <label for="username">Username:</label><input type="text" id="username" value={{ Auth::user()->name }} disabled><br>
        <label for="email">Email:</label><input type="email" id="email" value={{ Auth::user()->email }} disabled><br>
        <label for="website">Website:</label><input type="url" disabled id="website" value={{ Auth::user()->website }} ><br>
        <label for="aboutmyself">About myself:</label><textarea id="aboutmyself" disabled>{{ Auth::user()->aboutmyself }}</textarea><br>
        <button>Edit</button>
    </form>
@endsection