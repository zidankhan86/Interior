
<div class="post-share">
    @auth
        @if ($blogDetails->isLikedBy(auth()->user()))
            <form action="{{ route('blog.like', $blogDetails->id) }}" method="POST">
                @csrf
                <div class="row align-items-center">
                    <div class="col">
                        <button type="submit" class="penci-post-like single-like-button">
                            <i class="ti-heart"></i>
                        </button>
                    </div>
                    <div class="col">
                        <span class="count-number-like">{{ $blogDetails->likes()->count() }}</span>
                    </div>
                </div>
            </form>
        @else
            <form action="{{ route('blog.like', $blogDetails->id) }}" method="POST">
                @csrf
                <div class="row align-items-center">
                    <div class="col">
                        <button type="submit" class="penci-post-like single-like-button">
                            <i class="ti-heart"></i>
                        </button>
                    </div>
                    <div class="col">
                        <span class="count-number-like">{{ $blogDetails->likes()->count() }}</span>
                    </div>
                </div>
            </form>
        @endif
    @endauth
</div>




