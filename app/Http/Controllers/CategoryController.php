<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=category::all();
        return view("resturant.controladmin.categories.index")->with(compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("resturant.controladmin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(["name"=>"required"]);
        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        return redirect()->route("category.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return view("resturant.controladmin.categories.show")->with("category" ,$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view("resturant.controladmin.categories.edit")->with(compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        
        $request->validate(["name"=>"required"]);
       
        $category->name = $request->name;
        $category->save();
        return redirect()->route("category.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        // if ($category->items()->count()==0){
        //     $category->delete();
        // }else{
        //     session()->flash("error" ,"Can't Delete ".$category->name. " Category it has related record");
        // }
        $category->delete(); 
        return redirect()->route("category.index");
    
    }
}
