<script src="{{asset ('frontend/js/jquery.min.js') }}"></script>
  <script src="{{asset ('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{asset ('frontend/js/popper.min.js') }}"></script>
  <script src="{{asset ('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{asset ('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{asset ('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{asset ('frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{asset ('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{asset ('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{asset ('frontend/js/aos.js') }}"></script>
  <script src="{{asset ('frontend/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{asset ('frontend/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{asset ('frontend/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{asset ('frontend/js/scrollax.min.js') }}"></script>
  <script src="{{asset ('frontend/js/google-map.js') }}"></script>
  <script src="{{asset ('frontend/js/main.js') }}"></script>
 <!-- bootstrap js cdn link (bootstrap@5.3.3) -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <!-- swiper js for slider cdn link (swiper@11) -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <style>
    .navbar-nav .nav-link {
  color: #333 !important;
}

.navbar-nav .btn {
  color: rgb(235, 225, 225);
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

<script>
    // Toggle navbar on scroll
document.addEventListener("scroll", function () {
  const navbar = document.getElementById("ftco-navbar");
  if (window.scrollY > 250) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// Listen for click events on the navbar toggler button
document
  .querySelector(".navbar-toggler")
  .addEventListener("click", function () {
    const navbar = document.getElementById("ftco-navbar");

    // Toggle the class 'navbar-open' when the navbar is toggled
    navbar.classList.toggle("navbar-open");
  });

// Initialize Swiper for the hero slider
document.addEventListener("DOMContentLoaded", () => {
  const swiper = new Swiper(".hero-slider", {
    simulateTouch: true, // Enable touch interactions
    loop: true, // Infinite loop
    autoplay: {
      delay: 3000, // Auto slide every 5 seconds
    },
    effect: "fade", // Optional: Adds a fade transition
  });
});





// Play video on click
document.querySelector("#video-section .video-wrapper")?.addEventListener("click", function () {
  const iframe = this.querySelector("iframe");
  const poster = this.querySelector(".video-poster");

  // Show the iframe and autoplay the video
  iframe.classList.remove("d-none");
  iframe.src += "&autoplay=1";

  // Hide the poster and play button
  poster.style.display = "none";
  this.querySelector(".play-button").style.display = "none";
});



// for hover active tabs on desktop and click on mobile
document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth >= 768) {
    const tabTriggers = document.querySelectorAll('.brand-tabs .nav-link');

    tabTriggers?.forEach((tab) => {
      tab.addEventListener('mouseenter', (event) => {
        const targetId = tab.getAttribute('data-bs-target');
        const tabContent = document.querySelector(targetId);

        // Remove active classes from all tabs and panes
        document.querySelectorAll('.nav-tabs .nav-link').forEach((t) => t.classList.remove('active'));
        document.querySelectorAll('.tab-pane').forEach((pane) => pane.classList.remove('show', 'active'));

        // Add active class to the hovered tab and its content
        tab.classList.add('active');
        tabContent.classList.add('show', 'active');
      });
    });
  }
});




// design steps slider
var swiper = new Swiper(".design-steps-slider", {
  slidesPerView: "auto",
  spaceBetween: 30,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
</script>
