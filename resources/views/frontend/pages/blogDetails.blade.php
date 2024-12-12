@extends('frontend.layout.app')

@section('content')


<section class="single-block-wrapper section-padding" style="padding-top: 100px; padding-bottom: 50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Dynamic Blog Post -->
                <div class="single-post">
                    <div class="post-header mb-5 text-center">
                        <h2 class="post-title">{{ $blogDetails->title }}</h2>
                        <div class="post-meta">
                            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by {{ $blogDetails->user->name }}</span>
                            <span class="text-uppercase font-sm letter-spacing-1">{{ $blogDetails->created_at->format('Y-M-d') }}</span>
                        </div>
                        <div class="post-featured-image mt-5">
                            <img src="{{ url('/uploads/' . $blogDetails->thumbnail) }}" class="img-fluid w-100" alt="featured-image">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="entry-content">
                            <p>{!! $blogDetails->description !!}</p>

                            <div class="row">
                                @foreach (unserialize($blogDetails->post_image) as $image)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="image-container">
                                            <img src="{{ url('/uploads/' . $image) }}" alt="post-ads" class="img-fluid mr-4 w-100">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <p>{!! $blogDetails->post_description !!}</p>
                        </div>



                    </div>
                </div>

                <!-- Related Posts -->
                <div class="related-posts-block mt-5">
                    <h3 class="news-title mb-4 text-center">You May Also Like</h3>
                    <div class="row">
                        @foreach ($youMayLike as $relatedPost)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post-block-wrapper mb-4 mb-lg-0">
                                    <a href="{{ route('blog.view', $relatedPost->id) }}">
                                        <img class="img-fluid" src="{{ asset('/uploads/' . $relatedPost->thumbnail) }}" alt="post-thumbnail">
                                    </a>
                                    <div class="post-content mt-3">
                                        <h5>
                                            <a href="{{ route('blog.view', $relatedPost->id) }}">{{ $relatedPost->title }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-box">
                    <form action="{{ route('blog.search') }}" method="GET" class="search-form">
                        <div class="input-group">
                            <input
                                type="text"
                                name="search_key"
                                class="form-control"
                                placeholder="Type a keyword and hit enter"
                                value="{{ request('search_key') }}">
                            <button type="submit">
                                <i class="icon icon-search"></i>
                            </button>
                        </div>
                    </form>


                </div>
                <div class="sidebar-box">
                    <h3>Popular Articles</h3>
                    @foreach ($youMayLike as $relatedPost)


                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{ asset('/uploads/' . $relatedPost->thumbnail) }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('blog.view', $relatedPost->id) }}">{{ $relatedPost->title }}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> {{ $relatedPost->created_at->format('Y-M-d') }}</a></div>
                                <div><a href="#"><span class="icon-person"></span> {{ $relatedPost->user->name }}</a></div>

                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
