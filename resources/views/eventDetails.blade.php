@extends('layouts.home')
@section('containerTitle')
    Detailed event view - {{$event->name}}
@endsection

@section('contentContainer')

    <div style="height: 300px;">
        {!! Mapper::render() !!}
    </div>


        {{--<ul>--}}
            {{--<li>{{ $event->name }}</li>--}}
            {{--<li>{{ $event->price }}</li>--}}
            {{--<li>{{ $event->description }}</li>--}}
            {{--<li>{{ $event->public }}</li>--}}
            {{--<li>{{ $event->longitude }}</li>--}}
            {{--<li>{{ $event->latitude }}</li>--}}
            {{--<li>{{ $event->eventId }}</li>--}}
        {{--</ul>--}}

    {{ $event->description }}

    <div class="ui list">
        <div class="item">
            <i class="cube icon"></i>
            <div class="content">
                {{ $event->name }}
            </div>
        </div>
        <div class="item">
            <i class="calendar icon"></i>
            <div class="content">
                {{ $event->date }} {{ $event->time }}
            </div>
        </div>


        <div class="item">
            <i class="marker icon"></i>
            <div class="content">
                {{ $event->place }}
            </div>
        </div>
        <div class="item">
            <i class="euro icon"></i>
            <div class="content">
                {{ $event->price }}
            </div>
        </div>
        {{--<div class="item">--}}
            {{--<i class="euro icon"></i>--}}
            {{--<div class="content">--}}
                {{--{{ $event->public }}--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="item">
            <i class="mail icon"></i>
            <div class="content">
                {{ $event->hostEmail }}
                {{--<a href="mailto:jack@semantic-ui.com">jack@semantic-ui.com</a>--}}
            </div>
        </div>

    </div>






@endsection
