<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <title>Laravel+Vue</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
    </head>
    <body>
        <div id="app"></div>
 
        <script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}" ></script>
       

    </body>
</html>