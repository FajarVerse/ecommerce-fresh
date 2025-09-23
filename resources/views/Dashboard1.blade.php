<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- CSS -->
    <link href="{{ asset('./src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/fa/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/iCheck/flat/blue.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datepicker/datepicker3.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" />
</head>

<body class="skin-green">
<div class="wrapper">

    <!-- Header -->
    <header class="main-header">
        <a href="/dashboard" class="logo"><b>FRESH NIH</b></a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>

    <!-- Sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('dist/img/logofresh.png') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="header">MENU UTAMA</li>
                <li class="">
                    <a href="/dashboard">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="#">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Data Buah</span>
                    </a>
                </li>
                <li class="#">
                    <a href="#">
                        <i class="fa fa-money"></i> <span>Data Sayur</span>
                    </a>
                </li>
                <li class="{{ request()->get('page') === 'data_teknisi' ? 'active' : '' }}">
                    <a href="{{ url('/?page=data_teknisi') }}">
                        <i class="fa fa-group"></i> <span>Data Supplier</span>
                    </a>
                </li>

                @guest
                    <li>
                        <a href="#">
                            <i class="fa fa-lock"></i> <span>Login</span>
                        </a>
                    </li>
                @else
                    <li class="header">MENU ADMIN</li>
                    <li class="#">
                        <a href="#">
                            <i class="fa fa-user text-warning"></i> Managemen User
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">
                            <i class="fa fa-backward text-danger"></i> <span>Log Out</span>
                        </a>
                    </li>
                @endguest
            </ul>
        </section>
    </aside>

    <!-- Content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $title ?? 'Dashboard' }}</h1>
        </section>

        <section class="content">
            {{-- Kalau ga ada page, tampilkan info --}}
            @if (!request()->has('page'))
                <div class="alert alert-info">
                    <h4>Info Box</h4>
                    <p>Ini adalah info dashboard.</p>
                </div>
            @endif

            <div class="row">
                <section class="col-lg-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Konten Utama</h3>
                        </div>
                        <div class="box-body">
                            <p>Konten dashboard atau modul akan tampil di sini.</p>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs"></div>
        <strong>Copyright &copy; {{ date('Y') }} <a href="#">SPK</a></strong>
    </footer>
</div>

<!-- JS -->
<script src="{{ asset('plugins/jQueryUI/jquery-ui.min.js') }}"></script>
<script>$.widget.bridge('uibutton', $.ui.button);</script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('plugins/fastclick/fastclick.min.js') }}"></script>
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>
