<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{

        public function index()
        {
            $data['title']="Blog -innards";

                $data['blogs'] = Blog::simplePaginate(6);
                Category::with('Category')->where('type_name');
                return view('frontend.pages.blog',$data);
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

                return back()->with(['success' => 'Blog Create Success!']);
            } catch (\Exception $e) {

                // dd($e->getMessage());
                return back()->with(['error' => 'An error occurred: ' . $e->getMessage()]);
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

                $previous = Blog::where('id','<',$blogDetails->id)->orderBy('id','desc')->first();

                $next = Blog::where('id','>',$blogDetails->id)->orderBy('id')->first();

                //Comment
                $comments = Comment::with('user')
                ->where('blog_id', $id)
                ->simplePaginate(4);

                // Count of comments
                // $totalComment = $comments->count();

                $shareComponent = \Share::page(route('blog.view', $blogDetails->id), $blogDetails->title)
                ->facebook()
                ->twitter()
                ->linkedin()
                ->telegram()
                ->whatsapp()
                ->reddit();

                return view('frontend.pages.blogDetails',compact('blogDetails','postImageNames',
                                                                 'youMayLike','hashtags',
                                                                 'previous','next',
                                                                 'comments','shareComponent'));
            }



            public function list()
            {
                $blogs = Blog::all();
                Blog::with('category')->where('category_type');
                return view('backend.pages.blogList',compact('blogs'));
            }

            //Blog Search
            public function search(Request $request)
            {
                 $searchResult=Blog::where('title','LIKE','%'.$request->search_key.'%')
                     ->orWhere('hashtags', 'LIKE', '%' . $request->search_key . '%')
                     ->orWhere('description', 'LIKE', '%' . $request->search_key . '%')
                     ->get();

                 return view('frontend.pages.search',compact('searchResult'));
            }

            public function edit($id){

                $data['blog']=Blog::find($id);
                $data['Category']=Category::all();

                return view('backend.pages.blogEdit',$data);
            }

            public function update(Request $request, $id = null)
            {
                $request->validate([
                    'category_id'       => 'required',
                    'title'             => 'required',
                    'thumbnail'         => 'nullable|image|mimes:jpeg,png,jpg,gif',
                    'description'       => 'required',
                    'status'            => 'required',
                    'featured'          => 'required',
                    'post_image.*'      => 'image|mimes:jpeg,png,jpg,gif',
                    'post_description'  => 'nullable'
                ]);

                if ($id) {
                    $blog = Blog::find($id);
                } else {
                    $blog = new Blog;
                }

                $blog->user_id = $request->user_id;
                $blog->category_id = $request->category_id;
                $blog->title = $request->title;
                $blog->slug = Str::slug($request->title);
                $blog->description = $request->description;
                $blog->status = $request->status;
                $blog->featured = $request->featured;
                $blog->post_description = $request->post_description;

                if ($request->hasFile('thumbnail')) {
                    $imageName = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                    $request->file('thumbnail')->storeAs('uploads', $imageName, 'public');
                    $blog->thumbnail = $imageName;
                }

                if ($request->hasFile('post_image')) {
                    $postImageNames = [];
                    foreach ($request->file('post_image') as $image) {
                        $imageUniqueName = time() . '_' . $image->getClientOriginalName();
                        $image->storeAs('uploads', $imageUniqueName, 'public');
                        $postImageNames[] = $imageUniqueName;
                    }
                    $blog->post_image = serialize($postImageNames);
                }

                // Extract and process hashtags
                $hashtags = explode(',', $request->input('hashtags'));
                $hashtags = array_map('trim', $hashtags);
                $hashtags = array_filter($hashtags);
                $blog->hashtags = json_encode($hashtags);

                // Save the blog post
                $blog->save();

                return back()->withSuccess(['success' => 'Blog ' . ($id ? 'Updated' : 'Created') . ' Successfully!']);
            }


            public function delete($id){

                $delete = Blog::find($id);

                $delete->delete();

                return redirect()->back()->with('success','Blog deleted!');
            }

}
