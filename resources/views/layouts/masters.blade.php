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

    <div class="sidebar" data-color="orange">
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
                <li>
                    <a href="./typography.html">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Typography</p>
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
    <footer>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacts</title>
	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/tablet/style-tablet.css">
	<link rel="stylesheet" href="./styles/mobile/style-mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<footer>
		<div class="footer-container">
			<!-- 1 -->
			<div class="footer-first-block">
				<!-- 1 -->
				<div>
					<h3>Individuals</h3>
					<ul>
						<a href="#">Cards</a>
						<a href="#">Loans</a>
						<a href="#">Deposits</a>
						<a href="#">Money transfers</a>
						<a href="#">Mobile banking</a>
					</ul>
				</div>
				<!-- 2 -->
				<div>
					<h3>Legal entities</h3>
					<ul>
						<a href="#">Loans</a>
						<a href="#">Term deposits</a>
						<a href="#">Current account</a>
						<a href="#">Salary projects</a>
						<a href="#">Corporate card</a>
						<a href="#">Acquiring</a>
					</ul>
				</div>
				<!-- 3 -->
				<div>
					<h3>Legal entities</h3>
					<ul>
						<a href="#">About the bank</a>
						<a href="#">Job openings</a>
						<a href="#">Contacts</a>
						<a href="#">Documents</a>
						<a href="#">News</a>
						<a href="#">FAQ</a>
					</ul>
				</div>
				<!-- 4 -->
				<div >
					<h3>Contacts</h3>
					<ul id="contacts">
						<a href="#"><img src="./images/icons/Phone.png" alt="Phone.png"> +992 37 227-91-70, 227-91-71</a>
						<a href="#"><img src="./images/icons/Envelope.png" alt="Envelope.png"> info@icb.tj</a>
						<a href="#"><img src="./images/icons/Location.png" alt="Location.png"> Dushanbe, Pushkin str., 10</a>
						<a href="#"><img src="./images/icons/Clock.png" alt="Clock.png"> Mon-Fri (08:00-17:00)</a>
						<a href="#"> Call center : 909 </a>
					</ul>
				</div>

			</div>
			<!-- 2 -->
			<div class="footer-second-block">
				<div class="footer-second-block-one">
					<p>CJSC  and Credit Bank is a member of the individual Savings insurance Fund.</p>
					<p>The certificate was issued on September 20, 2011.</p>
				</div>

				<div class="footer-second-block-two">
					<div>
						<p class="apps">Mobile banking : <img src="./images/icons/guglplay.png" alt="guglplay.png"> <img src="./images/icons/appstore.png" alt="appstore.png"></p>
					</div>
					<div class="social">
						<img src="./images/icons/Instagram.png" alt="Instagram.png">
						<img src="./images/icons/Facebook.png" alt="Facebook.png">
						<img src="./images/icons/Telegram.png" alt="Telegram.png">
						<img src="./images/icons/Twitter.png" alt="Twitter.png">
						<img src="./images/icons/LinkedIn.png" alt="LinkedIn.png">
					</div>
				</div>

			</div>
			<!-- 3 -->
			<div class="footer-third-block">
				<p><img src="./images/icons/Copyright.png" alt="Copyright.png" class="copyright">2011-2022. CJSC Investment and Credit Bank CJSC, official website.</p>
				<p>Developed by : WebDushanbe</p>
			</div>
		</div>
	</footer>
	<!-- <div class="mobile-menu">
		
		<div>
			<img src="./images/icons/hand.png" alt="hand.png">
			<p>Loans</p>
		</div>
		
		<div>
			<img src="./images/icons/wallet.png" alt="wallet.png">
			<p>Deposits</p>
		</div>
		
		<div>
			<img src="./images/icons/menu.png" alt="menu.png">
			<p>Menu</p>
		</div>
		
		<div>
			<img src="./images/icons/cards.png" alt="cards.png">
			<p>Cards</p>
		</div>
		
		<div>
			<img src="./images/icons/search.png" alt="search.png">
			<p>Vacancy</p>
		</div>
	</div> -->

<script src="./scripts/app.js"></script>
</body>
</html>
</footer>
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

</html>
