<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('pageTitle')</title>

    <!-- Styles -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/sidebar-nav.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.toast.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/morris.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/colors/default.css')}}" id="theme"  rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" id="theme"  rel="stylesheet">
    <link href="{{asset('assets/css/summernote.min.css')}}" id="theme"  rel="stylesheet">
    <link href="{{asset('assets/css/jquery.dataTables.min.css')}}" id="theme"  rel="stylesheet">
    <link href="{{asset('assets/css/jasny-bootstrap.min.css')}}" id="theme"  rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">


    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg" href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="ti-menu"></i>
            </a>
            <div class="top-left-part">
                <a class="logo" href="">
                    <b>&nbsp;</b>
                    <span class="hidden-xs">
                            <img alt="Eva" class="light-logo" src="{{asset('assets/img/text.png')}}">
                    </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
                        <i class="icon-arrow-left-circle ti-menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li id="notifications-menu" class="dropdown">
                    <a id="notifications-link" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:">
                        <i class="ti-bell"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <div class="user-profile">
                <div class="dropdown user-pro-body">
                    <div>
                        <a href="/">
                            <img alt="Inicio" class="img-circle" src="{{asset('assets/img/user.png')}}">
                        </a>
                    </div>
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Cerrar sesión

                            </a></li>
                    </ul>
                </div>
            </div>
            <ul id="side-menu" class="nav">

                <li class="nav-small-cap m-t-10">&nbsp;&nbsp;&nbsp;&nbsp; Tablero</li>
                <li><a href="{{route('users.index')}}" class="waves-effect" ><i class="fa fa-users" data-icon="v"></i> <span class="hide-menu"> Usuarios<span class="fa arrow"></span></span></a></li>
            </ul>
        </div>
    </div>
    <div id="page-wrapper">
        <div class="container-fluid">
            {{destroySession()}}
            @yield('content')

        </div>
        <footer class="footer text-center"> <?php echo date('Y'); ?> &copy; <a target="_blank">Location Tracking</a>.</footer>
    </div>
</div>

//Logout User
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


<!-- jQuery and Bootstrap -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/sidebar-nav.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/js/waves.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.toast.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/raphael.min.js')}}"></script>
<script src="{{asset('assets/js/morris.min.js')}}"></script>


<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.charts-sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.style.switcher.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-show-password.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/summernote.min.js')}}"></script>
{{--<script src="{{asset('assets/js/general/custom.js')}}"></script>--}}
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
