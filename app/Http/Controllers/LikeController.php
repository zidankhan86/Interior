<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    public function like($id)
{
           
    if (auth()->check()) {
       
            $userId = auth()->user()->id;

            
            $like = Like::where('user_id', $userId)->where('blog_id', $id)->first();

        if ($like) {
           
            $like->delete();
        } else {
            
            Like::create([
                'user_id' => $userId,
                'blog_id' => $id,
            ]);
        }
    }

    
    return back();
}

   
}
