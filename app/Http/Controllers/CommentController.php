<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $reply = Comment::find($id);
        $comments = Comment::with('user')
                ->where('blog_id', $id)
                ->get();
        return view('frontend.pages.replay',compact('reply','comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required',
            'content' => 'required',
        ]);

        Comment::create([
            'user_id' => auth()->user()->id, // Assuming you have authentication
            'blog_id' => $request->input('blog_id'),
            'parent_id' => $request->input('parent_id', 0), // Set to default value of 0
            'content' => $request->input('content'),
        ]);

        return back()->with('success', 'Thank you for your comment.');
    }


}
