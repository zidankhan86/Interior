<div class="sidebar-widget mb-5">
    <h4 class="text-center widget-title">Trending Posts</h4>

    @foreach ($trendingBlogs as $key => $trendingBlog)
        @if ($key === 0)
            <div class="sidebar-post-item-big">
                <a href="{{ route('blog.view',$trendingBlog->id) }}">
                    <img src="{{ url('/uploads/',$trendingBlog->thumbnail) }}" alt="" class="img-fluid">
                </a>
                <div class="mt-3 media-body">
                    <span class="text-muted letter-spacing text-uppercase font-sm">
                        {{ $trendingBlog->created_at->format('F d, Y') }}
                    </span>
                    <h4><p>
                        {{ $trendingBlog->title }}
                    </p></h4>
                </div>
            </div>
        @else
            <div class="media border-bottom py-3 sidebar-post-item">
                <a href="{{ route('blog.view',$trendingBlog->id) }}">
                    <img class="mr-4" src="{{ url('/uploads/',$trendingBlog->thumbnail) }}" alt="">
                </a>
                <div class="media-body">
                    <span class="text-muted letter-spacing text-uppercase font-sm">
                        {{ $trendingBlog->created_at->format('F d, Y') }}
                    </span>
                    <h4><p >
                        {{ $trendingBlog->title }}
                    </p></h4>
                </div>
            </div>
        @endif
    @endforeach
</div>

{{-- <div class="sidebar-widget mb-5">
    <h4 class="text-center widget-title">Trending Posts</h4>

    @foreach ($trendingBlogs as $trendingBlog)
        <div class="sidebar-post-item-big">
            <a href=""><img src="{{ url('/uploads/',$trendingBlog->thumbnail) }}" alt="" class="img-fluid"></a>
            <div class="mt-3 media-body">
                <span class="text-muted letter-spacing text-uppercase font-sm">{{ $trendingBlog->created_at->format('F d, Y') }}</span>
                <h4><a href="">{{ $trendingBlog->title }}</a></h4>
            </div>
        </div>
    @endforeach
</div> --}}

