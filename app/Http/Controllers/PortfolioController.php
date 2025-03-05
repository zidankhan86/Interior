<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PortfolioType;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{

        //Frontend Page
        public function portfolio(){


            $data['title']="Portfolio -innards";

            $data['portfolio'] = Portfolio::where('status', 1)->paginate(9);

            return view('frontend.pages.portfolio',$data);
        }

        public function portfolio_details($id){

            $data['title']="Portfolio details -innards";

            $data['portfolio_details'] = Portfolio::find($id);

            return view('frontend.pages.portfolioDetail',$data);
        }



        /**
         * Display a listing of the resource.
         */
        public function index()
        {

            $data['portfolios']  = Portfolio::paginate(5);

            return view('backend.components.portfolio.list',$data);
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $types = PortfolioType::all();

            return view('backend.components.portfolio.form',compact('types'));
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {

        $validator = Validator::make($request->all(), [

            'title'                   => 'required',
            'thumbnail'               => 'required',
            'images.*'                  => 'required',
            'location'                => 'required|string',
            'scope'                   => 'required|string',
            'complete_date'           => 'nullable',
            'portfolio_description'   => 'nullable|string',
            'status'                  => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // $imageName = null;
        $images = [];

       // Store thumbnail
    // Handle Thumbnail Upload
    if ($request->hasFile('thumbnail')) {
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnailPath = 'uploads/' . $thumbnailName; // Path to store in DB
        $thumbnail->move(public_path('uploads'), $thumbnailName); // Move file
    }

    // Handle Multiple Images Upload
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = 'uploads/' . $imageName; // Path to store in DB
            $image->move(public_path('uploads'), $imageName); // Move file
            $imagePaths[] = $imagePath;
        }
    }



        Portfolio::create([
            "type_name_id"            => $request->type_name_id,
            "title"                   => $request->title,
            "slug"                    => Str::slug($request->title),
            "thumbnail"               => $thumbnailPath,  // Store file path
            "images"                  => json_encode($imagePaths),
            "location"                => $request->location,
            "scope"                   => $request->scope,
            "complete_date"           => $request->complete_date,
            "portfolio_description"   => $request->portfolio_description,
            "status"                  => $request->status,
        ]);

        return back()->with('success','New Portfolio has been created');

            }

            public function edit($id)
            {
                $portfolio = Portfolio::findOrFail($id);

                $types = PortfolioType::all();

                return view('backend.components.portfolio.edit',compact('types','portfolio'));
            }

            /**
             * Update the specified resource in storage.
             */
            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'thumbnail'               => 'nullable|image', // Allow null if not uploading a new thumbnail
                    'images.*'                 => 'nullable|image', // Allow null if not uploading new images
                ]);

                if ($validator->fails()) {
                    return back()->withErrors($validator)->withInput();
                }

                $portfolio = Portfolio::find($id);

                // Preserve the old values in case the user doesn't upload new files
                $imageName = $portfolio->thumbnail; // Keep the old thumbnail
                $images = unserialize($portfolio->images) ?? []; // Keep the old images array

                // Handle thumbnail upload
                if ($request->hasFile('thumbnail')) {
                    // Delete the old image if exists
                    if ($imageName && file_exists(public_path('uploads/' . $imageName))) {
                        unlink(public_path('uploads/' . $imageName)); // Delete old file
                    }

                    $imageName = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                    $request->file('thumbnail')->storeAs('uploads', $imageName, 'public');
                }

                // Handle images upload
                if ($request->hasFile('images')) {
                    // Delete old images if exists
                    foreach ($images as $existingImage) {
                        if (file_exists(public_path('uploads/' . $existingImage))) {
                            unlink(public_path('uploads/' . $existingImage)); // Delete old files
                        }
                    }

                    // Upload new images
                    foreach ($request->file('images') as $image) {
                        $imageUniqueName = time() . '_' . $image->getClientOriginalName();
                        $image->storeAs('uploads', $imageUniqueName, 'public');
                        $images[] = $imageUniqueName;
                    }
                }

                // Update the portfolio data
                $portfolio->update([
                    "type_name_id"            => $request->type_name_id,
                    "title"                   => $request->title,
                    "slug"                    => Str::slug($request->title),
                    "thumbnail"               => $imageName, // Update with new or old thumbnail
                    "images"                  => serialize($images), // Update with new or old images
                    "location"                => $request->location,
                    "scope"                   => $request->scope,
                    "complete_date"           => $request->complete_date,
                    "portfolio_description"   => $request->portfolio_description,
                    "status"                  => $request->status,
                ]);

                return back()->with('success', 'Portfolio Updated');
            }



                /**
                 * Remove the specified resource from storage.
                 */
                public function delete($id)
                {
                $delete = Portfolio::find($id);

                $delete->delete();

                return redirect()->route('portfolio.index')->with('warning','Portfolio has been deleted ');
                }
}
