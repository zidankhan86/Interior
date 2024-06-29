<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        //latest Blog
        $latestBlog = Blog::latest()->limit(5)->get();

        //Blog
        $blogs = Blog::simplePaginate(12);

        //Category
        Category::with('Category')->where('type_name');
        
        return view('frontend.pages.home',compact('blogs','latestBlog'));
    }

   
}
