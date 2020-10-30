<?php

namespace App\Http\Controllers;
use App\Models\Resturent_Info;
use Illuminate\Http\Request;
use Storage;

class ResturentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $info=Resturent_Info::all();
        return view("resturant.controladmin.info")->with(compact("info"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("resturant.controladmin.info");
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
        "main_pic"=>"required",
        "desc"=>"required"
    ]);
    $name=storage::disk("public")->put("resturant_info",$request->main_pic);
    $info=new Resturent_Info();
    $info->main_pic=$name;
    $info->desc=$request->desc;
    $info->save();
    return redirect()->route("info.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resturent_Info  $resturent_Info
     * @return \Illuminate\Http\Response
     */
    public function show(Resturent_Info $resturent_Info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resturent_Info  $resturent_Info
     * @return \Illuminate\Http\Response
     */
    public function edit(Resturent_Info $info)
    {
        return view("resturant.edit.editinfo")->with(compact("info"));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resturent_Info  $resturent_Info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resturent_Info $info)
    {
        $request->validate([
            "main_pic"=>"required",
            "desc"=>"required"
        ]);
        $info->main_pic=$request->main_pic;
        $info->desc=$request->desc;
        $info->save();
        return redirect()->route("info.index");
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resturent_Info  $resturent_Info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resturent_Info $info)
    {
        // var_dump($resturent_Info);
        $info->delete();
        // dd($Info);
        return redirect()->route("info.index");
    }
}
