<section class="slider mt-4">
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">

            @foreach ($latestBlog as $blog)
            <div class="slider-item">
                <div class="slider-item-content">
                    <div class="post-thumb mb-4">
                        <a href="blog-single.html">
                            <img src="{{ url('/uploads/'.$blog->thumbnail) }}" alt="" class="img-fluid">
                        </a>
                    </div>

                    <div class="slider-post-content">
                        <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
                        <h3 class="post-title mt-1"><a href="blog-single.html">Tips for Taking a Long-term Trip</a></h3>
                        <span class=" text-muted  text-capitalize">January 2, 2019</span>
                    </div>
                </div>
            </div>
            @endforeach




            </div>
		</div>
	</div>
</section>

<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">

                    @foreach ($blogs as $blog)


	<div class="col-lg-3 col-md-6">
		<article class="post-grid mb-5">
			<a class="post-thumb mb-4 d-block" href="blog-single.html">
				<img src="{{ url('/uploads/'.$blog->thumbnail) }}" alt="" class="img-fluid w-100">
			</a>
			<span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $blog->Category->type_name }}</span>
			<h3 class="post-title mt-1"><a href="blog-single.html">{{ $blog->title }}</a></h3>

			<span class="text-muted letter-spacing text-uppercase font-sm"><?= $blog->created_at->format('Y-M-d') ?>
            </span>

		</article>
	</div>

                     @endforeach

</div>
			</div>

			<div class="m-auto">
                {{ $blogs->links() }}
            </div>
		</div>
	</div>
</section>

