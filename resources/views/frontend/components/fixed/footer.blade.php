{{-- <section class="footer-2 section-padding gray-bg pb-5">
	<div class="container">
		<div class="row justify-content-center">
            <div class="form-group mb-0">
                <h2 class="mb-3">Subscribe Newsletter</h2>
                <p class="mb-4">Subscribe to our newsletter for new blog posts, tips, and info.</p>
                <form method="POST" action="{{ route('subscribe') }}">
                    @csrf
                    <div class="form-group form-row align-items-center mb-0">
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-dark">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>

	    </div>

		<div class="footer-btm mt-5 pt-4 border-top">
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-inline footer-socials-2 text-center">
		              <li class="list-inline-item"><a href="#">Privacy policy</a></li>
		              <li class="list-inline-item"><a href="#">Support</a></li>
		              <li class="list-inline-item"><a href="#">About</a></li>
		              <li class="list-inline-item"><a href="#">Contact</a></li>
		              <li class="list-inline-item"><a href="#">Terms</a></li>
		              <li class="list-inline-item"><a href="#">Category</a></li>
		            </ul>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="copyright text-center ">
						@ copyright all reserved to {{ config('app.name') }}</a>-{{ date('Y') }}
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}


<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
	  <div class="row mb-5">
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			<h2 class="ftco-heading-2">Innards Design Studio</h2>
			<p>CONSULTANCY, INTERIOR AND DECORATION.</p>
			<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
			  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			  <li class="ftco-animate"><a href="https://www.facebook.com/innardsdesignstudio"><span class="icon-facebook"></span></a></li>
			  <li class="ftco-animate"><a href="https://www.instagram.com/innards_design_studio?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><span class="icon-instagram"></span></a></li>
			</ul>
		  </div>
		</div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4 ml-md-4">
			<h2 class="ftco-heading-2">Links</h2>
			<ul class="list-unstyled">
			  <li><a href="
				{{ route('home') }}">Home</a></li>
			  <li><a href="{{ route('about') }}">About</a></li>
			  <li><a href="{{ route('services') }}">Services</a></li>
			  <li><a href="{{ route('blog') }}">Blog</a></li>
			  <li><a href="{{ route('contact') }}">Contact</a></li>
			</ul>
		  </div>
		</div>
		<div class="col-md">
		   <div class="ftco-footer-widget mb-4">
			<h2 class="ftco-heading-2">Services</h2>
			<ul class="list-unstyled">
			  <li><a href="#">Commercial Interior</a></li>
			  <li><a href="#">Residential Interior</a></li>
			  <li><a href="{{ route('architect') }}">Architectural Interior</a></li>
		
			</ul>
		  </div>
		</div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			  <h2 class="ftco-heading-2">Have a Questions?</h2>
			  <div class="block-23 mb-3">
				<ul>
				  <li><span class="icon icon-map-marker"></span><span class="text">road:23, sector:10, Dhaka, Bangladesh</span></li>
				  <li><a href="#"><span class="icon icon-phone"></span><span class="text">01768-810999</span></a></li>
				  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">innards.ds@gmail.com</span></a></li>
				</ul>
			  </div>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-md-12 text-center">

		  <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Innards Design Studio</a>
</p>
		</div>
	  </div>
	</div>
  </footer>