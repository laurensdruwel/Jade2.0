@extends('layouts.home')
@section('containerTitle')
    All places
    @endsection

@section('contentContainer')
@foreach($events as $event)

    <ul>
        <li>{{ $event->name }} {{$event->time}} {{ $event->eventId }}
            <button>Present</button>
        </li>
        <li>{{ $event->name }} {{$event->time}} {{ $event->eventId }}
            <button>Present</button>
        </li>
        <li>{{ $event->name }} {{$event->time}} {{ $event->eventId }}
            <button>Present</button>
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
