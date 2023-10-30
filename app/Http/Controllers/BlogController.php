<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::simplePaginate(12);
        Category::with('Category')->where('type_name');
        return view('frontend\pages\blog',compact('blogs'));
    }


    public function form()
    {
        //Category
        $categories=Category::all();
        //user
        $user=User::all();
        return view('backend.pages.blogForm',compact('categories','user'));
    }


    public function store(Request $request)
    {

        try {


           // dd($request->all());
             $request->validate([
                'category_id'       => 'required',
                'title'             => 'required',
                'thumbnail'         => 'required',
                'description'       => 'required',
                'status'            => 'required',
                'featured'          => 'required',
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

            $blog= Blog::create([
                "user_id"               => $request->user_id,
                "category_id"           => $request->category_id,
                "title"                 => $request->title,
                "slug"                  => $request->slug,
                "thumbnail"             => $imageName,
                "description"           => $request->description,
                "status"                => $request->status,
                "featured"              => $request->featured,
                "slug"                  => Str::slug($request['title']),
                "post_image"            => serialize($postImageNames),
                "post_description"      => $request->post_description

            ]);
                // Extract and process hashtags
                $hashtags = explode(',', $request->input('hashtags'));

                // Remove leading and trailing spaces from each hashtag
                $hashtags = array_map('trim', $hashtags);

                // Remove empty hashtags
                $hashtags = array_filter($hashtags);

                //for formate
                $blog->hashtags = json_encode($hashtags);

                // Save the blog post
                $blog->save();

                 return back()->withSuccess(['success' => 'Blog Create Success!']);
             } catch (\Exception $e) {
                 return back()->withErrors(['error' => 'Blog creation failed: ' . $e->getMessage()]);
             }
            }


            public function show($id)
            {
                //User
                User::with('user')->where('name');

                //Blog
                $blogDetails =Blog::find($id);

                //image
                $postImageNames = explode(',', $blogDetails->post_image);

                //Category wise post
                $youMayLike = Blog::where('category_id', $blogDetails->category_id)
                    // Exclude the current post
                    ->where('id', '!=', $id)
                    ->take(3)
                    ->get();

                //hash tag

                $hashtags = json_decode($blogDetails->hashtags);

                //Next & Previous
                //$blogData = Blog::all();

                $previous = Blog::where('id','<',$blogDetails->id)->orderBy('id','desc')->first();

                $next = Blog::where('id','>',$blogDetails->id)->orderBy('id')->first();

                return view('frontend.pages.blogDetails',compact('blogDetails','postImageNames',
                                                                 'youMayLike','hashtags',
                                                                 'previous','next'));
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
            $blogs = Blog::all();
            return view('backend.pages.blogList',compact('blogs'));
        }


}
