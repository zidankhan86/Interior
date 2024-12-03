<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        return view('frontend.pages.service');
    }

    public function residential(){

        return view('backend.pages.residential');
    }

    public function architect(){

        return view('backend.pages.architec');
    }

    public function commercial(){

        return view('backend.pages.commertial');
    }
}
