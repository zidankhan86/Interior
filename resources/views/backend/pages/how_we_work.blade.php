@extends('frontend.layout.app')
@section('content')
<!-- main content -->
<main>
    <!-- Generic Hero -->
    <section id="generic-hero" class="py-5">
      <div class="container overflow-hidden">
        <div class="" style="max-width: 1000px">
          <h2 class="display-3 fw-bold mb-3">
            A Hassle-Free
            <br />
            Design to Installation Journey
          </h2>
          <p class="fs-4 mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
            voluptatibus quos perferendis rerum maxime rem dicta
            exercitationem, voluptas qui illo at! Reprehenderit adipisci
            cumque iure sequi, ipsam et totam ea!
          </p>
          <a
            href="{{route('contact')}}"
            class="brand-btn btn btn-outline-light px-4 py-2"
            >Contact Us</a
          >
        </div>
      </div>
    </section>

    <!--  design steps -->
    <section class="py-5">
      <div class="container pt-0 pb-0 pt-lg-4 pb-lg-5">
        <!-- heading -->
        <div class="mb-5">
          <h2 class="display-6 text-center">
            Your Desired Interior
            <br />
            in 5 Simple Steps
          </h2>
          <p class="mt-3 text-secondary text-center">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Excepturi corporis suscipit delectus ratione eius hic illum qui
            harum?
          </p>
          <hr class="w-50 mx-auto mb-xl-9 border-dark-subtle" />
        </div>

        <!-- design steps slider -->
        <div class="swiper design-steps-slider">
          <div class="swiper-wrapper">
            <!-- single slide -->
            <div class="swiper-slide" style="max-width: 220px">
              <div class="text-center p-3 border rounded-3 shadow-sm">
                <!-- icon -->
                <div class="fs-1" style="color: #555">
                  <i class="fa-regular fa-handshake"></i>
                </div>
                <p>Meet and Greet</p>
              </div>
            </div>
            <!-- single slide -->
            <div class="swiper-slide" style="max-width: 220px">
              <div class="text-center p-3 border rounded-3 shadow-sm">
                <!-- icon -->
                <div class="fs-1" style="color: #555">
                  <i class="fa-solid fa-swatchbook"></i>
                </div>
                <p>Design Development</p>
              </div>
            </div>
            <!-- single slide -->
            <div
              class="swiper-slide"
              style="max-width: 220px"
              style="width: 200px"
            >
              <div class="text-center p-3 border rounded-3 shadow-sm">
                <!-- icon -->
                <div class="fs-1" style="color: #555">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <p>Place Order</p>
              </div>
            </div>
            <!-- single slide -->
            <div
              class="swiper-slide"
              style="max-width: 220px"
              style="width: 200px"
            >
              <div class="text-center p-3 border rounded-3 shadow-sm">
                <!-- icon -->
                <div class="fs-1" style="color: #555">
                  <i class="fa-brands fa-instalod"></i>
                </div>
                <p>Installation Process</p>
              </div>
            </div>
            <!-- single slide -->
            <div
              class="swiper-slide"
              style="max-width: 220px"
              style="width: 200px"
            >
              <div class="text-center p-3 border rounded-3 shadow-sm">
                <!-- icon -->
                <div class="fs-1" style="color: #555">
                  <i class="fa-solid fa-wine-glass"></i>
                </div>
                <p>Moving In</p>
              </div>
            </div>
          </div>
          <div
            class="mt-4 swiper-pagination"
            style="position: relative"
          ></div>
        </div>
      </div>
    </section>
    <!-- section design steps end-->

    <!-- working process detail section -->
    <section class="py-5" style="background-color: #f6f6f6">
      <div class="container">
        <!-- all processes -->
        <div>
          <!-- single process -->
          <div
            class="row align-items-center gx-5 mx-auto mt-5 mb-5"
            style="max-width: 950px"
          >
            <!--  process image -->
            <div class="col-12 col-md-6 col-lg-5">
              <img class="img-fluid" src="{{asset('/img/process.jpg')}}" alt="" />
            </div>
            <!--  process content -->
            <div class="col-12 col-md-6 col-lg-7">
              <!-- content wraper -->
              <h4>Lorem, ipsum dolor.</h4>
              <div class="brand-text">
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
                <hr class="my-4" />
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- single process -->
          <div
            class="row align-items-center gx-5 mx-auto mt-5 mb-5"
            style="max-width: 950px"
          >
            <!--  process image -->
            <div class="col-12 col-md-6 col-lg-5">
              <img class="img-fluid" src="{{asset('/img/process.jpg')}}" alt="" />
            </div>
            <!--  process content -->
            <div class="col-12 col-md-6 col-lg-7">
              <!-- content wraper -->
              <h4>Lorem, ipsum dolor.</h4>
              <div class="brand-text">
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
                <hr class="my-4" />
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- single process -->
          <div
            class="row align-items-center gx-5 mx-auto mt-5 mb-5"
            style="max-width: 950px"
          >
            <!--  process image -->
            <div class="col-12 col-md-6 col-lg-5">
              <img class="img-fluid" src="{{asset('/img/process.jpg')}}" alt="" />
            </div>
            <!--  process content -->
            <div class="col-12 col-md-6 col-lg-7">
              <!-- content wraper -->
              <h4>Lorem, ipsum dolor.</h4>
              <div class="brand-text">
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
                <hr class="my-4" />
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- single process -->
          <div
            class="row align-items-center gx-5 mx-auto mt-5 mb-5"
            style="max-width: 950px"
          >
            <!--  process image -->
            <div class="col-12 col-md-6 col-lg-5">
              <img class="img-fluid" src="{{asset('/img/process.jpg')}}" alt="" />
            </div>
            <!--  process content -->
            <div class="col-12 col-md-6 col-lg-7">
              <!-- content wraper -->
              <h4>Lorem, ipsum dolor.</h4>
              <div class="brand-text">
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
                <hr class="my-4" />
                <div>
                  <h6>Lorem, ipsum dolor.</h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat in sunt omnis minus porro debitis quae
                    praesentium! Unde, placeat impedit.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  team  -->
    <section class="py-5">
      <div class="container pt-0 pb-0 pt-lg-4 pb-lg-5">
        <!-- heading -->
        <div class="mb-5">
          <h2 class="display-6 text-center">The Team</h2>
          <p class="mt-3 text-secondary text-center">
            Get to know the people who will assist you throughout your
            journey.
          </p>
          <hr class="w-50 mx-auto mb-xl-9 border-dark-subtle" />
        </div>

        <div
          class="d-flex flex-wrap g-4 justify-content-center align-items-start"
        >
          <!-- Single Card -->
          <div class="text-center mx-3" style="max-width: 350px">
            <img
              class="mb-3"
              src="{{asset('/img/people.png')}}"
              alt="Design Lead"
              width="150px"
            />
            <h6 class="">The Design Lead (DL)</h6>
            <p class="text-secondary fw-light">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Nostrum repudiandae ad quam quidem esse aliquid enim consectetur
              rerum! Modi saepe
            </p>
          </div>
          <!-- Single Card -->
          <div class="text-center mx-3" style="max-width: 350px">
            <img
              class="mb-3"
              src="{{asset('/img/people.png')}}"
              alt="Design Lead"
              width="150px"
            />
            <h6 class="">The Design Lead (DL)</h6>
            <p class="text-secondary fw-light">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Nostrum repudiandae ad quam quidem esse aliquid enim consectetur
              rerum! Modi saepe
            </p>
          </div>
          <!-- Single Card -->
          <div class="text-center mx-3" style="max-width: 350px">
            <img
              class="mb-3"
              src="{{asset('/img/people.png')}}"
              alt="Design Lead"
              width="150px"
            />
            <h6 class="">The Design Lead (DL)</h6>
            <p class="text-secondary fw-light">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Nostrum repudiandae ad quam quidem esse aliquid enim consectetur
              rerum! Modi saepe
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- section team  end-->

    <!-- contact section  -->
    <section class="py-5" style="background-color: #f6f6f6">
      <div class="container py-5">
        <div class="row shadow-lg rounded-3 overflow-hidden">
          <!-- Image Section -->
          <div class="col-12 col-md-6 p-0">
            <img
              src="{{asset('/img/hero-bg.webp')}}"
              class="h-100 w-100 rounded-start"
              alt="Contact Us"
              style="object-fit: cover; object-position: center"
            />
          </div>
          <!-- Form Section -->
          <div class="col-md-6 bg-white px-4 py-5">
            <div class="text-center">
              <h2 class="mb-3 fw-normal">Design For Every Budget</h2>
              <p class="text-secondary mb-5">
                Get one step closer towards your dream home, Let our experts
                help you.
              </p>
              <form action="{{route('contact.store')}}" class="text-start mx-auto" style="max-width: 90%" method="POST">
                @csrf
                <!-- Name Input -->
                <div class="mb-3">
                  <label for="name" name="name" class="form-label">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter your name"
                    required
                  />
                </div>
                <!-- Email Input -->
                <div class="mb-3">
                  <label for="email" name="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Enter your email"
                    required
                  />
                </div>
                <!-- Phone Number Input -->
                <div class="mb-3">
                  <label for="phone" name="phone" class="form-label">Phone Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    placeholder="Enter your phone number"
                  />
                </div>
                <!-- Property Name Input -->
                <div class="mb-3">
                  <label for="property" class="form-label"
                    >Property Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="property"
                    placeholder="Enter the property name" name="message"
                  />
                </div>
                <!-- Note -->
                <p class="text-muted mb-4">
                  * Please double-check your information before submitting the
                  form.
                </p>
                <!-- Submit Button -->
                <button type="submit" class="w-100 btn brand-btn px-4">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
