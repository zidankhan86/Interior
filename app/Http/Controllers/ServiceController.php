<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
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
        $architects = Portfolio::whereHas('project_category', function ($query) {
            $query->where('type_name', 'Architectural');
        })->with('project_category')->get();
        return view('backend.pages.architec',compact('architects'));
    }

    public function commercial(){

        return view('backend.pages.commertial');
    }
}
