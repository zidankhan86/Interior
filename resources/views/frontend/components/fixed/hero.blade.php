{{-- <section class="home-slider js-fullheight owl-carousel">
    <div class="slider-item js-fullheight" style="background-image:url('{{ asset('frontend/images/bg_1.jpg') }}');">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Create a home that defines who  you are</p>
          <p><a href="{{ route('portfolio.page') }}" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
        </div>
      </div>
      </div>
    </div>


  </section> --}}


   <!-- Swiper Hero Section -->
   <section class="hero-slider swiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div
        class="swiper-slide slider-item js-fullheight"
        style="background-image: url({{ asset('frontend/images/bg_1.jpg') }})"
      >
        <div class="overlay"></div>
        <div class="container">
          <!-- content wraper -->
          <div
            class="position-relative w-100 h-100 d-flex justify-content-end align-items-center text-white"
            style="z-index: 20"
          >
            <div class="content">
              <!-- text heading -->
              <h1 class="mb-4 text-white text-uppercase fw-normal">
                Create a home that defines who you are
              </h1>
              <!-- link button -->
              <a
                href="{{route('portfolio.page')}}"
                class="hero-btn btn btn-outline-light px-4 py-2"
                >View our works</a
              >
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      {{-- <div
        class="swiper-slide slider-item js-fullheight"
        style="background-image: url('./img/hero-bg.webp')"
      >
        <div class="overlay"></div>
        <div class="container">
          <!-- content wraper -->
          <div
            class="position-relative w-100 h-100 d-flex justify-content-end align-items-center text-white"
            style="z-index: 20"
          >
            <div class="content">
              <!-- text heading -->
              <h1 class="mb-4 text-white text-uppercase fw-normal">
                Lorem ipsum dolor sit amet consectetur.
              </h1>
              <!-- link button -->
              <a
                href="portfolio.html"
                class="hero-btn btn btn-outline-light px-4 py-2"
                >View our works</a
              >
            </div>
          </div>
        </div>
      </div> --}}

      <!-- Slide 3 -->

        {{-- <div class="overlay"></div>
        <div class="container">
          <!-- content wraper -->
          <div
            class="position-relative w-100 h-100 d-flex justify-content-end align-items-center text-white"
            style="z-index: 20"
          >
            <div class="content">
              <!-- text heading -->
              <h1 class="mb-4 text-white text-uppercase fw-normal">
                Lorem ipsum dolor sit amet consectetur adipisicing.
              </h1>
              <!-- link button -->
              <a
                href="portfolio.html"
                class="hero-btn btn btn-outline-light px-4 py-2"
                >View our works</a
              >
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
