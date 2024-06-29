<header class="header-top bg-grey justify-content-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 col-md-4 text-center d-none d-lg-block">
            <a class="navbar-brand " href="index.html">
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
                          @guest
                              <li class="nav-item">
                                  <a href="{{ route('login') }}" class="nav-link">
                                      <strong class="btn btn-success">Sign In</strong>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('registration') }}" class="nav-link">
                                      <strong class="btn btn-info">Sign Up</strong>
                                  </a>
                              </li>
                          @endguest
                      
                          @auth
                              <li class="nav-item">
                                  <a href="{{ route('profile') }}" class="nav-link">
                                      <strong class="btn btn-info">{{ Auth::user()->name }}</strong>
                                  </a>
                              </li>
                              <li class="nav-item">
                               
                                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                                
                            </li>
                          @endauth
                      </ul>
                      
                       
                    </ul>

                    <ul class="list-inline mb-0 d-block d-lg-none">
                      <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
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
                <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </header>
