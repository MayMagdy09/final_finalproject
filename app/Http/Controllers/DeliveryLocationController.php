<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Delivery_Location;
use Illuminate\Http\Request;
// use storage;

class DeliveryLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivery=Delivery_Location::all();
        return view("resturant.controladmin.delivery_location")->with(compact("delivery"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("resturant.controladmin.delivery_location");
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
            "region"=>"required",
            "price"=>"required",
            "branche_id"=>"required",
        ]);
        //   $name = Storage::disk("public")->put("branch" ,$request->resturent_info->main_pic); 
        $delivery=new Delivery_Location();
        $delivery->region=$request->region;
        $delivery->price=$request->price;
        $delivery->branche_id=$request->branche_id;
        $delivery->save();
   
     return redirect()->route("delivery.index");
    //   dd($delivery);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery_Location  $delivery_Location
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery_Location $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery_Location  $delivery_Location
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery_Location $delivery)
    {
return view("resturant.edit.editdelivery")->with(compact("delivery")) ;
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delivery_Location  $delivery_Location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery_Location $delivery)
    {
        $request->validate([
            "region"=>"required",
            "price"=>"required",
            "branche_id"=>"required",
        ]);
        $delivery->region=$request->region;
        $delivery->price=$request->price;
        $delivery->branche_id=$request->branche_id;
        $delivery->save();
        return redirect()->route("delivery.index");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery_Location  $delivery_Location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery_Location $delivery)
    {
        $delivery->delete();
        return redirect()->route("delivery.index");
    }
}
