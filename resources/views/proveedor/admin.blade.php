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
        <link href="{{ asset('css/style.css?5') }}" rel="stylesheet">
        <link href="{{ asset('css/waves.css?2') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet"> -->
    </head>
    <body class="">
        <div id="app">
            <div class="panel-menu">
                <div class="logo d-flex px-4 pt-3 border-bottom">
                    <div class="pb-3">
                        <b class="font-18 font-bold mb-0"><i class="fa fa-shopping-basket fa-lg pr-2 text-orange"></i>Mercadito</b>
                    </div>
                </div>
                <!-- menu -->
                <div class="perfil px-4 pt-3 d-flex">
                    <img src="{{asset('img/foto.jpg')}}" width="60"  height="60" class="rounded-circle border">
                    <div class="pl-3 pr-2 pt-2">
                        <b>Bienvenido(a)!</b><br>
                        <small>Valentina Román Paredes</small>
                    </div>
                </div>
                <div class="px-4 pb-5 pt-3 menu-options">
                    <a href="{{route('nuevasucursal')}}" class="btn btn-orange waves-effect text-left d-flex justify-content-between"><p class="mb-0 font-bold">Nueva Sucursal</p><i class="fa fa-plus pt-1"></i></a>
                    <p class="mb-0 pt-2 font-11">Menu</p>
                    <a href="{{route('adminProveedor')}}" class="btn btn-hover {{ request()->is('adminProveedor') ? 'btn-active' : '' }} waves-effect text-left" ><i class="fa fa-home pr-2"></i>Inicio</a>
                    <a href="#" class="btn btn-hover waves-effect text-left" ><i class="fa fa-users pr-2"></i>Mis Empleados</a>
                    <a href="{{route('missucursales')}}" class="btn btn-hover text-left waves-effect {{ request()->is('missucursales') ? 'btn-active' : '' }}" ><i class="fa fa-store pr-2"></i> Mis Sucursales</a>
                    <a href="#" class="btn btn-hover text-left waves-effect" ><i class="fa fa-chart-line pr-2"></i> Reportes</a>
                </div>
                <!-- @yield('menu') -->
                <!-- end menu -->
            </div>
            <div class="panel-body px-4">
                <a href="#" class="icono-bars border" onclick="menu()"><i class="fa fa-bars fa-lg p-3"></i></a>
                <div class="px-4 pt-3 pb-4">
                    @yield('panel-contenido')
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{asset('js/app.js?12')}}" type="text/javascript"></script>
        <script src="{{ asset('js/waves.js?1') }}" ></script>
        <!-- <script src="{{asset('js/bootstrap-select.min.js')}}" type="text/javascript"></script> -->
        <script>
            function menu(){
                $('.panel-menu').toggleClass('menu-abrir');            
                $('.panel-body').toggleClass('menu-cerrar');            
                $('.icono-bars').toggleClass('btn-cerrar');  
            }
            Waves.init();
            Waves.attach('.btn-waves', ['waves-button', 'waves-float']);
        </script>
    </body>
</html>
