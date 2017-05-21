@extends('layouts.home')
@section('containerTitle')
    All events
    @endsection

@section('contentContainer')

    <div style="height: 400px;">
        {!! Mapper::render() !!}
    </div>
@foreach($events as $event)

    <ul>
        <li><a href="allEvents/{{$event->eventId}}">
                <b>{{$event->name}}</b>
                <p>{{$event->description}}</p>
            </a>
        </li>

    </ul>

    {{--<ul>--}}
        {{--<li>{{ $event->name }}</li>--}}
        {{--<li>{{ $event->price }}</li>--}}
        {{--<li>{{ $event->description }}</li>--}}
        {{--<li>{{ $event->public }}</li>--}}
        {{--<li>{{ $event->longitude }}</li>--}}
        {{--<li>{{ $event->latitude }}</li>--}}
        {{--<li>{{ $event->eventId }}</li>--}}

    {{--</ul>--}}


    @endforeach




@endsection

