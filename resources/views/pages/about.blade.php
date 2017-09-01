@extends('templates.master')

@section('title')
    About @parent
@stop

@section('sidebar')
    <h1 style="color: #0c08ff;">@parent</h1>
    <h2>This is About page.</h2>
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h2>This is my body content of about page.</h2>
@endsection
