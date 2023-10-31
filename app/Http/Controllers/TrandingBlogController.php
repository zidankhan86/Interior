<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class TrandingBlogController extends Controller
{
    public function index($id)
     {
        $blogData = Blog::find($id);

        // Check if a session variable exists for this blog post
        if (!session()->has('blog_' . $blogData->id)) {
            // If it doesn't exist, increment the visits count
            $blogData->increment('visits_count');

            // Set a session variable to remember that the user has visited this post
            session(['blog_' . $blogData->id => true]);
        }

        // Fetch trending posts (adjust the query as needed)
        $trendingBlogs = Blog::orderBy('visits_count', 'desc')->take(3)->get();
        

        return view('frontend.pages.trendingBlog', compact('blogData', 'trendingBlogs'));
    }

}
