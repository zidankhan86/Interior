<section id="generic-hero" class="py-5">
    <div class="container overflow-hidden">
      <div class="" style="max-width: 1000px">
        <h2 class="display-3 fw-bold mb-3">

          Contact US
        </h2>
        <p class="fs-4 mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
          voluptatibus quos perferendis rerum maxime rem dicta
          exercitationem, voluptas qui illo at! Reprehenderit adipisci
          cumque iure sequi, ipsam et totam ea!
        </p>
        <a
          href="{{route('portfolio.page')}}"
          class="brand-btn btn btn-outline-light px-4 py-2"
          >See More</a
        >
      </div>
    </div>
  </section>

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
                <label for="name"  class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name" name="name"
                  placeholder="Enter your name"
                  required
                />
              </div>
              <!-- Email Input -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter your email" name="email"
                  required
                />
              </div>
              <!-- Phone Number Input -->
              <div class="mb-3">
                <label for="phone"  class="form-label">Phone Number</label>
                <input
                  type="tel"
                  class="form-control"
                  id="phone" name="phone"
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
