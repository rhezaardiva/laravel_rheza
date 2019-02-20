<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Post - Rheza Ardhiva</title>

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

 
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Custom styles for this template -->
    
  </head>
  <body>

    <!-- Header section -->
    <!-- As a link -->
<nav class="navbar navbar-dark bg-dark">
    <ul>
  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-right: 1050px; margin-top: -70px;">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="margin-left: 0px;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
  <a class="navbar-brand" href="{{ url('home') }}" style="margin-left: 450px; margin-top: -150px;">Home</a>
  <a class="navbar-brand" href="{{ url('about') }}">Profile</a>
  <a class="navbar-brand" href="{{ url('portofolio') }}">Portfolio</a>
  <a class="navbar-brand" href="{{ url('artikel') }}">Artikel</a>
  </ul>
</nav>
    <!-- Header section end -->







<div style="margin-top: 50px;">
  <button class="btn btn-success"><a href="{{action('CrudController@create')}}" style="text-decoration: none; color: white;">Tambah Data</a></button>
      <button class="btn btn-primary"><a href="{{action('CrudController@index')}}" style="text-decoration: none; color: white;">Edit | Delete | Show</a></button>
</div>



<!-- Blog posts section -->
    <section class="blog-section spad">
        <div class="container">

            <div class="row">
                <div class="col-lg-9">
                @foreach ($crudsFilter as $crud)
                    <div class="blog-post">
                        <img src="{{ url('foto/'.$crud->foto) }}" alt="" class="post-thumb" style="margin-top: 25px; width: 50%;">
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
                <div class="col-lg-3 sidebar">
                 <!-- widget -->
                    <div class="sb-widget">
                        <a href="" class="add">
                        </a>
                        <form class="sb-search-widget">
                            <input type="text">
                            <button>Search</button>
                        </form>
                    </div>
                    
                    <div class="sb-widget">
                        <h3 class="sb-title" style="margin-top: 30px; font-family: sans-serif;">Categories</h3>
                        <div class="sb-tag-widget">
                            @foreach ($categories as $categorie)
                            <a href="">{{$categorie->categorie}}</a>
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
        
      


  </div><!-- /.row -->

</main><!-- /.container -->

<footer>
  <p>
    <a href="#">Back to top</a>
  </p>
  <div>
  
</div>
</footer>





<style type="text/css">
    /* stylelint-disable selector-list-comma-newline-after */

.blog-header {
  line-height: 1;
  border-bottom: 1px solid #e5e5e5;
}

.blog-header-logo {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  font-size: 2.25rem;
}

.blog-header-logo:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.display-4 {
  font-size: 2.5rem;
}
@media (min-width: 768px) {
  .display-4 {
    font-size: 3rem;
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
}

.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

/*
 * Blog name and description
 */
.blog-title {
  margin-bottom: 0;
  font-size: 2rem;
  font-weight: 400;
}
.blog-description {
  font-size: 1.1rem;
  color: #999;
}

@media (min-width: 40em) {
  .blog-title {
    font-size: 3.5rem;
  }
}

/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}
.blog-pagination > .btn {
  border-radius: 2rem;
}

/*
 * Blog posts
 */
.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}

/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}

</style>








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>
