<!DOCTYPE html>
<html lang="en">
<head>
	<title>Artikel - Blog_Luthfi</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,600" rel="stylesheet">

	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

 <!-- Laravel -->
    <script src="{{ asset('js/app.js') }}" defer></script>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
<!-- Page Preloder -->
<div id="preloder">
		<div class="loader">
			<img src="{{asset('img/logoo.png')}}" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/logoo.png')}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<ul class="menu-list">
				<li><a href="{{ url('home') }}">Home</a></li>
				<li><a href="{{ url('profile') }}">Profil</a></li>
				<li><a href="{{ url('portofolio') }}">Portofolio</a></li>
				<li class="active"><a href="{{ url('blog') }}">Artikel</a></li>
                <!-- Authentication Links -->
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2 style="font-size:50px;">Artikel</h2>
				<div class="page-links">
					<a href="{{ url('home') }}">Home</a>
					<span style="font-size:15px;">{{$blog->judul}}</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{ url('uploads/'.$blog->foto) }}" alt="">
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$blog->judul}}</h2>
							<div class="post-meta">
								<a href="">Written By: {{$blog->penulis}}</a>
								<a href="">Category: {{$blog->qty}}</a>
								<a href="">Created At: {{$blog->created_at}}</a>
								<a href="">Update At: {{$blog->updated_at}}</a>
							</div>
							<p>{{$blog->deskripsi}}</p>
						</div>
						<!-- Post Comments -->
						<!-- <div class="comments">
							<h2>Comments (1)</h2>
							<ul class="comment-list">
								<li>
									<div class="avatar">
										<img src="{{ asset('img/avatar/01.jpg') }}" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 01 feb, 2019 | Reply</h3>
										<p>Wow! Awesome Picture</p>
									</div>
								</li>
							</ul>
						</div>
						<! Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="message" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search!">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<div class="widget-item">
					<h2 class="widget-title">Option</h2>
					<button class="btn btn-info"><a href="{{ url('blogs') }}" style="text-decoration: none; color: white;">Edit/Delete</a></button>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">New Article</h2>
						<ul>
							<li><a href="{{action('BlogController@show', $blog->id)}}"></a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="{{action('BlogController@show', $blog->id)}}"></a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->



	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2018-2019 All rights reserved. Designed by <a href="http://blog.luthfialqodri.space" target="_blank">LaokProduction</a></h2>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
