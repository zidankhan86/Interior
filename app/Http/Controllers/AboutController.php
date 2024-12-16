<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBrand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AboutEmployee;

class AboutController extends Controller
{
    /**
     * About Frontend Page
     */
    public function index()
    {
        $data['title']="Employee -innards";

        $data['employees'] = AboutEmployee::all();

        return view('frontend.pages.about',$data);
    }


    public function employee()
    {
        $data['title'] = 'Employee -innards';
        return view('backend.pages.aboutEmployee',$data);
    }

    public function list(){
        $abouts = AboutEmployee::all();

        return view('backend.pages.aboutList',compact('abouts'));
    }


    public function employee_store(Request $request){

        //  dd($request->all());
            $request->validate([
            'employee_name'             => 'required',
            'thumbnail'                 => 'required',
            'about_employee'            => 'required',
            'position'                  => 'required',

            ]);

            $imageName = null;

            if ($request->hasFile('thumbnail')) {
                   $imageName = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                   $request->file('thumbnail')->storeAs('uploads', $imageName, 'public');
            }

         AboutEmployee::create([

            "thumbnail"             => $imageName,
            "about_employee"        => $request->about_employee,
            "position"              => $request->position,
            "employee_name"         => $request->employee_name,

            ]);

             return back()->with('success','Employee added successfully');

    }



}
