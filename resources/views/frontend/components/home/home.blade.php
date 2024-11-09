


@extends('frontend.layout.app')

@section('content')


{{-- hero --}}
@include('frontend.components.fixed.hero')

<!-- YouTube Video Section -->
<section class="py-5 bg-light">
    <div class="container" style="max-width: 1200px;">
        <div class="embed-responsive embed-responsive-16by9 position-relative">
            <!-- Corrected YouTube Embed URL -->
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EXibdjbRLfY?rel=0" allowfullscreen></iframe>
            <!-- Play Button Overlay -->
            <div class="play-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-play-circle-fill text-white" viewBox="0 0 16 16">
                    <path d="M11.596 8.004L5.792 4.328a.5.5 0 0 0-.792.408v7.528a.5.5 0 0 0 .792.408l5.804-3.676a.5.5 0 0 0 0-.816z"/>
                </svg>
            </div>
        </div>
    </div>
</section>


  

<!-- Service 2 - Bootstrap Brain Component -->
<section class="py-4 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Services</h2>
          <p class="text-secondary mb-5 text-center">Whether it’s your home, office, or an entire complex,
            we’ll deliver from consultation to installation.</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>
  
    <div class="container overflow-hidden">
        <div class="row gy-5 gx-md-5 justify-content-center">
          <div class="col-10 col-md-5 col-xl-4 overflow-hidden text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-command text-primary mb-3" viewBox="0 0 16 16">
              <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z" />
            </svg>
            <h4 class="mb-3">Residential</h4>
            <p class="mb-3 text-secondary">Building sustainable homes has been our number one priority from the very beginning. From single housing to multi-housing solutions, we will bring intelligence and luxury to every room.</p>
            <div>
              <a href="#!" class="fw-bold text-decoration-none link-primary">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg>
              </a>
            </div>
          </div>
          <div class="col-10 col-md-5 col-xl-4 overflow-hidden text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-laptop text-primary mb-3" viewBox="0 0 16 16">
              <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
            </svg>
            <h4 class="mb-3">Web Design</h4>
            <p class="mb-3 text-secondary">We can help you to create a visually appealing website. We take into account your brand identity and target audience when designing your website.</p>
            <div>
              <a href="#!" class="fw-bold text-decoration-none link-primary">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg>
              </a>
            </div>
          </div>
          <div class="col-10 col-md-5 col-xl-4 overflow-hidden text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-credit-card-2-front text-primary mb-3" viewBox="0 0 16 16">
              <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
              <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
            </svg>
            <h4 class="mb-3">Secure Payments</h4>
            <p class="mb-3 text-secondary">We offer a variety of secure payment solutions to help you accept payments. We also offer fraud protection to help protect your business from fraud.</p>
            <div>
              <a href="#!" class="fw-bold text-decoration-none link-primary">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      
  </section>

  <section class="why-choose-us py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-dark">Why Choose Us?</h2> <!-- Added more margin-bottom to the heading -->
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #2c2c2c; border: 1px solid #444444; margin-bottom: 20px;">
                    <div class="card-body" style="background-color: #444444; color: #e0e0e0;">
                        <h5 class="card-title" style="color: #e0e0e0;">Fast Delivery</h5>
                        <p class="card-text" style="color: #b0b0b0;">50-day Move-in Guarantee</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #2c2c2c; border: 1px solid #444444; margin-bottom: 20px;">
                    <div class="card-body" style="background-color: #444444; color: #e0e0e0;">
                        <h5 class="card-title" style="color: #e0e0e0;">Affordable Prices</h5>
                        <p class="card-text" style="color: #b0b0b0;">2-year Free-service Warranty</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #2c2c2c; border: 1px solid #444444; margin-bottom: 20px;">
                    <div class="card-body" style="background-color: #444444; color: #e0e0e0;">
                        <h5 class="card-title" style="color: #e0e0e0;">24/7 Customer Support</h5>
                        <p class="card-text" style="color: #b0b0b0;">154 Design And Build Checks</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #2c2c2c; border: 1px solid #444444; margin-bottom: 20px;">
                    <div class="card-body" style="background-color: #444444; color: #e0e0e0;">
                        <h5 class="card-title" style="color: #e0e0e0;">24/7 Customer Support</h5>
                        <p class="card-text" style="color: #b0b0b0;">154 Design And Build Checks</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Button -->
        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ route('contact') }}" class="btn btn-warning">Book a Consultation</a>
        </div>
    </div>
</section>


<section class="interesting-facts py-5" style="background-color: white;">
    <div class="container">
        <h2 class="text-center mb-5 text-dark">Interesting Facts About Us</h2> <!-- Added more margin-bottom to the heading -->
        <div class="row">
            <!-- Fact 1 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #f0f0f0; border: 1px solid #ddd;">
                    <div class="card-body" style="background-color: #f8f8f8; color: #333;">
                        <h5 class="card-title" style="color: #333;">Over 1000 Projects Completed</h5>
                        <p class="card-text" style="color: #777;">Our team has successfully completed over 1000 projects.</p>
                    </div>
                </div>
            </div>
            <!-- Fact 2 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #f0f0f0; border: 1px solid #ddd;">
                    <div class="card-body" style="background-color: #f8f8f8; color: #333;">
                        <h5 class="card-title" style="color: #333;">Global Presence</h5>
                        <p class="card-text" style="color: #777;">We operate in over 20 countries across the globe.awards for innovation and excellence.</p>
                    </div>
                </div>
            </div>
            <!-- Fact 3 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #f0f0f0; border: 1px solid #ddd;">
                    <div class="card-body" style="background-color: #f8f8f8; color: #333;">
                        <h5 class="card-title" style="color: #333;">Award-Winning Team</h5>
                        <p class="card-text" style="color: #777;">Our team has won multiple industry awards for innovation and excellence.</p>
                    </div>
                </div>
            </div>
            <!-- Fact 4 -->
            <div class="col-md-3 mb-4">
                <div class="card border-light shadow-sm" style="background-color: #f0f0f0; border: 1px solid #ddd;">
                    <div class="card-body" style="background-color: #f8f8f8; color: #333;">
                        <h5 class="card-title" style="color: #333;">Sustainable Practices</h5>
                        <p class="card-text" style="color: #777;">We use sustainable materials and eco-friendly practices in all our projects.</p>
                    </div>
                </div>
            </div>
        </div>

 
    </div>
</section>

<style>
    /* Section Background */
.why-choose-us {
    background-color: #f2f2f2; /* Light ash color */
}

/* Card Styling */
.card {
    border: 1px solid #d6d6d6; /* Ash border color */
}

.card-body {
    background-color: #f8f8f8; /* Light gray background for cards */
    color: #333333; /* Darker text for contrast */
}

.card-title {
    color: #333333; /* Dark title text */
}

.card-text {
    color: #666666; /* Medium gray text */
}

/* Heading Color */
h2.text-center {
    color: #333333; /* Dark text for heading */
}

</style>

@endsection