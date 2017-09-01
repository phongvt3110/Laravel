<html>
<head>
    <title>Page
        @section('title')
            -Laravel.net
        @show
    </title>
</head>
<body>
@section('sidebar')
    <h1>This is the master sidebar.</h1>
    <h1>This is the master sidebar.</h1>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>