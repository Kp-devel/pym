<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css?1') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet"> -->
    </head>
    <body class="bg-white">
        <div id="app">
            @yield('menu')
            <main>
                @yield('content')
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{asset('js/app.js?11')}}" type="text/javascript"></script>
        <!-- <script src="{{asset('js/bootstrap-select.min.js')}}" type="text/javascript"></script> -->
    </body>
</html>
