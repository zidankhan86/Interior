<style>
    .image-container {
    margin-bottom: 20px;
}
</style>

<section class="single-block-wrapper section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="single-post">
    <div class="post-header mb-5 text-center">
        <div class="meta-cat">
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">{{ $blogDetails->Category->type_name }}</a>

        </div>
        <h2 class="post-title mt-2">
            {{ $blogDetails->title }}
        </h2>

        <div class="post-meta">
            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by {{ $blogDetails->user->name }}</span>
            <span class="text-uppercase font-sm letter-spacing-1">{{ $blogDetails->created_at->format('Y-M-d') }}</span>
        </div>
        <div class="post-featured-image mt-5">
            <img src="{{ url('/uploads/'.$blogDetails->thumbnail) }}" class="img-fluid w-100" alt="featured-image">
        </div>
    </div>
    <div class="post-body">
        <div class="entry-content">
            <p> {!! $blogDetails->description !!} </p>


            <div class="row">

                <div class="row">
                    @foreach (unserialize($blogDetails->post_image) as $image)
                        <div class="col-lg-6 col-md-6">
                            <div class="image-container">
                                <img src="{{ url('/uploads/' . $image) }}" alt="post-ads" class="img-fluid mr-4 w-100">
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>



            <p> {!! $blogDetails->post_description !!} </p>


        </div>

           {{-- Hash Tag --}}
          @include('frontend\components\blog\hashTag')


        <div class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

            <span class="single-comment-o"><i class="fa fa-comment-o"></i><h3 class="mb-4 text-center">
                @if ($totalComment > 0)
                    {{ $totalComment }} Comments
                @else
                    0 Comments
                @endif
            </h3></span>


            {{-- Like --}}
            @include('frontend.components.blog.like')


            <div class="list-posts-share">
                <a href="{{ route('social-media-share',$blogDetails->id) }}">Share</a>
            </div>
        </div>
    </div>
</div>

	<div class="post-author d-flex my-5">

                    <div class="author-img">
		<img alt="" src="frontend/images/author.jpg" class="avatar avatar-100 photo" width="100" height="100">
	</div>

	<div class="author-content pl-4">
		<h4 class="mb-3"><a href="#" title="" rel="author" class="text-capitalize">Themefisher</a></h4>
		<p>Hey there. My name is Liam. I was born with the love for traveling. I also love taking photos with my phone in order to capture moment..</p>

		<a target="_blank" class="author-social" href="#"><i class="ti-facebook"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-twitter"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-google-plus"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-instagram"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-pinterest"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-tumblr"></i></a>
	</div>


</div>



        <nav class="post-pagination clearfix border-top border-bottom py-4">
            @if ($previous)
                <div class="prev-post">
                    <a href="{{ route('blog.view', ['id' => $previous->id]) }}">
                        <span class="text-uppercase font-sm letter-spacing">Previous</span>
                        <h4 class="mt-3">{{ $previous->title }}</h4>
                    </a>
                </div>
            @endif

            @if ($next)
                <div class="next-post">
                    <a href="{{ route('blog.view', ['id' => $next->id]) }}">
                        <span class="text-uppercase font-sm letter-spacing">Next</span>
                        <h4 class="mt-3">{{ $next->title }}</h4>
                    </a>
                </div>
            @endif
        </nav>

	


   <div class="comment-area my-5">

    <h3 class="mb-4 text-center">
        @if ($totalComment > 0)
            {{ $totalComment }} Comments
        @else
            0 Comments
        @endif
    </h3>


    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="blog_id" value="{{ $blogDetails->id }}">
        <div class="form-group">
            <label for="content">Comment</label>
            <textarea name="content" id="content" rows="4" class="form-control" placeholder="Write Comment .."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Comment</button>
    </form> <br>

    @if ($comments->count() > 0)
        @foreach ($comments as $comment)
        <div class="comment-area-box media">
            <img alt="" height="50" width="50" src="{{ url('/uploads/', auth()->user()->image) }}" class="img-fluid float-left mr-3 mt-2">
            <div class="media-body ml-4">
                <h4 class="mb-0">{{ $comment->user->name }}</h4>
                <span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>{{ $comment->created_at->format('F j, Y') }}</span>
                <div class="comment-content mt-3">
                    <p>{{ $comment->content }}</p>
                </div>
                <div class="comment-meta mt-4 mt-lg-0 mt-md-0">
                    {{-- <a href="{{ route('reply',$comment->id) }}" class="text-underline reply-link" data-comment-id="{{ $comment->id }}">Reply</a> --}}
                </div>
            </div>
        </div>



        @endforeach
    @else
        <p>No comments yet.</p>
    @endif
{{ $comments->links() }}




	</div>
    <div class="related-posts-block mt-5">
        <h3 class="news-title mb-4 text-center">
           You May Also Like
        </h3>
        <div class="row">
    
            @foreach ($youMayLike as $relatedPost)
    
    
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="post-block-wrapper mb-4 mb-lg-0">
                    <a href="{{ route('blog.view',$relatedPost->id) }}">
                        <img class="img-fluid" src="{{ asset('/uploads/' . $relatedPost->thumbnail) }}" alt="post-thumbnail">
                    </a>
                    <div class="post-content mt-3">
                        <h5 >
                            <a href="{{ route('blog.view',$relatedPost->id) }}">{{ $relatedPost->title }}</a>
                        </h5>
                    </div>
                </div>
            </div>
    
    
            @endforeach
    
    
        </div>
    </div>


        {{-- Leave Comment --}}
        @include('frontend.components.blog.leaveComment')




			</div>
		</div>
	</div>
</section>
