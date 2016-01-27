<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <script type="text/javascript" src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        @yield('footer')
    </body>
</html>
