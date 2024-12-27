<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

<link rel="stylesheet" href="{{asset ('frontend/css/open-iconic-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset ('frontend/css/animate.css') }}">

<link rel="stylesheet" href="{{asset ('frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{asset ('frontend/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{asset ('frontend/css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{asset ('frontend/css/aos.css') }}">

<link rel="stylesheet" href="{{asset ('frontend/css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{asset ('frontend/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{asset ('frontend/css/jquery.timepicker.css') }}">


<link rel="stylesheet" href="{{asset ('frontend/css/flaticon.css') }}">
<link rel="stylesheet" href="{{asset ('frontend/css/icomoon.css') }}">
<link rel="stylesheet" href="{{asset ('frontend/css/style.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
  rel="stylesheet"
/>

<!-- bootstrap css cdn link (bootstrap@5.3.3) -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
/>

<!-- swiper js for slider cdn link (swiper@11) -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<!-- font awesome cdn link -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  rel="stylesheet"
/>


<style>
    body {
    font-family: "Roboto", serif;
  }


  /* components */
  .primary-btn {
    outline: #333 1px solid;
    color: #333;
    background-color: transparent;
  }

  .primary-btn:hover {
    outline: #333 1px solid;
    color: #333;
    background-color: rgba(0, 0, 0, 0.1);
  }

  .brand-btn {
    font-size: 1.3rem;
    border: 1px solid #ffadad;
    color: #333;
  }

  .brand-btn:hover {
    background-color: #333 ;
    border-color: #333;
    color: #fff;
  }

  .brand-text {
    position: relative;
    border-left: 4px solid #ffadad;
    padding-left: 2rem;
    margin: 1rem 0;
  outline-offset: 10px;


  }

  .brand-text::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    transform: translateX(-55%) ;
    width: 2rem;
    height: 2rem;
    background-color: #ffadad;
    border: 3px solid #fff;
    border-radius: 50%;
    z-index: 1;
  }

  .brand-text::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    transform: translateX(-55%) ;
    width: 2rem;
    height: 2rem;
    background-color: #ffadad;
    border: 3px solid #fff;
    border-radius: 50%;
    z-index: 1;
  }


  /* video style */
  .video-wrapper {
    position: relative;
    aspect-ratio: 16 / 9;
    background-color: rgba(0, 0, 0, 0.4);
    border-radius: 5px;
    overflow: hidden;
    cursor: pointer;
  }

  .video-poster {
    display: block;
    height: 100%;
    width: 100%;
    object-fit: cover;
  }

  .play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    pointer-events: none; /* Prevent blocking poster clicks */
  }

  iframe {
    aspect-ratio: 16 / 9;
    height: 100%;
    width: 100%;
    border: none;
  }

  .play-button {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 1rem;
    border-radius: 50%;
  }
  /* video style end */

  /* General Tab Styles */
  .brand-tabs .nav-link {
    border: none; /* Remove default borders */
    border-bottom: 2px solid transparent; /* Add bottom border */
    color: #333; /* Tab text color */
    font-size: 16px; /* Adjust font size */
    padding: 10px 16px; /* Spacing around tab */
    transition: border-color 0.3s ease, color 0.3s ease; /* Smooth transition */
    background-color: transparent; /* Ensure background is transparent */
  }

  .brand-tabs .nav-link.active {
    border-bottom: 2px solid #ffadad; /* Active tab bottom border color */
    color: #ffadad; /* Active tab text color */
    background-color: transparent; /* Active tab background remains transparent */
  }

  /* Hover Styles for Desktop */
  @media (min-width: 768px) {
    .brand-tabs .nav-link {
      cursor: pointer;
    }

    .brand-tabs .nav-link:hover {
      border-bottom: 2px solid #ffadad; /* Hover underline */
      color: #ffadad; /* Hover text color */
      background-color: transparent; /* Ensure no background color on hover */
    }
  }

  /* generic hero style */
  #generic-hero {
    background-color: #f6f6f6;
  }

  /* generic hero style end */


  /* timeline style  */
  .timeline {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
  }

  .timeline::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 33%;
    width: 2px;
    background-color: #ffadad;
  }

  .timeline-item {
    position: relative;
    margin: 0;
    padding: 0;
  }

  .timeline-item::after {
    content: "";
    position: absolute;
    top: 50%;
    left: calc(33% - 10px);
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    background-color: var(--bs-primary);
    border: 2px solid var(--bs-white);
    border-radius: 50%;
    z-index: 1;
  }

  .timeline-body {
    position: relative;
  }

  .timeline-date {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    width: 30%;
    text-align: right;
  }

  .timeline-content {
    margin-left: 35%;
    padding: 1rem;
  }

  /* timeline style end */


  /* navbar */
  /* Navbar initial style */
  .navbar {
    background-color: rgba(255, 255, 255, .5);
    width: 100%;
    z-index: 99;
    transform: translateY(0px);
  }

  .navbar.scrolled {
    transition: transform .75s ease-in !important;
    position: fixed;
    top: 0;
    background-color: #ffffff !important;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: -200px;
    transform: translateY(200px);
  }

  .navbar .nav-link {
    color: #000000;
    font-weight: 400 !important;
  }

  .navbar.scrolled .nav-link {
    color: black;
  }

  .navbar .navbar-brand {
    color: #000000;
  }

  .navbar.scrolled .navbar-brand {
    color: #000000;
  }

  /* Hover dropdown on larger screens (desktop) */
  @media (min-width: 992px) {
    .nav-item.dropdown:hover .dropdown-menu {
      display: block; /* Show dropdown on hover for desktop */
    }
  }

  /* For mobile, use Bootstrap's default behavior */
  @media (max-width: 991px) {
    .dropdown-menu {
      display: none; /* Ensure dropdown is hidden initially on mobile */
    }
    .nav-item.dropdown.open .dropdown-menu {
      display: block; /* Show dropdown when clicked on mobile */
    }
  }

  /* Default navbar color (transparent or dark background) */
  #ftco-navbar {
    transition: background-color 0.3s ease;
  }

  /* When the navbar is expanded on mobile, set background color to white */
  #ftco-navbar.navbar-open {
    background-color: #ffffff !important;
  }

  #ftco-navbar.navbar-open, #ftco-navbar.navbar-open.scrolled {
      transition: all 0s !important;
      position: fixed;
      top: 0;
      background-color: #ffffff !important;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: unset;
      transform: unset;
    }

  #ftco-navbar.navbar-open .navbar-brand {
    color: #000000;
  }

  /* Optionally, you can change the text color or add a box-shadow for better visibility */
  #ftco-navbar.navbar-open .navbar-nav .nav-link {
    color: #000000 !important; /* Change link color to black when navbar is white */
  }

  .navbar-toggler:focus {
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
  }

  .navbar-toggler {
    background-color: transparent !important;
    border: none !important;
    outline: none !important;
    color: #000000;
  }

  .navbar.scrolled .navbar-toggler,
  .navbar-open .navbar-toggler {
    background-color: transparent !important;
    color: #000000 !important;
  }

  /* navbar end */

  /* footer start */
  footer {
      background-color: #141313;
  }

  footer p, footer li, footer a{
      color: rgba(255, 255, 255, .7);
      text-decoration: none;
      font-weight: 400;
  }

  footer li, footer a{
      font-size: .9rem;
      line-height: 1.7;
  }

  footer p{
      font-size: .85rem;
  }

  footer .address li {
      margin-bottom: .5rem;
      display: flex;
      align-items: start;
      gap: 1rem;
  }

  footer .address li a {
      display: flex;
      align-items: start;
      gap: 1rem;
  }

  footer .address li i{
      font-size: 1rem;

  }

  footer .social-icon {
    background-color: rgba(255, 255, 255, 0.05);
    height: 3rem;
    width: 3rem;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
  }
  /* footer end */



  /* hero silder */
  .hero-slider {
    position: relative;
    width: 100%;
    height: 100vh;
  }

  .hero-slider .swiper-slide {
    position: relative;
    background-size: cover;
    background-position: center;
  }

  .hero-slider .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Dark overlay */
    z-index: 1;
  }

  .hero-slider .container {
      position: relative;
      height: 100%;
      width: 100%;
  }

  .hero-slider .content {
      width: 100%;
      max-width: 600px;
  }


  .hero-slider .hero-btn {
      background-color: rgba(0, 0, 0, 0.5);
  }

  .hero-slider .hero-btn:hover {
      background-color: rgba(255, 255, 255, 0.8);
  }

  /* hero slider end */

  #video-section {
    position: relative;
  }



  /* services */

  #services a, #services svg {
    color: #ffadad;
  }
  /* services end */


  /* why choose us section */
  #why-choose .single-card {
    border-radius: 10px;
    background-color: #f8f8f8;
    color: #333;
  }

  #why-choose .single-card .icon {
    font-size: 3rem;
    color: #787878; ;
  }

  #why-choose .single-card .text {
    font-size: 1.2rem;
  }



  /* interesting facts */
  .interesting-facts .card {
    width: 100%;
    height: 100%;
    border-bottom: #ffadad solid 3px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .interesting-facts .card .icon i {
    font-size: 2.5rem;
  }

  .hero-section {
    position: relative;
    height: 100vh;
    background: url('hero-bg.jpg') no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
}

.social-icons {
    position: fixed;
    top: 50%;
    left: -60px;  /* Hidden off-screen */
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 20px;
    background: rgba(0, 0, 0, 0.8);
    padding: 10px;
    border-radius: 0 10px 10px 0;
    transition: left 0.3s ease;  /* Smooth slide-in */
}

.hero-section:hover .social-icons {
    left: 0;  /* Slide out on hover */
}

.social-icons a {
    color: white;
    font-size: 1.5rem;
    text-decoration: none;
    padding: 10px;
    transition: transform 0.2s ease;
}

.social-icons a:hover {
    color: #007bff;
    transform: scale(1.1);  /* Slight grow effect */
}
</style>
