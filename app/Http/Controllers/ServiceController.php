<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        $data['title']="Service -innards";

        return view('frontend.pages.service',$data);
    }

    public function residential(){

        $data['residential']=Portfolio::whereHas('project_category',function($query){
        $query->where('type_name','Residential');
        })->with('project_category')->get();

        return view('backend.pages.residential',$data);
    }

    public function architect(){

        $data['architects'] = Portfolio::whereHas('project_category', function ($query) {
            $query->where('type_name', 'Architectural');
        })->with('project_category')->get();

        return view('backend.pages.architec',$data);
    }

    public function commercial(){

        return view('backend.pages.commertial');
    }
}
