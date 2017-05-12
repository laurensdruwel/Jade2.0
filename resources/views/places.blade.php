@extends('layouts.home')
@section('containerTitle')
    <b>Places</b>
@endsection
@section('contentContainer')
    <div id="map" style=width:100%;height:30%;></div>
    <form>
        <input type="search" id="locationTextField" style="width: 100%"><br>

        <label for="slider">Range</label><br><input type="range" id="slider" min="0,1" value="0,1" step="0,1" max="3"><br>
        <label for="eta">Time</label><br><input type="time" id="eta"><br>
        <button class="ui button">Add Friend</button><button class="ui button">Add Place</button>
    </form>

@endsection



    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMUpTXB_FdTbd54dmeCp3c3oi5Oakd6ak
&libraries=places&callback=initMap">
    </script>



