<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about_form()
    {
        return view('backend.pages.about-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {


            // dd($request->all());
              $request->validate([
                 'title'             => 'required',
                 'thumbnail'         => 'required',
                 'description'       => 'required',
                 'status'            => 'required',
                 'post_image.*'      => 'image|mimes:jpeg,png,jpg,gif',
                 'post_description'  =>'nullable'
                 ]);
 
                 $imageName = null;
                 $postImageNames = [];
 
                 if ($request->hasFile('thumbnail')) {
                        $imageName = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                        $request->file('thumbnail')->storeAs('uploads', $imageName, 'public');
                 }
 
                 if ($request->hasFile('post_image')) {
                     foreach ($request->file('post_image') as $image) {
                        $imageUniqueName = time() . '_' . $image->getClientOriginalName();
                        $image->storeAs('uploads', $imageUniqueName, 'public');
                        $postImageNames[] = $imageUniqueName;
                     }
                 }
 
              About::create([

                 "title"                 => $request->title,
                 "slug"                  => $request->slug,
                 "thumbnail"             => $imageName,
                 "description"           => $request->description,
                 "status"                => $request->status,
                 "slug"                  => Str::slug($request['title']),
                 "post_image"            => serialize($postImageNames),
                 "post_description"      => $request->post_description
 
             ]);
               
                  return back()->withSuccess(['success' => 'About Create Success!']);
              } catch (\Exception $e) {
                  return back()->withErrors(['error' => 'About creation failed: ' . $e->getMessage()]);
              }
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
