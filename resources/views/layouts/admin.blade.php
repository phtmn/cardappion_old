<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        CardapiON
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{asset('vendor/dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/dashboard/assets/css/now-ui-dashboard.css?v=1.3.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('vendor/dashboard/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="{{route('dashboard.index')}}" class="simple-text logo-mini">

            </a>
            <a href="{{route('dashboard.index')}}" class="simple-text logo-normal">
                {{ auth()->user()->name }}
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            @include('layouts.partes.menu-lateral')
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        @include('layouts.partes.navbar')
        <!-- End Navbar -->

        @yield('cabecalho')

        <div class="content">
            @yield('conteudo_principal')
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                CardapiOn
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Sobre Nós
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Desenvolvido por
                    <a href="#" target="_blank">CardapiON</a>. Coded with
                    <a href="#" target="_blank">Laravel</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('vendor/dashboard/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('vendor/dashboard/assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('vendor/dashboard/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{asset('vendor/dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('vendor/dashboard/assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('vendor/dashboard/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('vendor/dashboard/assets/js/now-ui-dashboard.min.js?v=1.3.0')}}" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('vendor/dashboard/assets/demo/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</body>

</html>