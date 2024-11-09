<?php

namespace App\Livewire;

use App\Models\Like;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LikeButton extends Component
{
    public $blogId;
    public $isLiked;
    public $likeCount;

    public function mount($blogId)
    {
        $this->blogId = $blogId;
        $this->isLiked = $this->checkIfLiked();
        $this->likeCount = $this->getLikeCount();
    }

    public function like()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $like = Like::where('user_id', $userId)->where('blog_id', $this->blogId)->first();

            if ($like) {
                $like->delete();
            } else {
                Like::create([
                    'user_id' => $userId,
                    'blog_id' => $this->blogId,
                ]);
            }

            $this->isLiked = $this->checkIfLiked();
            $this->likeCount = $this->getLikeCount();
        }
    }

    private function checkIfLiked()
    {
        return Like::where('user_id', Auth::id())->where('blog_id', $this->blogId)->exists();
    }

    private function getLikeCount()
    {
        return Like::where('blog_id', $this->blogId)->count();
    }

    
}
