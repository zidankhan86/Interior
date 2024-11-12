<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * About Frontend Page
     */
    public function index()
    {
        return view('frontend.pages.about');
    }


    public function employee()
    {
        return view('backend.pages.aboutBrand');
    }


    public function brand()
    {
        return view('backend.pages.aboutEmployee');
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


    public function showStep2(About $about)
{
    return view('backend.pages.aboutStep2', compact('about'));
}

public function showStep3(About $about)
{
    return view('backend.pages.aboutStep3', compact('about'));
}




    public function storeStep1(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $about = new About();
        $about->title = $validated['title'];
        $about->description = $validated['description'];
        $about->save();

        return redirect()->route('about.storeStep2', ['about' => $about->id]);
    }

    public function storeStep2(Request $request, About $about)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'icon_title' => 'required|string|max:255',
            'icon_description' => 'required|string',
        ]);

        $about->icon = $validated['icon'];
        $about->icon_title = $validated['icon_title'];
        $about->icon_description = $validated['icon_description'];

        
        $about->save();

        return redirect()->route('about.list')->with('success', 'About created successfully!');
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

   

}
