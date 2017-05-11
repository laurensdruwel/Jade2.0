@extends('layouts.app')
@section('content')
<div id="map" style=width:100%;height:30%;></div>


<div class="ui raised very padded text container  segment">
    <form>
        <input type="search" id="locationTextField" style="width: 100%"><br>

        <label for="slider">Range</label><br><input type="range" id="slider" min="0,1" value="0,1" step="0,1" max="3"><br>
        <label for="eta">Time</label><br><input type="time" id="eta"><br>
        <button class="ui button">Add Friend</button><button class="ui button">Add Place</button>
    </form>
</div>






@section('content')

{{--<script type="text/javascript" src="../../../Desktop/Jade-master/js/jquery-3.2.1.min.js"--}}
        {{--crossorigin="anonymous"></script>--}}

{{--<?php--}}
{{--require_once ("mysqli_connect.php");--}}
{{--CheckSession("places.php");--}}

{{--?>--}}
{{--<script async defer--}}
        {{--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMUpTXB_FdTbd54dmeCp3c3oi5Oakd6ak--}}
         {{--&libraries=places&callback=initMap">--}}
{{--</script>--}}

{{--<script src="../../../Desktop/Jade-master/Semantic-UI-CSS-master/semantic.min.js"></script>--}}
{{--<script type="text/javascript" src="../../../Desktop/Jade-master/js/script.js"></script>--}}
{{--</body>--}}
{{--</html>--}}