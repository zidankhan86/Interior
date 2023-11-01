<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                   <h2 class="lg-title">{{ $categoryWiseBlog->type_name }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="row">

                    @if ($blogs->count() > 0)

                    @foreach ($blogs as $blog)
                    <div class="col-lg-6 col-md-6">
                        <article class="post-grid mb-5">
                            <div class="post-thumb mb-4">
                                <img src="{{ url('/uploads/'.$blog->thumbnail) }}" alt="" class="img-fluid w-100">
                            </div>
                            <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $blog->Category->type_name }}</span>
                            <h3 class="post-title mt-1"><a href="{{ route('blog.view',$blog->id) }}">{{ $blog->title }}</a></h3>

                            <span class=" text-muted  text-capitalize">{{ $blog->created_at->format('Y-M-d') }}</span>

                        </article>
                    </div>

                    @endforeach
                    @else
                    <p>No Blog in this category.</p>
                @endif
            </div>

                     {{-- paginate --}}
					{{ $blogs->links() }}

			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="sidebar sidebar-right">
					<div class="sidebar-wrap mt-5 mt-lg-0">
	<div class="sidebar-widget about mb-5 text-center p-3">
		<div class="about-author">
			<img src="{{ url('/uploads/',auth()->user()->image) }}" alt="" class="img-fluid">
		</div>
		<h4 class="mb-0 mt-4">{{ auth()->user()->name }}</h4>
		<p>{{ auth()->user()->role }}</p>
		<p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my journey on this blog!</p>
		<img src="frontend/images/liammason.png" alt="" class="img-fluid">
	</div>

	<div class="sidebar-widget follow mb-5 text-center">
		<h4 class="text-center widget-title">Follow Me</h4>
		<div class="follow-socials">
			<a href="#"><i class="ti-facebook"></i></a>
			<a href="#" ><i class="ti-twitter"></i></a>
			<a href="#" ><i class="ti-instagram"></i></a>
			<a href="#"><i class="ti-youtube"></i></a>
			<a href="#"><i class="ti-pinterest"></i></a>
		</div>
	</div>



        {{-- trendig Blog --}}
	@include('frontend\components\blog\trendingBlog')


	<div class="sidebar-widget category mb-5">
        <h4 class="text-center widget-title">Categories</h4>
        <ul class="list-unstyled">
            @foreach ($categories as $category)
                <li class="align-items-center d-flex justify-content-between">
                    <p >
                        {{ $category->type_name }}
                    </p>
                    <span>{{ $category->blogs_count }}</span>
                </li>
            @endforeach
        </ul>
    </div>


	<div class="sidebar-widget subscribe mb-5">
		<h4 class="text-center widget-title">Newsletter</h4>
		<input type="text" class="form-control" placeholder="Email Address">
		<a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
	</div>

	<div class="sidebar-widget sidebar-adv mb-5">
		<a href="#"><img src="frontend/images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
	</div>

</div>
				</div>
			</div>
		</div>
	</div>
</section>
