<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Storage;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $branch=Branch::all();
      return view("resturant.controladmin.location")->with(compact("branch"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("resturant.controladmin.location");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            "location"=>"required",
            "phone_contact"=>"required",
            "resturent_info_id"=>"required"
        ]);
        $name=storage::disk("public")->put("branch",$request->resturent_info->main_pic);
        $branch=new Branch();
        $branch->location=$request->location;
        $branch->phone_contact=$request->phone_contact;
        $branch->resturent_info_id=$name;
        $branch->save();
        // return redirect()->Route("branchlocation.index");
        return redirect()->Route("branch.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view("resturant.edit.editlocation")->with(compact("branch"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            "location"=>"required",
            "phone_contact"=>"required",
            "resturent_info_id"=>"required"
        ]);
        $branch->location=$request->location;
        $branch->phone_contact=$request->phone_contact;
        $branch->resturent_info_id=$request->resturent_info_id;
        $branch->save();
        return redirect()->route("branch.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route("branch.index");

    }
}
