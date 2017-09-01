@extends('templates.master')

@section('title')
   Contact @parent
@stop


@section('sidebar')
    <div style="color: #0c08ff;">@parent</div>
    <h2>This is contact page.</h2>
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h2>This is my body content of contact page.</h2>
    @for($i = 0;$i <10; $i++)
        <p>The i variable is : {{$i}}</p>
    @endfor
@endsection
