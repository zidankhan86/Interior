<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function logout(){
       Auth::logout();
       return redirect()->route('home')->withSuccess('Logout Success');
    }

    public function form(){
        return view('backend.pages.test');
    }
}
