
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="dBuRiiC1VClxRHpNN53FWKygOjSW30KcMKdutBp0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="sidebar-mini" >
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/AdminLTELogo.png"
             class="animation__shake"
             alt="AdminLTE Preloader Image"
             width="60"
             height="60">
    </div>
    <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#">
                    <i class="fas fa-bars"></i>
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline" action="#" method="get">
                        <input type="hidden" name="_token" value="dBuRiiC1VClxRHpNN53FWKygOjSW30KcMKdutBp0">
                        <div class="input-group">
                            <input class="form-control form-control-navbar" type="search"
                                   name="adminlteSearch"
                                   placeholder="search"
                                   aria-label="search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span >
            admin
        </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <li class="user-footer">
                        <a class="btn btn-default btn-flat float-right  btn-block "
                           href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-power-off text-red"></i>
                            Log Out
                        </a>
                        <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="dBuRiiC1VClxRHpNN53FWKygOjSW30KcMKdutBp0">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <a href="http://127.0.0.1:8000/home"
           class="brand-link ">
            <img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/AdminLTELogo.png"
                 alt="Admin Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity:.8">
            <span class="brand-text font-weight-light ">
        <b>Dashboard</b>
    </span>
        </a>


        <div class="sidebar">
            <nav class="pt-2">
                <ul class="nav nav-pills nav-sidebar flex-column "
                    data-widget="treeview" role="menu">
                    <li>
                        <div class="form-inline my-2">
                            <div class="input-group" data-widget="sidebar-search" data-arrow-sign="&raquo;">
                                <input class="form-control form-control-sidebar" type="search"
                                       placeholder="search"
                                       aria-label="search">
                                <div class="input-group-append">
                                    <button class="btn btn-sidebar">
                                        <i class="fas fa-fw fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link  "
                           href="http://127.0.0.1:8000/api/admin/header">
                            <i class="far fa-fw fa-file "></i>
                            <p>
                                Header
                            </p>
                        </a>
                    </li>
                    <li  class="nav-header ">
                        ACCOUNT SETTINGS
                    </li>
                    <li  class="nav-item">

                        <a class="nav-link  "
                           href="http://127.0.0.1:8000/admin/settings">

                            <i class="fas fa-fw fa-user "></i>

                            <p>
                                Profile

                            </p>

                        </a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link  "
                           href="http://127.0.0.1:8000/admin/settings"        >
                            <i class="fas fa-fw fa-lock "></i>
                            <p>
                                Change Password
                            </p>
                        </a>
                    </li>
                    <li  class="nav-item has-treeview ">
                        <a class="nav-link  "
                           href="" >
                            <i class="fas fa-fw fa-share "></i>
                            <p>
                                Multi Level
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li  class="nav-item">
                                <a class="nav-link  "
                                   href="#"        >
                                    <i class="far fa-fw fa-circle "></i>
                                    <p>
                                        Level 1
                                    </p>
                                </a>
                            </li>
                            <li  class="nav-item has-treeview ">
                                <a class="nav-link  "
                                   href="" >
                                    <i class="far fa-fw fa-circle "></i>
                                    <p>
                                        Level 1
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li  class="nav-item">
                                        <a class="nav-link  "
                                           href="#"        >
                                            <i class="far fa-fw fa-circle "></i>
                                            <p>Level 2</p>
                                        </a>
                                    </li>
                                    <li  class="nav-item has-treeview ">
                                        <a class="nav-link  "
                                           href="" >
                                            <i class="far fa-fw fa-circle "></i>
                                            <p>
                                                Level 2
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li  class="nav-item">
                                                <a class="nav-link" href="#">
                                                    <i class="far fa-fw fa-circle "></i>
                                                    <p>
                                                        Level 3

                                                    </p>
                                                </a>
                                            </li>
                                            <li  class="nav-item">
                                                <a class="nav-link  "
                                                   href="#"        >
                                                    <i class="far fa-fw fa-circle "></i>
                                                    <p>
                                                        Level 3
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li  class="nav-item">
                                <a class="nav-link  "
                                   href="#"        >
                                    <i class="far fa-fw fa-circle "></i>
                                    <p>
                                        Level 1
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li  class="nav-header ">
                        LABELS
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link  "
                           href="#"        >
                            <i class="far fa-fw fa-circle text-red"></i>
                            <p>
                                Important
                            </p>
                        </a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link  "
                           href="#"        >
                            <i class="far fa-fw fa-circle text-yellow"></i>
                            <p>
                                Warning
                            </p>
                        </a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link  "
                           href="#"        >
                            <i class="far fa-fw fa-circle text-cyan"></i>
                            <p>
                                Information
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper ">
        <div class="content-header">
            <div class="container-fluid">
                <h1>Dashboard</h1>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <p>Welcome to this beautiful admin panel.</p>
            </div>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
</body>

</html>
