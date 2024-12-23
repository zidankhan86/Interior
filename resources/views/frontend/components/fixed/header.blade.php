

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
  <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}" style="color: black">Innards DS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link"><b>Home</b></a></li>

              <li class="nav-item dropdown">
                <a href="{{ route('services') }}" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('residential') }}"><b>Residential Interior</b></a></li>
                    <li><a class="dropdown-item" href="{{ route('commercial') }}"><b>Commercial Interior</b></a></li>
                    <li><a class="dropdown-item" href="{{ route('architect') }}"><b>Architectural Consultancy</b></a></li>

                </ul>
            </li>

              <li class="nav-item"><a href="{{ route('portfolio.page') }}" class="nav-link"><b>Portfolio</b></a></li>
              <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"><b>How we work</b></a></li>
              <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"><b>About</b></a></li>
              <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link"><b>Blog</b></a></li>
              <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"><b>Contact</b></a></li>

              @auth
                  <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link btn btn-danger"><b>Logout</b></a></li>
              @endauth
          </ul>
      </div>
  </div>
</nav>


