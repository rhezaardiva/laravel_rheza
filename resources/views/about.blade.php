<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Profile - Rheza Ardhiva</title>
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
	<link rel="stylesheet" href="css/style.css"/>
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
                        <h2>Profile</h2>
                        <p>Fill in here about me. You will see interesting things from me. Especially about me and also my habits. Happy Reading, Good People</p>
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
	<section class="domain-search-section sc-about-page"  style="background-color: #200545;">
		<div class="container text-center">
			<h2 style="color: white;">Rheza Ardhiva</h2>
			<img src="img/profile.jpg" style="width: 50%; margin-top: 20px;" class="img-fluid rounded b-shadow-a ">
			<p style="margin-top: 20px; color: white;">Halo Nama Saya Rheza Ardhiva. Umur Saya sekarang 16 Tahun, otw 17 tahun. Saya sekolah di SMK TARUNA BHAKTI Depok Jurusan RPL (Rekayasa Perangkat Lunak) Kelas 11. Saya di Sekolah belajar tentang bahasa pemrograman seperti HTML, CSS, PHP, dan Javascript. Saya juga memakai beberapa framework seperti Laravel dan Bootstrap, serta beberapa library seperti Bootsnipp, Bootswatch, light box, dan masih banyak yang lainnya. Saya juga punya hobi, tetapi saya menjalani hobi disaat saya punya waktu luang saja.</p>
		</div>
	</section>
	<!-- About end -->


<!-- Data Diri -->
	<section class="milestones-section set-bg" data-setbg="img/milestones-bg.jpg" style="margin-top: 1px;">
		<div class="container" style="color: white;">
			<h2 class="text-center" style="color: white;">Introduction</h2>
			<table style="margin-top: 10px;">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>Rheza Ardhiva</td>
			</tr>
			<tr>
				<td>Nama Panggilan</td>
				<td>:</td>
				<td>Reja</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td>:</td>
				<td>Badminton, Olahraga Sepeda, dan Bermain Game</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>rhezaardiva@gmail.com</td>
			</tr>
			<tr>
				<td>Sekolah</td>
				<td>:</td>
				<td>SMK Taruna Bhakti</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>RPL (Rekayasa Perangkat Lunak)</td>
			</tr>

			</table>
		</div>
	</section>
	<!-- Data Diri end -->


<!-- Ulasan RPL -->
	<section class="domain-search-section sc-about-page"  style="background-color: #200545;">
		<div class="container text-center" style="color: white;">
			<h2 style="color: white;">Rekayasa Perangkat Lunak</h2>
			<img src="img/rpl.png" style="width: 30%; margin-top: 20px;">
			<p style="margin-top: 20px; color: white;">Sedikit Ulasan tentang RPL. Rekayasa perangkat lunak (RPL atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas. Arti lainnya adalah pengubahan perangkat lunak itu sendiri guna mengembangkan, memelihara, dan membangun kembali dengan menggunakan prinsip rekayasa untuk menghasilkan perangkat lunak yang dapat bekerja lebih efisien dan efektif untuk pengguna.</p>
			<p style="color: white;">Ada kriteria yang dapat digunakan sebagai acuan dalam Rekayasa Perangkat Lunak :</p>
			<ul style="text-align: left;">
				<li>Dapat terus dirawat dan dipelihara (Maintainability)</li>
				<li>Dapat mengikuti perkembangan teknologi (Dependability)</li>
				<li>Dapat mengikuti keinginan pengguna (Robust)</li>
				<li>Efektif dan efisien dalam menggunakan energi dan penggunaannya</li>
				<li>Dapat memenuhi kebutuhan yang diinginkan (Usability)</li>
			</ul>
		</div>
	</section>
	<!-- Ulasan RPL end -->







	<!-- Milestones section -->
	<!-- <section class="milestones-section set-bg" data-setbg="img/milestones-bg.jpg" style="margin-top: 1px;">
		<div class="container">
			<div class="row milestones-top-text">
				<div class="col-lg-8">
					<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas sit amet neque sed elementum. </p>
				</div>
				<div class="col-lg-4 text-center ">
					<a href="" class="site-btn mt-4">Read More</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="milestone-item text-white">
						<i class="flaticon-shared-folder"></i>
						<h2>24k</h2>
						<p>Clients</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="milestone-item text-white">
						<i class="flaticon-social-media"></i>
						<h2>37k</h2>
						<p>Followers</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="milestone-item text-white">
						<i class="flaticon-cloud-computing"></i>
						<h2>8k</h2>
						<p>Cloud users</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="milestone-item text-white">
						<i class="flaticon-customer"></i>
						<h2>4k</h2>
						<p>Reviews</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Milestones section end -->


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
