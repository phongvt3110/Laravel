@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <h1>Your are: {{$data['user']->name}}</h1>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection