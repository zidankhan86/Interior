<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
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
    public function like($id)
{
    // Check if the user is authenticated
    if (auth()->check()) {
        // Get the authenticated user's ID
        $userId = auth()->user()->id;

        // Check if the user has already liked the post
        $like = Like::where('user_id', $userId)->where('blog_id', $id)->first();

        if ($like) {
            // If the user has already liked the post, remove the like
            $like->delete();
        } else {
            // If the user hasn't liked the post, create a new like record
            Like::create([
                'user_id' => $userId,
                'blog_id' => $id,
            ]);
        }
    }

    // Redirect back to the post page or to the previous page
    return back();
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        //
    }
}
