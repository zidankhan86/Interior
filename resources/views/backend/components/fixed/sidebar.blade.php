<!-- Sidebar -->
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark">
        {{-- <a href=".">
          <img src="{{url('frontend/images/logo.png') }}" width="110" height="32" alt="InnardsDS" class="navbar-brand-image">
        </a> --}}
       <a href="{{ route('app') }}"> <strong>InnardsDS</strong></a>
      </h1>

      <div class="collapse navbar-collapse" id="sidebar-menu">
        <ul class="navbar-nav pt-lg-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('app') }}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="frontend/images/logo.png" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <x-backend.svg.service_icon />
                </span>
                <span class="nav-link-title">
                  <b>Portfolio</b>
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="{{ route('portfolioType.index') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                          <x-backend.svg.category_icon />
                        </span>
                        <span class="nav-link-title">
                          Category
                        </span>


                        <a class="dropdown-item" href="{{ route('portfolio.index') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
                          <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <x-backend.svg.service_icon />
                          </span>
                          <span class="nav-link-title">
                            Portfolio
                          </span>
                        </a>

                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <x-backend.svg.blog_icon />
              </span>
              <span class="nav-link-title">
                <b>BLOG</b>
              </span>
          </a>
          <div class="dropdown-menu">
              <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="{{ route('category.list') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                        <x-backend.svg.category_icon />
                      </span>
                      <span class="nav-link-title">
                        Category
                      </span>


                      <a class="dropdown-item" href="{{ route('blog.list') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                          <x-backend.svg.blog_post_icon />
                        </span>
                        <span class="nav-link-title">
                          Blog Post
                        </span>
                      </a>

                  </div>
              </div>
          </div>
      </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('about.list') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <x-backend.svg.about_icon />
              </span>
              <span class="nav-link-title">
                About
              </span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.list') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <x-backend.svg.user_icon />
              </span>
              <span class="nav-link-title">
                User
              </span>
            </a>

          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{ route('contact.list') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <x-backend.svg.message_icon />
              </span>
              <span class="nav-link-title">
                 Messages
              </span>
            </a>

          </li>

        <br><br><br>
          <li class="nav-item ">
            <a class="nav-link" style="color: red" href="{{ route('logout') }}"  data-bs-auto-close="false" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->

              </span>
              <span class="nav-link-title">
                <B>Logout</B>
              </span>
            </a>

          </li>

        </ul>

      </div>

    </div>
  </aside>
