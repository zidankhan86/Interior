

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
  <div class="col-md-7 heading-section ftco-animate">
	<h2 class="mb-4"> Blog</h2>
	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
  </div>
</div>	
		<div class="row">

			@foreach ($blogs as $blog)	
  <div class="col-md-4 ftco-animate">
	<div class="blog-entry">
		<a href="{{ route('blog.view', $blog->id) }}" class="block-20" style="background-image: url('{{ asset('uploads/' . $blog->thumbnail) }}');">
		</a>
	
	  <div class="text d-flex py-4">
		<div class="meta mb-3">
		  <div><a href="#">{{ $blog->created_at->format('Y-M-d') }}</a></div>
		  <div><a href="#">Admin</a></div>
		  
		</div>
		<div class="desc pl-3">
			<h3 class="heading"><a href="{{ route('blog.view',$blog->id) }}">{{ $blog->title }}</a></h3>
		  </div>
	  </div>
	</div>
  </div>
  
  			@endforeach
</div>

{{ $blogs->links() }}
	</div>
</section>