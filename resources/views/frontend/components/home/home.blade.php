
@extends('frontend.layout.app')

@section('content')


{{-- hero --}}
@include('frontend.components.fixed.hero')


  <!-- YouTube Video Section -->
  <section id="video-section" class="py-5">
    <div class="container" style="max-width: 1000px">
      <div class="position-relative">
        <div class="video-wrapper">
          <!-- Fallback Poster -->
          <img
            src="{{asset('video-poster.jpg')}}"
            alt="Video Poster"
            class="video-poster w-100"
          />

          <!-- Play Button -->
          <div class="play-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="70"
              height="70"
              fill="currentColor"
              class="bi bi-play-circle-fill text-white"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.596 8.004L5.792 4.328a.5.5 0 0 0-.792.408v7.528a.5.5 0 0 0 .792.408l5.804-3.676a.5.5 0 0 0 0-.816z"
              />
            </svg>
          </div>

          <!-- Hidden YouTube Video Iframe -->
          <iframe
            class="embed-responsive-item w-100 d-none"
            src="https://www.youtube.com/embed/0qmGsWIP_mQ?rel=0&showinfo=0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </section>


<!-- Services Section -->
<section id="services" class="py-5" style="background-color: #f6f6f6">
    <div class="container">
      <!-- heading -->
      <div class="mb-5">
        <h2 class="display-6 text-center">Services</h2>
        <p class="mt-3 text-secondary text-center">
          Whether it’s your home, office, or an entire complex, we’ll
          deliver from consultation to installation.
        </p>
        <hr class="w-50 mx-auto mb-xl-9 border-dark-subtle" />
      </div>

      <!-- services -->
      <div class="mt-4 row g-5 justify-content-center">
        <!-- single service -->
        <div class="col-12 col-md-6 col-xl-4 overflow-hidden text-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="42"
            fill="currentColor"
            class="bi bi-command mb-3"
            viewBox="0 0 16 16"
          >
            <path
              d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z"
            ></path>
          </svg>
          <h4 class="mb-3">Residential</h4>
          <p class="mb-3 text-secondary">
            Building sustainable homes has been our number one priority from
            the very beginning. From single housing to multi-housing
            solutions, we will bring intelligence and luxury to every room.
          </p>
          <div>
            <a href="#!" class="fw-light text-decoration-none">
              Learn More
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-arrow-right-short"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"
                ></path>
              </svg>
            </a>
          </div>
        </div>

        <!-- single service -->
        <div class="col-12 col-md-6 col-xl-4 overflow-hidden text-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="42"
            fill="currentColor"
            class="bi bi-laptop mb-3"
            viewBox="0 0 16 16"
          >
            <path
              d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"
            ></path>
          </svg>
          <h4 class="mb-3">Commercial Design</h4>
          <p class="mb-3 text-secondary">
            We can help you to create a visually appealing website. We take
            into account your brand identity and target audience when
            designing your website.
          </p>
          <div>
            <a href="#!" class="fw-light text-decoration-none">
              Learn More
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-basket"
                viewBox="0 0 16 16"
              >
                <path
                  d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"
                ></path>
              </svg>
            </a>
          </div>
        </div>

        <!-- single service -->
        <div class="col-12 col-md-6 col-xl-4 overflow-hidden text-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="42"
            fill="currentColor"
            class="bi bi-credit-card-2-front mb-3"
            viewBox="0 0 16 16"
          >
            <path
              d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"
            ></path>
            <path
              d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"
            ></path>
          </svg>
          <h4 class="mb-3">Architectural Design</h4>
          <p class="mb-3 text-secondary">
            We offer a variety of secure payment solutions to help you
            accept payments. We also offer fraud protection to help protect
            your business from fraud.
          </p>
          <div>
            <a href="#!" class="fw-light text-decoration-none">
              Learn More
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-arrow-right-short"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"
                ></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- why choose Section -->
  <section id="why-choose" class="py-5">
    <div class="container text-center">
      <!-- heading -->
      <div class="mb-5">
        <h2 class="display-6 text-center">Why Choose us</h2>
      </div>

      <!-- why choose cards -->
      <div class="row g-4 justify-content-center">
        <!-- single card -->
        <div class="col-12 col-md-6 col-xl-3 overflow-hidden text-center">
          <div class="single-card p-3 h-100 w-100">
            <div class="icon">
              <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>
            <div class="text mt-2">Flexible Budget And Taste</div>
          </div>
        </div>

        <!-- single card -->
        <div class="col-12 col-md-6 col-xl-3 overflow-hidden text-center">
          <div class="single-card p-3 h-100 w-100">
            <div class="icon">
              <i class="fa-regular fa-calendar-check"></i>
            </div>
            <div class="text mt-2">2-year Free-service Warranty</div>
          </div>
        </div>

        <!-- single card -->
        <div class="col-12 col-md-6 col-xl-3 overflow-hidden text-center">
          <div class="single-card p-3 h-100 w-100">
            <div class="icon">
              <i class="fa-solid fa-award"></i>
            </div>
            <div class="text mt-2">50-day Move-in Guarantee</div>
          </div>
        </div>

        <!-- single card -->
        <div class="col-12 col-md-6 col-xl-3 overflow-hidden text-center">
          <div class="single-card p-3 h-100 w-100">
            <div class="icon">
              <i class="fa-solid fa-cubes"></i>
            </div>
            <div class="text mt-2">154 Design And Build Checks</div>
          </div>
        </div>
      </div>

      <a
        href="{{route('contact')}}"
        class="mx-auto mt-4 text-center btn btn-outlined-dark primary-btn"
        >Contact Us</a
      >
    </div>
  </section>


  <!-- infographic section -->
  <section class="infographic py-5" style="background-color: #f6f6f6">
    <div class="container">
      <!-- heading -->
      <div class="mb-4">
        <h2 class="display-6 text-center">Our Approach</h2>
        <p class="mt-3 text-secondary text-center">
          Our working process is very minimal; see it for yourself.
        </p>
      </div>

      <!-- infographic tabs -->
      <div class="mt-4">
        <!-- Tab Navigation -->
        <ul
          class="nav nav-tabs brand-tabs justify-content-center"
          id="myTab"
          role="tablist"
        >
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="tab1-tab"
              data-bs-toggle="tab"
              data-bs-target="#tab1"
              type="button"
              role="tab"
              aria-controls="tab1"
              aria-selected="true"
            >
              Meet and Greet
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab2-tab"
              data-bs-toggle="tab"
              data-bs-target="#tab2"
              type="button"
              role="tab"
              aria-controls="tab2"
              aria-selected="false"
            >
              Design Development
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab3-tab"
              data-bs-toggle="tab"
              data-bs-target="#tab3"
              type="button"
              role="tab"
              aria-controls="tab3"
              aria-selected="false"
            >
              Place Your Order
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab4-tab"
              data-bs-toggle="tab"
              data-bs-target="#tab4"
              type="button"
              role="tab"
              aria-controls="tab4"
              aria-selected="false"
            >
              Installation Process
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab5-tab"
              data-bs-toggle="tab"
              data-bs-target="#tab5"
              type="button"
              role="tab"
              aria-controls="tab5"
              aria-selected="false"
            >
              You Moving In
            </button>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-4">
          <div
            class="tab-pane fade show active"
            id="tab1"
            role="tabpanel"
            aria-labelledby="tab1-tab"
          >
            <img
              class="img-fluid"
              src="https://placehold.co/1280x548?text=Meet and Greet"
              alt="Meet and Greet Image"
            />
          </div>
          <div
            class="tab-pane fade"
            id="tab2"
            role="tabpanel"
            aria-labelledby="tab2-tab"
          >
            <img
              class="img-fluid"
              src="https://placehold.co/1280x548?text=Design Development"
              alt="Design Development Image"
            />
          </div>
          <div
            class="tab-pane fade"
            id="tab3"
            role="tabpanel"
            aria-labelledby="tab3-tab"
          >
            <img
              class="img-fluid"
              src="https://placehold.co/1280x548?text=Place Your Order"
              alt="Place Your Order Image"
            />
          </div>
          <div
            class="tab-pane fade"
            id="tab4"
            role="tabpanel"
            aria-labelledby="tab4-tab"
          >
            <img
              class="img-fluid"
              src="https://placehold.co/1280x548?text=Installation Process"
              alt="Installation Process Image"
            />
          </div>
          <div
            class="tab-pane fade"
            id="tab5"
            role="tabpanel"
            aria-labelledby="tab5-tab"
          >
            <img
              class="img-fluid"
              src="https://placehold.co/1280x548?text=You Moving In"
              alt="You Moving In Image"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Interesting Facts Section -->
  <section class="interesting-facts py-5">
    <div class="container">
      <h2 class="text-center mb-5 text-dark">Interesting Facts About Us</h2>
      <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center p-3 pt-4">
              <div class="icon mb-4 text-secondary">
                <i class="fa-solid fa-network-wired"></i>
              </div>
              <h5 class="mb-3">Over 1000 Projects Completed</h5>
              <p class="text-secondary">
                Our team has successfully completed over 1000 projects
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center p-3 pt-4">
              <div class="icon mb-4 text-secondary">
                <i class="fa-regular fa-building"></i>
              </div>
              <h5 class="mb-3">Lorem ipsum dolor sit amet.</h5>
              <p class="text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusantium, maxime.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center p-3 pt-4">
              <div class="icon mb-4 text-secondary">
                <i class="fa-solid fa-user-group"></i>
              </div>
              <h5 class="mb-3">Lorem ipsum dolor sit amet.</h5>
              <p class="text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusantium, maxime.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center p-3 pt-4">
              <div class="icon mb-4 text-secondary">
                <i class="fa-regular fa-handshake"></i>
              </div>
              <h5 class="mb-3">Lorem ipsum dolor sit amet.</h5>
              <p class="text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusantium, maxime.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- standing with -->
  <section
    id="standing-with"
    class="py-5"
    style="background-color: #f6f6f6"
  >
    <div class="container">
      <!-- heading -->
      <div class="mb-5">
        <h2 class="display-6 text-center">
          How we Are Standing Out From The Competition
        </h2>
        <p class="mt-3 text-secondary text-center">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla
          doloribus alias sunt, vel fugit vitae eos delectus reiciendis
          perspiciatis sed!
        </p>
        <hr class="w-50 mx-auto mb-xl-9 border-dark-subtle" />
      </div>

      <!-- services -->
      <div class="mt-5">
        <div class="table-responsive service-table shadow-none">
          <table class="table table-bordered shadow-none">
            <!-- Table Header -->
            <thead class="text-white shadow-none border-top-0">
              <tr>
                <th
                  scope="col"
                  class="bg-transparent border-0 shadow-none"
                ></th>

                <th scope="col" class="border-top border-success p-3">
                  <h5 class="text-dark fw-normal">Minimal Experience</h5>
                </th>
                <th
                  scope="col"
                  class="bg-transparent border-0 shadow-none p-3"
                >
                  <h5 class="text-dark fw-normal">Typical Experience</h5>
                </th>
              </tr>
            </thead>
            <!-- Table Body -->
            <tbody class="border">
              <tr class="align-middle">
                <th
                  class="text-start bg-transparent text-dark fw-semibold p-3 h-6"
                >
                  <h5>
                    <i
                      class="fa-solid fa-hand-holding-dollar"
                      style="color: #ffadad"
                    ></i>
                    Price
                  </h5>
                </th>
                <td class="p-3">
                  <p class="mb-1">
                    <i class="fa fa-check text-success"></i>
                    Transparent cost structure and material specification.
                  </p>
                  <p>
                    <i class="fa fa-check text-success"></i> Flexible budget
                    suggestions.
                  </p>
                </td>
                <td class="p-3">
                  <p>
                    <i class="fa fa-times text-danger"></i>
                    30-50% hike between first quote and final cos-
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- client opinion -->
  <section id="standing-with" class="py-5">
    <div class="container">
      <!-- heading -->
      <div class="mb-5">
        <h2 class="display-6 text-center">
          See What Our Clients Have to Say About Our Work
        </h2>
        <hr class="mt-3 w-50 mx-auto mb-xl-9 border-dark-subtle" />
      </div>

      <!-- opinions -->
      <div class="mt-5">
        <div class="row g-4">
          <!-- single opinion -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card p-0">
              <div class="p-0 card-body text-center">
                <!-- video -->
                <div class="position-relative">
                  <div class="video-wrapper">
                    <!-- Fallback Poster -->
                    <img
                      src="{{asset('video-poster.jpg')}}"
                      alt="Video Poster"
                      class="video-poster w-100"
                    />

                    <!-- Play Button -->
                    <div class="play-button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="70"
                        height="70"
                        fill="currentColor"
                        class="bi bi-play-circle-fill text-white"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M11.596 8.004L5.792 4.328a.5.5 0 0 0-.792.408v7.528a.5.5 0 0 0 .792.408l5.804-3.676a.5.5 0 0 0 0-.816z"
                        />
                      </svg>
                    </div>

                    <!-- Hidden YouTube Video Iframe -->
                    <iframe
                      class="embed-responsive-item w-100 d-none"
                      src="https://www.youtube.com/embed/0qmGsWIP_mQ?rel=0&showinfo=0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!-- content -->
                <div class="p-3 bg-white">
                  <p class="fw-normal text-secondary" style="font-size: .8rem;">
                    This is basic card with image on top, title, description
                    and button.This is basic card with image on top, title,
                    description and button.This is basic card with image on
                    top, title, description and button.
                  </p>
                  <h5 class="fw-normal">Lorem ipsum.</h5>
                  <h6 class="fw-normal" style="color: #ffadad">
                    Lorem, ipsum dolor.
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <!-- single opinion -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card p-0">
              <div class="p-0 card-body text-center">
                <!-- video -->
                <div class="position-relative">
                  <div class="video-wrapper">
                    <!-- Fallback Poster -->
                    <img
                      src="{{asset('video-poster.jpg')}}"
                      alt="Video Poster"
                      class="video-poster w-100"
                    />

                    <!-- Play Button -->
                    <div class="play-button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="70"
                        height="70"
                        fill="currentColor"
                        class="bi bi-play-circle-fill text-white"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M11.596 8.004L5.792 4.328a.5.5 0 0 0-.792.408v7.528a.5.5 0 0 0 .792.408l5.804-3.676a.5.5 0 0 0 0-.816z"
                        />
                      </svg>
                    </div>

                    <!-- Hidden YouTube Video Iframe -->
                    <iframe
                      class="embed-responsive-item w-100 d-none"
                      src="https://www.youtube.com/embed/0qmGsWIP_mQ?rel=0&showinfo=0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!-- content -->
                <div class="p-3 bg-white">
                  <p class="fw-normal text-secondary" style="font-size: .8rem;">
                    This is basic card with image on top, title, description
                    and button.This is basic card with image on top, title,
                    description and button.This is basic card with image on
                    top, title, description and button.
                  </p>
                  <h5 class="fw-normal">Lorem ipsum.</h5>
                  <h6 class="fw-normal" style="color: #ffadad">
                    Lorem, ipsum dolor.
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <!-- single opinion -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card p-0">
              <div class="p-0 card-body text-center">
                <!-- video -->
                <div class="position-relative">
                  <div class="video-wrapper">
                    <!-- Fallback Poster -->
                    <img
                      src="{{asset('video-poster.jpg')}}"
                      alt="Video Poster"
                      class="video-poster w-100"
                    />

                    <!-- Play Button -->
                    <div class="play-button">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="70"
                        height="70"
                        fill="currentColor"
                        class="bi bi-play-circle-fill text-white"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M11.596 8.004L5.792 4.328a.5.5 0 0 0-.792.408v7.528a.5.5 0 0 0 .792.408l5.804-3.676a.5.5 0 0 0 0-.816z"
                        />
                      </svg>
                    </div>

                    <!-- Hidden YouTube Video Iframe -->
                    <iframe
                      class="embed-responsive-item w-100 d-none"
                      src="https://www.youtube.com/embed/0qmGsWIP_mQ?rel=0&showinfo=0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!-- content -->
                <div class="p-3 bg-white">
                  <p class="fw-normal text-secondary" style="font-size: .8rem;">
                    This is basic card with image on top, title, description
                    and button.This is basic card with image on top, title,
                    description and button.This is basic card with image on
                    top, title, description and button.
                  </p>
                  <h5 class="fw-normal">Lorem ipsum.</h5>
                  <h6 class="fw-normal" style="color: #ffadad">
                    Lorem, ipsum dolor.
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Service 2 - Bootstrap Brain Component -->
{{-- <section class="py-4 py-xl-8" style="margin-top: 90px;">
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
            <h4 class="mb-3">Commercial Design</h4>
            <p class="mb-3 text-secondary">We can help you to create a visually appealing website. We take into account your brand identity and target audience when designing your website.</p>
            <div>
              <a href="#!" class="fw-bold text-decoration-none link-primary">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="col-10 col-md-5 col-xl-4 overflow-hidden text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-credit-card-2-front text-primary mb-3" viewBox="0 0 16 16">
              <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
              <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
            </svg>
            <h4 class="mb-3">Architectural Design</h4>
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

  </section> --}}




{{-- <section class="interesting-facts py-5" style="background-color: white;">
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
</section> --}}

{{-- <style>
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

</style> --}}

@endsection
