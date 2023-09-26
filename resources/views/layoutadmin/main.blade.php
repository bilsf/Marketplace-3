<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layoutadmin.link')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        @include('layoutadmin.sidebar')

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
            {{-- @include('sweetalert::alert') --}}
        <!-- jQuery -->
        @include('layoutadmin.linkj')
</body>
</html>
