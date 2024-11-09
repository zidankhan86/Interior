<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PortfolioType;

class PortfolioTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PortfolioType::all();
        return view('backend.components.portfolio.category.list',compact('categories'));
    }


    public function store(Request $request)
    {
        PortfolioType::create([
            "type_name"     => $request->type_name,
            "status"        => $request->status,
            "slug"          => Str::slug($request['type_name']),
        ]);

        return back()->withSuccess(['success' => 'Category Create Success!']);
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
    public function edit($id)
    {
        $portfolioType = PortfolioType::findOrFail($id);
        return view('backend.components.portfolio.category.edit', compact('portfolioType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $portfolioType = PortfolioType::findOrFail($id);
        $portfolioType->update([
            'type_name' => $request->type_name,
            'status' => $request->status,
        ]);

        return redirect()->route('portfolioType.index')->with('success','Type name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $delete = PortfolioType::find($id);
        $delete->delete();
        return redirect()->back()->with('warning','Type name has been deleted successfully');
    
    }
}
