<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dss_login</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('bootstrap/css/bootstrap-flattheme.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >


</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    {!!  Html::script('bootstrap/js/bootstrap.min.js') !!}
</body>
</html>