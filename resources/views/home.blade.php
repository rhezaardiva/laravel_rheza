<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>Home - Rheza Ardhiva</title>
    <meta charset="UTF-8">
    <meta name="description" content="Cloud 83 - hosting template ">
    <meta name="keywords" content="cloud, hosting, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="{{asset('img/avatar.png')}}" rel='shortcut icon'>
    <script src="{{asset('js/app.js')}}" defer></script>
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->

    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <a href="./index.html" class="site-logo"><img src="img/avatar.png" alt="" width="15%"></a>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="nav-warp">
            <div class="user-panel" style="margin-top: -35px;">
                <a >IT HOST</a>
            </div>
            <ul class="main-menu" style="margin-top: -65px;">
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="margin-left: 0px;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                <li><a href="home">Home</a></li>
                <li><a href="about">Profile</a></li>
                <li><a href="portofolio">Portfolio</a></li>
                <li><a href="artikel">Artikel</a></li>
            </ul>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="img/bg.jpg">
        <div class="container h-100">
            <div class="hero-content text-white">
                <div class="row">
                    <div class="col-lg-6 pr-0">
                        <h2 style="font-size: 50px;">Welcome <a>{{ Auth::user()->name }}</a></h2s>
                        <p style="margin-top: 20px;">Good design and interesting animation make this website seen by many people. Please see the Navbar that has been provided to see more</p>
                        <a class="site-btn">Get your plan</a>
                    </div>
                </div>
                <div class="hero-rocket">
                    <img src="./img/rocket.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
        </div>
    </footer>
    <!-- Footer top section end -->


    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>
