<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HashTag;
use Illuminate\Http\Request;

class HashtagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
