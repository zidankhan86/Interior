
    <div class="post-share">
        @auth
            <div class="row align-items-center">
                <div class="col">
                    <i class="ti-heart" style="color: red; cursor: pointer;" wire:click="like"></i>

                </div>
                <div class="col">
                    <span class="count-number-like">{{ $likeCount }}</span>
                </div>
            </div>
        @endauth
    </div>
    

