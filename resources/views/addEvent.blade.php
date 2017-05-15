@extends('layouts.home')
@section('containerTitle')
    Add event
@endsection
@section('contentContainer')
    {{--<div id="map" style="height: 400px">{!!  Mapper::render() !!}</div>--}}

    <form class="ui form"  name="eventForm" method="post" action="addThisEvent">
        <div class="field"><label for="eventname">Name of event</label><input id="eventname" name="eventname" placeholder="Name" type="text" autocomplete="off"></div>
        <div class="two fields">
        <div class="field"><label for="place">Location</label><input type="search" id="place" name="place" style="width: 100%" placeholder="Enter location"></div>
        <div class="field"><label for="radius">Range (km)</label><input type="number" id="radius" name="radius" min="0.0" value="0.0" step="0.1" max="3"></div>
        </div>

        <div class="three fields">
            <div class="field"><label for="time">Time</label><input type="time" id="time" name="time" value="12:00"></div>
        <div class="field"><label for="public">Status</label>
        <select id="public" name="public">
            <option value="1" >Public</option>
            <option value="0">Private</option>
        </select>
        </div>
            <div class="field"><label for="price">Price</label><input type="number" id="price" name="price" step="0.01" min="0.00" value="0.00"></div>
        </div>


        <div class="field"><label for="category">Category (tags)</label><input type="text" id="category" name="category"></div>


        <label for="description">Description</label><br><textarea id="description" placeholder="Event details" name="description"></textarea><br>
        {{--<button class="ui button">Add Friend</button>--}}
        <input type="hidden" name="_token" value="{!! csrf_token()  !!}">
        <input type="submit" class="ui button" value="Add event">

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


