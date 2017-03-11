@extends('layouts.app')

@section('styles')
{{ HTML::style('css/home_panel.css') }}
@stop


@section('scripts')
{{ HTML::script('js/app.js') }}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
