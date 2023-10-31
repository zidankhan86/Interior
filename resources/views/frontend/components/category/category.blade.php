<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                   <h2 class="lg-title">Travel</h2>
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

	<div class="sidebar-widget mb-5 ">
		<h4 class="text-center widget-title">Trending Posts</h4>

		<div class="sidebar-post-item-big">
			<a href="blog-single.html"><img src="frontend/images/news/img-1.jpg" alt="" class="img-fluid"></a>
			<div class="mt-3 media-body">
            	<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
				<h4 ><a href="blog-single.html">Meeting With Clarissa, Founder Of Purple Conversation App</a></h4>
			</div>
		</div>

        <div class="media border-bottom py-3 sidebar-post-item">
            <a href="#"><img class="mr-4" src="frontend/images/news/thumb-1.jpg" alt=""></a>
            <div class="media-body">
            	<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                <h4 ><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
            </div>
        </div>

        <div class="media py-3 sidebar-post-item">
            <a href="#"><img class="mr-4" src="frontend/images/news/thumb-2.jpg" alt=""></a>
           <div class="media-body">
           		<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                <h4 ><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
            </div>
        </div>
	</div>


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
