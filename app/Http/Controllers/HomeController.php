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
        $data['total_users']=User::count();
        $data['total_portfolio']=Portfolio::count();
        $data['total_blog']=Blog::count();
        $data['total_team_members']=AboutEmployee::count();
        $data['users']=User::paginate(12);
        $data['blogs'] = Blog::with('category')->paginate(10);

        return view('backend.pages.dashboard',$data);
    }

}
