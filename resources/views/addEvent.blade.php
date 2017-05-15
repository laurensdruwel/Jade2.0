@extends('layouts.home')
@section('containerTitle')
    Add event
@endsection
@section('contentContainer')
    {{--<div id="map" style="height: 400px">{!!  Mapper::render() !!}</div>--}}

    <form class="ui form">
        <div class="field"><label for="eventname">Name of event</label><input id="eventname" placeholder="Name" type="text" autocomplete="off"></div>
        <div class="two fields">
        <div class="field"><label for="place">Location</label><input type="search" id="place" style="width: 100%" placeholder="Enter location"></div>
        <div class="field"><label for="radius">Range (km)</label><input type="number" id="radius" min="0.0" value="0.0" step="0.1" max="3"></div>
        </div>

        <div class="three fields">
            <div class="field"><label for="time">Time</label><input type="time" id="time" value="12:00"></div>
        <div class="field"><label for="public">Status</label>
        <select id="public">
            <option value="1">Public</option>
            <option value="0">Private</option>
        </select>
        </div>
            <div class="field"><label for="price">Price</label><input type="number" id="price" step="0.01" min="0.00" value="0.00"></div>
        </div>


        <div class="field"><label for="category">Category (tags)</label><input type="text" id="category"></div>


        <label for="description">Description</label><br><textarea id="description" placeholder="Event details"></textarea><br>
        <button class="ui button">Add Friend</button>
        <button class="ui button">Add Place</button>
    </form>






    {{--Recent places--}}
    <div class="panel-heading "></div>
    <div class="panel-heading "></div>
    <div class="panel-body">

    </div>

@endsection

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMUpTXB_FdTbd54dmeCp3c3oi5Oakd6ak&libraries=places"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('place'));
        google.maps.event.addListener(places, 'place_changed', function () {

        });
    });

</script>


