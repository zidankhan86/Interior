<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
				@php
					$about = App\Models\About::first();
				@endphp
@if ($about)
                <div class="text-center">
                   <h2 class="lg-title">{{ $about->title }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="pt-5 padding-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="row">
    <div class="col-lg-12">
        <img src="{{ url('/uploads/'.$about->thumbnail) }}" alt="" class="img-fluid w-100">
    </div>
</div>

<div class="row justify-content-center mt-5">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-4">
				<h5 class="text-uppercase letter-spacing mb-4">Who is me?</h5>
				<p>{!! $about->description !!}</p>

			</div>
			<div class="col-lg-4">
				<h5 class="text-uppercase letter-spacing mb-4">My vission</h5>
				<p>{!! $about->post_description !!}</p>
			</div>
			<div class="col-lg-4">
				<h5 class="text-uppercase letter-spacing mb-4">Follow Me :</h5>
				<div class="follow-socials">
					<a href="#" class="fb"><i class="ti-facebook"></i></a>
					<a href="#" class="twt"><i class="ti-twitter"></i></a>
					<a href="#" class="inst"><i class="ti-instagram"></i></a>
					<a href="#" class="youtube"><i class="ti-youtube"></i></a>
					<a href="#" class="pint"><i class="ti-pinterest"></i></a>
				</div>
			</div>
		</div>

		

		<div class="row">
			@foreach (unserialize($about->post_image) as $image)
			<div class="col-lg-3 col-md-6">
				<div class="about-widget mb-4 mb-lg-0">
					<img src="{{ url('/uploads/' . $image) }}" alt="Photos" class="img-fluid">
					{{-- <h4 class="mt-3">Hill ward</h4> --}}
				</div>
			</div>
			@endforeach
		</div>


	</div>
</div>
			</div>
		</div>
		
		@else
		<p>No Data</p>
		@endif
	</div>
</section>
