@extends('layouts.home')

@section('containerTitle')
    <b>Profile - {{ Auth::user()->name }}</b>
@endsection

@section('contentContainer')
    <form class="ui form">
        <div class="field"><label for="username">Username</label><input type="text" id="username" value={{ Auth::user()->name }} disabled></div>
        <div class="field"><label for="email">Email</label><input type="email" id="email" value={{ Auth::user()->email }} disabled></div>
        <div class="field"><label for="website">Website</label><input type="url" disabled id="website" value={{ Auth::user()->website }} ></div>
        <div class="field"><label for="aboutmyself">About myself</label><textarea id="aboutmyself" disabled>{{ Auth::user()->aboutmyself }}</textarea></div>
        <div class=" ui button"><button>Edit</button>
    </form>




@endsection