

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
  <div class="container">
      <a class="navbar-brand" href="index.html">Klift</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
         
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Residential Interior</a></li>
                    <li><a class="dropdown-item" href="#">Commercial Interior</a></li>
                    <li><a class="dropdown-item" href="#">Architectural Consultancy</a></li>
                    
                </ul>
            </li>
            
              <li class="nav-item"><a href="{{ route('portfolio.page') }}" class="nav-link">Portfolio</a></li>
              <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">How we work</a></li>
              <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
              <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
              @guest
                  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link btn btn-info"><b>SignIn</b></a></li>
                  <li class="nav-item"><a href="{{ route('registration') }}" class="nav-link btn btn-success"><b>SignUp</b></a></li>
              @endguest
              @auth
                  <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link btn btn-danger"><b>Logout</b></a></li>
              @endauth
          </ul>
      </div>
  </div>
</nav>


    <style>
      .navbar-nav .nav-link {
    color: #333 !important;  /* Dark text for navbar links */
}

.navbar-nav .btn {
    color: rgb(235, 225, 225);            /* White text for buttons */
}

.navbar-nav .btn-info {
    background-color: #17a2b8;
}

.navbar-nav .btn-success {
    background-color: #28a745;
}

.navbar-nav .btn-danger {
    background-color: #dc3545;
}

    </style>

    <style>
      .nav-item.dropdown:hover .dropdown-menu {
    display: block;
}

    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const dropdownElements = document.querySelectorAll('.dropdown-toggle');
          dropdownElements.forEach(function (dropdown) {
              dropdown.addEventListener('mouseover', function () {
                  let dropdownMenu = this.nextElementSibling;
                  dropdownMenu.classList.add('show');
              });
              dropdown.addEventListener('mouseout', function () {
                  let dropdownMenu = this.nextElementSibling;
                  dropdownMenu.classList.remove('show');
              });
          });
      });
  </script>
  