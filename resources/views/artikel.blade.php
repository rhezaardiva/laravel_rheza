<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Artikel - Rheza Ardhiva</title>
	<meta charset="UTF-8">
	<meta name="description" content="Rheza Ardhiva">
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
                        <h2>Artikel</h2>
                        <p>This page is about the men's singles badminton top player. So you can get to know top player badminton. Enjoy it.</p>
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

<strong>Don't forget to look at the data from the category. click this link to go to the category data page <a href="{{url('categories')}}">Categorie</strong></p>
<div style="margin-top: 50px;">
  <button class="btn btn-success"><a href="{{action('CrudController@create')}}" style="text-decoration: none; color: white;">Tambah Data</a></button>
      <button class="btn btn-primary"><a href="cruds" style="text-decoration: none; color: white;">Edit | Delete | Show</a></button>
</div>



<!-- Blog posts section -->
	<section class="blog-section spad">
		<div class="container">

			<div class="row">

				<div class="col-lg-9">
                @foreach ($cruds as $crud)
                    <div class="blog-post">
						<img src="{{ url('foto/'.$crud->foto) }}" alt="" class="post-thumb" style="margin-top: 25px; width: 70%;">
                        <br>
						<div class="post-date">{{$crud->created_at}}</div>
						<h4>{{$crud->title}}</h4>
						<div class="post-metas">
						  <div class="post-meta">{{$crud->publisher}}</div>
					      <div class="post-meta">Website</div>
						  <div class="post-meta">{{$crud->qty}}</div>
						  <p class="content" style="width: 100%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{$crud->description}}</p>
                          <a href="{{action('CrudController@show', $crud->id)}}" >Read More</a>
					   </div>
         
                    </div>
                @endforeach
                </div>

        <!-- sidebar -->
                <div class="col-lg-3  sidebar">
                 <!-- widget -->
                    <div class="sb-widget">
                        <a href="" class="add">
                            <img src="img/add.jpg" alt="#">
                        </a>
                        <form class="sb-search-widget">
                            <input type="text">
                            <button>Search</button>
                        </form>
                    </div>
                    <!-- widget -->
                    <div class="sb-widget">
                        <h2 class="sb-title">Latest Posts</h2>
                        <div class="sb-latest-post-widget">
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/1.jpg"></div>
                                <div class="lp-content">
                                    <h6>Web Hosting for everyone</h6>
                                    <span>Oct 21, 2018</span>
                                </div>
                            </div>
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/2.jpg"></div>
                                <div class="lp-content">
                                    <h6>Web Hosting for everyone</h6>
                                    <span>Oct 21, 2018</span>
                                </div>
                            </div>
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/3.jpg"></div>
                                <div class="lp-content">
                                    <h6>Web Hosting for everyone</h6>
                                    <span>Oct 21, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget -->
                    <div class="sb-widget">
                        <h2 class="sb-title">Latest Posts</h2>
                        <ul>
                            <li><a href="">Development</a></li>
                            <li><a href="">SEO</a></li>
                            <li><a href="">Tips & Triks</a></li>
                            <li><a href="">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="sb-widget">
                        <h2 class="sb-title">Categorie</h2>
                        <div class="sb-tag-widget">
                            @foreach ($categories as $categorie)
                            <a href="{{url('artikel/filter', $categorie->id)}}">{{$categorie->categorie}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer top section end -->










				



	<!-- Footer section -->
    <!-- <footer class="footer-section">
        <div class="container">
            <div class="copyright"> --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><!-- </div> -->
        <!-- </div>
    </footer> -->
    <!-- Footer top section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
