<section class="footer-2 section-padding gray-bg pb-5">
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
</section>
