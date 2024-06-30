<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_users=User::count();
        $total_liked=Like::count();
        $total_blog=Blog::count();
        $total_comments=Comment::count();
        return view('backend.pages.dashboard',compact('total_users','total_liked','total_blog','total_comments'));
    }

}
