<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

        <!-- Styles DashBoard -->
      
        <link href="{{ asset('assets/dashboard/css/metisMenu.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/css/timeline.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/css/startmin.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/css/morris.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Styles DashBoard -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        @include('layouts.menu.SeccionMenuAdministrador')




        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
        <script>
    $.material.init();
        </script>

        <script src="{{ asset('/assets/dashboard/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('/assets/dashboard/js/raphael.min.js') }}"></script>
        
        <script src="{{ asset('/assets/dashboard/js/startmin.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('js')
    </body>
</html>
