<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\AboutEmployee;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_users=User::count();
        $total_portfolio=Portfolio::count();
        $total_blog=Blog::count();
        $total_team_members=AboutEmployee::count();
        $users=User::paginate(12);
        return view('backend.pages.dashboard',compact('total_users','total_portfolio','total_blog','total_team_members','users'));
    }

}
