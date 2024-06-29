
<div class="post-tags py-4">
    @foreach ($hashtags as $hashtag)
        @if (!empty($hashtag))
            #{{ $hashtag }}&nbsp;
        @endif
    @endforeach
</div>

