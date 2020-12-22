<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/images/favicon_cimb.png" sizes="32x32"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/lib/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="assets/css/lib/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/lib/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/lib/pe-icon-7-stroke/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="assets/DataTables/Select-1.3.1/css/select.dataTables.min.css"/>
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body style="table-layout: fixed;">
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    {{-- <li class="menu-title">Widgets</li> --}}
                    {{-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop text-danger"></i>Dashboard</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="/">Dashboard</a></li>
                        </ul>
                    </li> --}}
                    <li>
                      <a href="/"><i class="menu-icon fa fa-laptop text-danger"></i>Dashboard </a>
                    </li>
                    <li>
                      <a href="/customers"><i class="menu-icon fa fa-users text-success"></i>Customers </a>
                    </li>
                    <li>
                      <a href="#"><i class="menu-icon fa fa-file-text text-info"></i>Files </a>
                    </li>
                    <li>
                      <a href="#"><i class="menu-icon fa fa-gears text-primary"></i>Settings </a>
                    </li>
                    {{-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users text-info"></i>Something</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="/work-allocation">Work Allocation</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="/work-allocation-customers">Work Allocation Users</a></li>
                        </ul>
                    </li> --}}
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/cimb_logo.jpg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left m-3 mr-5 row">
                        <a href="/work-allocation" class="col">Work Allocation</a>
                        <a href="/qa-basket" class="col">My QA Basket</a>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2">Stephen</span>
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        @yield('content-top')

        <div class="content">
            @yield('content')
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

{{-- <footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2018 Ela Admin
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://colorlib.com">Colorlib</a>
            </div>
        </div>
    </div>
</footer> --}}

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="assets/js/jquery/jquery.min.js"></script>
<script src="assets/js/popper/popper.min.js"></script>
<script src="assets/js/jquery-match-height/jquery.matchHeight-min.js"></script>
<script src="assets/js/main.js"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<script src="assets/DataTables/datatables.min.js"></script>
<script src="assets/DataTables/Select-1.3.1/js/dataTables.select.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>

@yield('scripts')

</body>
</html>
