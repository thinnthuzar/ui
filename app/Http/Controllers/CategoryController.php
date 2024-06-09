<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest("id")->get();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.index');
    }

    /**
     * Store a newly created resource in storage.
     *
    * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
       // return $request;
        $category = new Category();
        $category->title= $request->title;
        $category->description = $request->description;
        $category->save();
       // return $request;
        return redirect()->route('category.index')->with('status',$category->title. " added successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)

    {
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {

        $category->title = $request->title;
        $category->description = $request->description;
       // $category->slug = Str::slug($request->title);
        // $category->user_id = Auth::id();
        $category->update();
        return redirect()->route('category.index')
        ->with('status', $request->title." update is successfully");

        //return view('categoryedit',compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $title=$category->title;
        $category->delete();
        return redirect()->back();
       // return redirect()->route('category.index')->with('status',$title . "deleted successfully" );
    }
}
