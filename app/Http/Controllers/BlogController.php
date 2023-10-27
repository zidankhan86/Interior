<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::simplePaginate(12);
        Category::with('Category')->where('type_name');
       return view('frontend\pages\blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form()
    {
        $users=User::all();
        $categories=Category::all();
        return view('backend.pages.blogForm',compact('users','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {


            //dd($request->all());
             $request->validate([
                'user_id' => 'required',
                'category_id' => 'required',
                'title' => 'required',
                'slug' => 'required',
                'thumbnail' => 'required',
                'description' => 'required',
                'status' => 'required',
                'featured' => 'required',
            ]);
            $imageName = null;
            if ($request->hasFile('thumbnail')) {
                $imageName = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $request->file('thumbnail')->storeAs('uploads', $imageName, 'public');
            }

            Blog::create([
                "user_id" => $request->user_id,
                "category_id" => $request->category_id,
                "title" => $request->title,
                "slug" => $request->slug,
                "thumbnail" => $imageName,
                "description" => $request->description,
                "status" => $request->status,
                "featured" => $request->featured,
                "slug" => Str::slug($request['title'])
            ]);

            return back()->withSuccess(['success' => 'Blog Create Success!']);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Blog creation failed: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function list()
    {
        return view('backend.pages.blogList');
    }


}
