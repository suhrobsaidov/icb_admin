<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">

    <div class="sidebar" data-color="dark-blue">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                CT
            </a>
            <a href="#" class="simple-text logo-normal">
                ICB
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="{{ 'dashboard' == request()->path() ? 'active' : '' }}">
                    <a href="/home">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="now-ui-icons education_atom"></i>
                        <p>
                          <ul><li>Страницы</li>


                        </ul>
                        </p>
                    </a>
                </li>
                <li>
                    <a href="groups">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Вакансии</p>
                    </a>
                </li>
                <li class="{{ 'abouts' == request()->path() ? 'active' : '' }}">
                    <a href="/abouts">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>Контакты</p>
                    </a>
                </li>
                <li class="{{ 'role-register' == request()->path() ? 'active' : '' }}">
                    <a href="/role-register">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Пользователи</p>
                    </a>
                </li>
                <li class="{{ 'profile' == request()->path() ? 'active' : '' }}">
                    <a href="profile">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Профиль</p>
                    </a>
                </li>
                <li class="{{ 'header' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/header">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Header</p>
                    </a>
                </li>
                <li class="{{ 'card' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/card">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Card</p>
                    </a>
                </li>
                <li class="{{ 'bankServices' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/bankService">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Bank Services</p>
                    </a>
                </li>
                <li class="{{ 'fAQ' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/fAQ">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>FAQ</p>
                    </a>
                </li>
                <li class="{{ 'bankProducts' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/bankProducts">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Bank Products</p>
                    </a>
                </li>
                <li class="{{ 'currentOffers' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/currentOffers">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Current Offers</p>
                    </a>
                </li>
                <li class="{{ 'depositCards' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/depositCards">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Deposit Cards</p>
                    </a>
                </li>
                <li class="{{ 'bankLoans' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/bankLoans">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Bank Loans</p>
                    </a>
                </li>
                <li class="{{ 'remittances' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/remittances">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Remittance cards</p>
                    </a>
                </li>
                <li class="{{ 'knowledgeBase' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/knowledgeBase">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Knowledge Base</p>
                    </a>
                </li>
                <li class="{{ 'onlineServices' == request()->path() ? 'active' : '' }}">
                    <a href="./admin/onlineServices">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Online Services</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
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
                        <!--<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons location_world"></i>
                            <p>
                              <span class="d-lg-none d-md-block">Some Actions</span>
                            </p>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->





        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>



<script src="./scripts/app.js"></script>
</body>
</html>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
@yield('scripts')
</body>


