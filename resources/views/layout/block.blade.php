<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forta GYM - @yield('title')</title>

    <link rel="icon" href="{{ asset('AdminLTE3/dist/img/logo-gym.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE3/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE3/dist/css/adminlte.min.css') }}">

    <!-- Styles -->
    @yield('styles')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- User Options -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                        <span class="dropdown-item dropdown-header bg-primary">Usuario</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog mr-2"></i> Mi cuenta
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-key mr-2"></i> Cambiar clave de acceso
                        </a>
                    </div>
                </li>

                <!-- Log out -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-danger">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-2"
            style="position: fixed; top:0; height: 100vh; padding-bottom: 10px;">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{asset('AdminLTE3/dist/img/logo-gym.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Forta GYM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('AdminLTE3/dist/img/user-icon.png') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Daryl Oscco Bustamante</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">DASHBOARD</li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.home.index') }}"
                                class="nav-link {{ Request::routeIs('dashboard.home.index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-header">FINANZAS</li>
                        <li class="nav-item">
                            <a href="{{ route('finanzas.metodo.index') }}"
                                class="nav-link {{ Request::routeIs('finanzas.metodo.index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>Métodos de pago</p>
                            </a>
                        </li>
                        <li class="nav-header">GIMNASIO</li>
                        <li class="nav-item">
                            <a href="{{ route('gimnasio.categoria.index') }}"
                                class="nav-link {{ Request::routeIs('gimnasio.categoria.index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Categorias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gimnasio.promocion.index') }}"
                                class="nav-link {{ Request::routeIs('gimnasio.promocion.index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Promociones
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gimnasio.cliente.index') }}"
                                class="nav-link {{ Request::routeIs('gimnasio.cliente.index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Clientes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    Inscripciones
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-check-circle nav-icon"></i>
                                        <p>Activas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-times-circle nav-icon"></i>
                                        <p>Vencidas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">TIENDA</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    Categorias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-boxes"></i>
                                <p>
                                    Productos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-dolly-flatbed"></i>
                                <p>
                                    Ventas
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="content-wrapper">
            @yield('content-englobal')
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


    <script>
        function updateActiveMenu(url) {
            // Elimina la clase 'active' de todos los enlaces del menú
            document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));

            // Encuentra el enlace correspondiente a la URL y añade la clase 'active'
            const activeLink = document.querySelector(`.nav-link[href="${url}"]`);
            if (activeLink) activeLink.classList.add('active');
        }
    </script>

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE3/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE3/dist/js/adminlte.min.js') }}"></script>

</body>

</html>
