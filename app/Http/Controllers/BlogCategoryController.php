<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogcategory = BlogCategory::all();
        return view('backend.blogcategory',[
            'blogcategory'=>$blogcategory,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name'=>'nullable|max:225',
        ];

        $validatedData = $request->validate($rules);

        $blogcategory = BlogCategory::create($validatedData);

        if($blogcategory){
            return back()->with('success', 'Create successfully.');
        }
        else{
            return back()->with('error', 'Failed to create.');
        }
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
        $blogcategory = BlogCategory::find($id);

        $rules = [
            'name'=>'nullable|max:225',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['status'] = $request->status;


        $blogcategory->update($validatedData);

        if ($blogcategory) {
            return back()->with('success', 'updated successfully.');
        } else {
            return back()->with('error', 'Failed to update.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogcategory = BlogCategory::find($id);

        $blogcategory->delete();
        return back()->with('warning', 'Delete Successfully');
    }
}
