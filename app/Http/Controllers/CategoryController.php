<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            //Blog
            $blogs = Blog::simplePaginate(12);

            //Category
            Category::with('Category')->where('type_name');

            //Profile
            $user=User::all();

            //Blog count under category
            $categories = Category::withCount('blogs')->get();
            $trendingBlogs = Blog::all();


       return view('frontend.pages.category',compact('blogs','user','categories','trendingBlogs'));
     }


     public function CategoryWiseBlog($id)
     {

            //find category
            $categoryWiseBlog = Category::find($id);

            //Blog


            $blogs = Blog::where('category_id', $id)
                          ->where('status', 1)
                          ->simplePaginate(12);

            //Category
            Category::with('Category')->where('type_name');

            //Profile
            $user=User::all();

            //Blog count under category
            $categories = Category::withCount('blogs')
                                    ->get();
            //Trending
            $trendingBlogs = Blog::all();

       return view('frontend.pages.categoryWizeBlog',compact('blogs','user','categories',
                                                            'trendingBlogs','categoryWiseBlog'));
       }


            public function create()
            {
                return view('backend.pages.categoryForm');
            }

            public function edit($id)
            {
                $categories = Category::find($id);
                return view('backend.components.category.categoryEdit',compact('categories'));
            }



      public function store(Request $request)
      {

             $request->validate([
                'type_name'     => 'required|string',
                'status'        => 'required',
            ]);

            Category::create([
                "type_name"     => $request->type_name,
                "status"        => $request->status,
                "slug"          => Str::slug($request['type_name']),
            ]);

            return back()->withSuccess(['success' => 'Category Create Success!']);


    }


            public function list()
            {

                $data['categories'] = Category::paginate(5);

            return view('backend.pages.categoryList',$data);
            }


            public function update(Request $request,$id)
            {
                $categories = Category::find($id);
            $categories->update([
                "type_name"     => $request->type_name,
                "status"        => $request->status,
            ]);

            return redirect()->back()->with('success','Category updated');
            }

            public function delete($id){

                $delete = Category::find($id);
                $delete->delete();

                return redirect()->back()->with('success','Category Deleted');

            }

}
