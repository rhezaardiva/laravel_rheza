<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Portfolio - Rheza Ardhiva</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/portofolio.css">
	<link href="{{asset('img/avatar.png')}}" rel='shortcut icon'>
	<script src="{{asset('js/app.js')}}" defer></script>


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
                        <h2>Portfolio</h2>
                        <p>This page is about my portfolio. You will see education, skills, programming languages ​​that I use, as well as some reviews of the programming languages ​​that I use</p>
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


    <!-- About -->
    <section class="milestones-section set-bg" style="margin-top: 1px; background-color: #200545;">
		<div class="container text-center" style="color: white;">
			<h2 class="text-center" style="color: white;">About Me</h2>
			<img src="img/profile.jpg" style="width: 50%; margin-top: 20px;" class="img-fluid rounded b-shadow-a ">
			<p style="color: white; margin-top: 10px;" class="text-center">Seorang siswa yang sedang mengemban ilmu. Mulai belajar Pemrograman web sejak di bangku SMK pada kelas 11. Saat ini saya masih aktif mengisi blog saya blog.rhezaardiva.space Seorang Siswa SMK Kompetensi Keahlian Rekayasa Perangkat Lunak di sebuah sekolah swasta di daerah cimanggis kota depok. Sebagai siswa SMK saya masih fokus dengan pelajaran yang ada di sekolah untuk mendapatkan yang terbaik.</p>
		</div>
	</section>
	<!-- About End -->

	<!-- All About -->
	<section class="milestones-section set-bg" data-setbg="img/milestones-bg.jpg" style="margin-top: 1px;">
		<div class="container" style="color: white;">
			<h2 class="text-center" style="color: white;">Personal Data</h2>
<br>
<br>
			<h3 style="color: white;">Education</h3>
        <ul style="margin-top: 10px;">
          <li>TK : RA Al Muttaqin</li>
          <li>SD : SDN Sukamaju 4</li>
          <li>SMP : SMPN 11 Depok</li>
          <li>SMK : SMK Taruna Bhakti</li>
          <li>Kuliah : Coming Soon</li>
          </ul>
<br>
        <h3 style="color: white;">Hobby</h3>
        <ul style="margin-top: 10px;">
          <li>Bermain Game</li>
          <li>Badminton</li>
          <li>Olahraga Sepeda</li>
        </ul>
<br>
        <h3 style="color: white;">Skills</h3>
        <ul style="margin-top: 10px;">
          <li>UX Designer - <code>Photoshop/gliffy</code></li>
          <li>Design and Editing - <code>Photoshop/ Premiere/ Illustrator</code></li>
          <li>Programming Language - <code>HTML/ CSS/ PHP/ Javascript</code></li>
        </ul>
			
		</div>
	</section>
	<!-- All About end -->


<!-- Programming Language -->
<section class="milestones-section set-bg" style="margin-top: 1px; background-color: #200545;">
		<div class="container">
			<div class="row">
				<!-- Skills -->
				<h2 style="color: white; margin-left: 350px;">Programming Language</h2>
				<div class="col-lg-6" style="margin-top: 95px;">
					<div class="single-progress-item">
						<p style="color: white;">HTML</p>
						<div class="progress-bar-style" data-progress="80"  data-bgcolor="#eb2b63" style="color: white;"></div>
					</div>
					<div class="single-progress-item">
						<p style="color: white;">CSS</p>
						<div class="progress-bar-style" data-progress="65"  data-bgcolor="#eb2bae" style="color: white;"></div>
					</div>
					<div class="single-progress-item">
						<p style="color: white;">Javascript</p>
						<div class="progress-bar-style" data-progress="40"  data-bgcolor="#d22beb" style="color: white;"></div>
					</div>
					<div class="single-progress-item">
						<p style="color: white;">PHP</p>
						<div class="progress-bar-style" data-progress="30"  data-bgcolor="#972beb" style="color: white;"></div>
					</div>
				</div>
	</section>
<!-- Programming Language End -->






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

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>

	</body>
</html>








<!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            	<a href="{{ route('register') }}">Register</a>
            @endif
        	@endauth
    	</div>
	@endif
</div> -->