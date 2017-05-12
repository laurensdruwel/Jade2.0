@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>@yield('containerTitle')</b></div>
                    <div class="panel-body">
                        @yield('contentContainer')
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
