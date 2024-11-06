{{-- <header class="header-top bg-grey justify-content-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 col-md-4 text-center d-none d-lg-block">
            <a class="navbar-brand " href="{{ route('home') }}">
              <img src="frontend/images/logo.png" alt="" class="img-fluid">
            </a>
        </div>

        <div class="col-lg-8 col-md-12">
          <nav class="navbar navbar-expand-lg navigation-2 navigation">
            <a class="navbar-brand text-uppercase d-lg-none" href="#">
              <img src="frontend/images/logo.png" alt="" class="img-fluid">
            </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
              </button>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul id="menu" class="menu navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('home') }}"  >
                             Home
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('blog') }}"  role="button">
                             Blog
                            </a>

                        </li>

                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{ route('category') }}" class="nav-link">Category</a></li>


                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                        <ul class="navbar-nav">
                         
                      
                         
                      </ul>
                      
                       
                    </ul>

                    <ul class="list-inline mb-0 d-block d-lg-none">
                      <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                     
                    </ul>
                </div>
            </nav>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="header-socials-2 text-right d-none d-lg-block">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
              
              </ul>
            </div>
          </div>
      </div>
    </div>
  </header> --}}


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Klift</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="{{ route('project') }}" class="nav-link">Service</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Portfolio</a></li>
	        	<li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            @guest
                            
           
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link btn btn-info"><b>SignIn</b></a></li>
            <li class="nav-item"><a href="c{{ route('registration') }}" class="nav-link btn btn-success"><b>SignUp</b></a></li>
            @endguest
            @auth
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link btn btn-danger"><b>Logout</b></a></li>
                   
            @endauth
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url('{{ asset('frontend/images/bg_1.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We Create Amazing Architecture Designs</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url('{{ asset('frontend/images/bg_1.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Virtually Build Your House</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p><p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>