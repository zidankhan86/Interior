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
       $employees = AboutEmployee::all();
        $brands = AboutBrand::all();
        $about = About::latest()->first();
        return view('frontend.pages.about',compact('employees','brands','about'));
    }


    public function employee()
    {
        return view('backend.pages.aboutEmployee');
    }


    public function brand()
    {
        return view('backend.pages.aboutBrand');
    }

    public function list(){
        $abouts = About::all();

        return view('backend.pages.aboutList',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showStep1()
    {
        return view('backend.pages.about-form');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            // dd($request->all());
              $request->validate([
                 'title'             => 'required',
                 'description'  =>'nullable'
                 ]);
 
               
 
              About::create([

                 "title"                 => $request->title,
                
                 "description"           => $request->description,
 
             ]);
               
                  return back()->withSuccess(['success' => 'About Create Success!']);
            
    }

   

    public function employee_store(Request $request){

        //  dd($request->all());
         $request->validate([
            'employee_name'             => 'required',
            'thumbnail'         => 'required',
            'about_employee'         => 'required',
            'position'         => 'required',
          
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


    public function brand_store(Request $request){

        //  dd($request->all());
         $request->validate([
            'brand_name'             => 'required',
            'thumbnail'         => 'required',
           
          
            ]);

            $imageName = null;

            if ($request->hasFile('thumbnail')) {
                   $imageName = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                   $request->file('thumbnail')->storeAs('uploads', $imageName, 'public');
            }

         AboutBrand::create([

            "thumbnail"             => $imageName,
            "brand_name"         => $request->brand_name,
           
            ]);
          
             return back()->with('success','Brand added successfully');
       
    }

}
