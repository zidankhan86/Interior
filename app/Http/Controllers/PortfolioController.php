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

            $portfolio = Portfolio::where('status', 1)->paginate(9);

            return view('frontend.pages.portfolio',compact('portfolio'));
        }

        public function portfolio_details($id){

            $portfolio_details = Portfolio::find($id);
            return view('frontend.pages.portfolioDetail',compact('portfolio_details'));
        }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('backend.components.portfolio.form');
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
        $imageName = null;
        $images = [];

        if ($request->hasFile('thumbnail')) {
               $imageName = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
               $request->file('thumbnail')->storeAs('uploads', $imageName, 'public');
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
               $imageUniqueName = time() . '_' . $image->getClientOriginalName();
               $image->storeAs('uploads', $imageUniqueName, 'public');
               $images[] = $imageUniqueName;
            }
        }

        
        Portfolio::create([
            "type_name_id"            => $request->type_name_id,
            "title"                   => $request->title,
            "slug"                    => Str::slug($request->title), 
            "thumbnail"               => $imageName,
            "images"                  => serialize($images),
            "location"                => $request->location,
            "scope"                   => $request->scope,
            "complete_date"           => $request->complete_date,
            "portfolio_description"   => $request->portfolio_description,
            "status"                  => $request->status,
        ]);

        return back()->with('success','New Portfolio has been created');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
