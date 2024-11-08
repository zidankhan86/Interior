{{-- <div class="header-logo py-5 d-none d-lg-block">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset ('frontend/images/logo.png') }}" alt="" class="img-fluid w-100"></a>
        </div>
      </div>
    </div>
  </div>

  <header class="header-top bg-grey justify-content-center">
     <nav class="navbar navbar-expand-lg navigation">
        <div class="container">
            <a class="navbar-brand d-lg-none" href="index.html"><img src="images/logo.png" alt="" class="img-fluid"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="ti-menu"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul id="menu" class="menu navbar-nav ">
                        <li class="nav-item dropdown  pl-0">
                            <a class="nav-link " href="{{ route('home') }}">
                             Home
                            </a>

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
                                <a href="{{ route('app') }}" class="nav-link">
                                    <strong class="btn btn-warning">Dashboard</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link">
                                    <strong class="btn btn-danger">Logout</strong>
                                </a>
                            </li>

                            @endauth
                        </ul>
                    </ul>
                </div>

                <div class="text-right search d-none d-lg-block">
                    <div class="search_toggle"></div>
                    <div class="search-form">
                        <form action="{{ route('blog.search') }}">
                            @csrf
                            <input type="text" name="search_key" placeholder="What do you need?" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 200px; margin-right: 10px;">
                            <button type="submit" class="btn btn-success" style="background-color: #29adb9; color: white; border: none; border-radius: 5px; padding: 10px 15px; cursor: pointer; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4caf50'">
                                <i class="ti-search"></i>
                            </button>
                        </form>

                    </div>
                </div>

            </div>
      </nav>

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
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->