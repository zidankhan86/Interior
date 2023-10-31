<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SocialShareButtonsController extends Controller
{
    public function ShareWidget($id)
    {

        $blogDetails = Blog::find($id);
        $shareComponent = \Share::page(route('blog.view', $blogDetails->id), $blogDetails->title)
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('frontend\pages\shareBlog', compact('shareComponent','blogDetails'));
    }
}
