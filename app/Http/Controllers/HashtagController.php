<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HashTag;
use Illuminate\Http\Request;

class HashtagController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
            public function store(Request $request)
            {
                $blog = new Blog;
            $blog->title = $request->input('title');
            $blog->content = $request->input('content');
            $blog->save();


            $tagNames = $request->input('tags');
            $tags = [];
            foreach ($tagNames as $tagName) {
                $tag = HashTag::firstOrCreate(['name' => $tagName]);
                $tags[] = $tag->id;
            }
            $blog->tags()->sync($tags);
            }


}
