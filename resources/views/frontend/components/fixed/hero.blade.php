<!-- Swiper Hero Section -->
<section class="hero-slider swiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="hero-section" style="background-image: url({{asset('img/hero-bg.webp')}});">
          <!-- Hero Banner Overlay -->
          <div class="hero-overlay"></div>
          <!-- Social Icons -->
          <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <!-- Hero Content -->
          <div class="content">
            <h1>Welcome to Our Website</h1>
            <p>Your journey starts here.</p>
            <a href="{{route('portfolio.page')}}" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div>
      <!-- Additional Slides -->
      {{-- <div class="swiper-slide">
        <div class="hero-section" style="background-image: url({{asset('img/hero-bg.webp')}});">
          <!-- Hero Banner Overlay -->
          <div class="hero-overlay"></div>
          <div class="content">
            <h1>Explore More Features</h1>
            <p>Discover everything we have to offer.</p>
            <a href="{{route('portfolio.page')}}" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div> --}}
    </div>
  </section>

  <style>
  /* Swiper Wrapper */
  .hero-slider {
    position: relative;
    width: 100%;
    height: 100vh;
  }

  /* Swiper Slide */
  .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  /* Hero Section */
  .hero-section {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    text-align: center;
    color: #fff;
    background-size: cover;
    background-position: center;
    z-index: 1;
    overflow: hidden;
  }

  /* Hero Banner Overlay */
  .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Adjust transparency */
    z-index: 0;
  }

  /* Social Icons Styling */
  .social-icons {
    position: fixed;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 0 8px 8px 0;
    z-index: 10; /* Above other content */
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease-in-out;
  }

  .social-icons a {
    color: #fff;
    font-size: 18px;
    text-decoration: none;
  }

  .social-icons a:hover {
    color: #007bff;
  }

  /* Show Social Icons on Hover */
  .hero-slider:hover .social-icons {
    opacity: 1;
    pointer-events: auto;
  }

  /* Hero Content */
  .content {
    z-index: 2;
  }

  .content h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
  }

  .content p {
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
  }

  .content .btn {
    font-size: 1rem;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-transform: uppercase;
    text-decoration: none;
  }

  .content .btn:hover {
    background-color: #0056b3;
  }
  </style>
