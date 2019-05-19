<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CardAppOn - Administração</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('vendor/dist/css/adminlte.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
    @include('layouts.admin.partes.navbar')


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('dashboard.index')}}" class="brand-link">
            <img src="{{asset('vendor/home/images/logoadmin.jpg')}}" alt="AdminLTE Logo" class="brand-image">
                 
            <span class="brand-text font-weight-light"><b>cardAppOn</b></span>
        </a>

        <!-- Sidebar -->
        {{-- <div class="sidebar">--}}
            <!-- Sidebar user panel (optional) -->
          {{--   <div class="user-panel mt-3 pb-3 mb-3 d-flex"> --}}
          {{--  <div class="image"> --}}
          {{--        <img src="{{asset('vendor/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"> --}}
          {{--    </div> --}}
          {{--    <div class="info"> --}}
          {{--        <a href="#" class="d-block">{{ auth()->user()->name }}</a> --}}
          {{--    </div> --}}
          {{-- </div>--}}

            <!-- Sidebar Menu -->
            @include('layouts.admin.partes.menu')
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('cabecalho')
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @yield('conteudo')
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
        <strong> Todos os cardápios e promoções em um único lugar
        </div>
        
        <!-- Default to the left -->
        <strong> Soluções em Cardápios Digitais
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<!-- jQuery -->


<script src="{{asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendor/dist/js/adminlte.min.js')}}"></script>
@yield('js')
</body>
</html>
