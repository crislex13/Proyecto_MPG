<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Inicio Max Power Gym</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/custom_css/metisMenu.css') }}" rel="stylesheet" />
    <!-- Date picker -->
    <link href="{{ asset('vendors/air-datepicker-master/dist/css/datepicker.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="{{ asset('vendors/jquery-circliful/css/jquery.circliful.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="vendors/jquery-plugin-circliful-master/css/jquery.circliful.css') }}"> -->
    <link type="text/css" href="{{ asset('vendors/progressbar/css/bootstrap-progressbar.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendors/select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/custom_css/calendar_custom.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendors/sweetalert/dist/sweetalert2.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/nvd3chart/nv.d3.min.css') }}">
    <link type="text/css" href="{{ asset('css/custom_css/fitness.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/custom_css/panel.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/custom_css/admin_dashboard.css') }}" rel="stylesheet">
    <!-- end of page level css -->
</head>

<body>
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @can('user-list')
                                <li><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
                            @endcan
                            @can('role-list')
                                <li><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
                            @endcan
                            @can('permission-list')
                                <li><a class="nav-link" href="{{ route('permissions.index') }}">Permission</a></li>
                            @endcan
                            @can('post-list')
                                <li><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
                            @endcan
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
    </div>

    <!-- div de carga -->
    <div class="se-pre-con"></div>
<!-- Logo de encabezado: el estilo se puede encontrar en el encabezado -->
<header class="header">
    <nav class="navbar navbar-static-top">
        <a class='logo' href='index.html'>
            <!-- Agrega la clase de ícono a tu imagen de logo o ícono de logo para agregar margen -->
            <!-- <img src="img/logo.png" alt="imagen no encontrada"> -->
            <img src="{{ asset('imgmpg/logoletrasbn.png') }}" alt="Awesome Image" id="skin-logo-img" class="img-fluid" style="max-width: 80%;" />
        </a>
        <!-- Barra de navegación del encabezado: el estilo se puede encontrar en el encabezado -->
        <!-- Botón de alternar la barra lateral -->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-navicon"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                            class="fa fa-fw fa-envelope-o black"></i>
                        <span class="label label-success">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">Nuevos Mensajes</li>
                        <li>
                            <a href="#" class="message striped-col">
                                <img class="message-image img-circle" alt="imagen" src="img/authors/avatar7.jpg">
                                <div class="message-body"><strong>Ernest Kerry</strong>
                                    <br> ¿Podemos reunirnos?
                                    <br>
                                    <small>Justo ahora</small>
                                    <span class="label label-success label-mini msg-lable">Nuevo</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                <img class="message-image img-circle" alt="imagen" src="img/authors/avatar.jpg">
                                <div class="message-body"><strong>John</strong>
                                    <br> No olvides llamar...
                                    <br>
                                    <small>Hace 5 minutos</small>
                                    <span class="label label-success label-mini msg-lable">Nuevo</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer">Ver todos los mensajes</li>
                    </ul>
                </li>
                <!-- Tareas -->
                <li class="dropdown tasks-menu hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-edit black"></i>
                        <span class="label label-primary">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="dropdown-title">Tienes 4 tareas</li>
                        <li>
                            <a href="#" class="message striped-col">
                                Diseñar algunos botones
                                <small class="pull-right">20%</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                Crear un tema bonito
                                <small class="pull-right">40%</small>
                            </a>
                        </li>
                        <li class="dropdown-footer">Ver todas las tareas</li>
                    </ul>
                </li>
                <!-- Notificaciones -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-bell-o black1"></i>
                        <span class="label label-warning">9</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="dropdown-title">Tienes 9 notificaciones</li>
                        <li>
                            <a href="#" class="message icon-not striped-col">
                                <i class="fa fa-fw fa-users info"></i>
                                <div class="message-body">
                                    <strong>John Doe</strong>
                                    <br> 5 miembros se unieron hoy
                                    <br>
                                    <span class="noti-date">Justo ahora</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer">Ver todas las notificaciones</li>
                    </ul>
                </li>
                <!-- Cuenta de usuario -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left"
                            height="35" alt="Imagen de usuario">
                        <div class="riot">
                            <div>
                                @auth
                                    {{ Auth::user()->name }}
                                @endauth
                                @guest
                                    Invitado
                                @endguest
                                <span>
                                    <i class="caret"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="img/authors/avatar1.jpg" class="img-circle" alt="Imagen de usuario">
                            @auth
                                {{ Auth::user()->name }}
                            @endauth
                            @guest
                                Invitado
                            @endguest
                        </li>
                        <li class="pad-3">
                            <a href="#">
                                <i class="fa fa-fw fa-user"></i> Mi Perfil
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-fw fa-gear"></i> Configuración de la cuenta
                            </a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#">
                                    <i class="fa fa-fw fa-lock"></i> Bloquear
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href='{{ route('logout') }}' onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-sign-out"></i> Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>


    <div class="wrapper row-offcanvas row-offcanvas-left">
        @include('sidebar')
        @yield('content')
    </div>

    <!-- global js -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom_js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom_js/metisMenu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom_js/backstretch.js') }}"></script>
    <!-- end of global level js -->
    <script src="{{ asset('vendors/jquery-circliful/js/jquery.circliful.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/progressbar/bootstrap-progressbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/countUp/countUp.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/moment/min/moment.min.js') }}" type="text/javascript"></script>
    <!-- date picker -->
    <script src="{{ asset('vendors/air-datepicker-master/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/air-datepicker-master/dist/js/i18n/datepicker.en.js') }}"></script>
    <!-- date picker end -->
    <script src="{{ asset('vendors/sweetalert/dist/sweetalert2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/fullcalendar/fullcalendar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/d3-chart/d3.v3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/nvd3chart/nv.d3.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript"
        src="{{ asset('vendors/jquery-easy-ticker-master/jquery.easy-ticker.min.js') }}"></script>
    <script src="{{ asset('vendors/inputmask/inputmask/inputmask.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/inputmask/inputmask/jquery.inputmask.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/inputmask/inputmask/inputmask.date.extensions.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('js/custom_js/admin_index.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->
</body>

</html>