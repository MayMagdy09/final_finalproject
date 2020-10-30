<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Item_Img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    return view("resturant.controladmin.items.index")->with("items" , Item::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("resturant.controladmin.items.create");
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
            "name" =>"required",
            "price" =>"required",
            
            "desc" =>"required",
            "category_id" =>"required",
            
        ]);

        $item = new Item();
        $item->name =$request->name;
        $item->price =$request->price;
        $item->offer_price =$request->offer_price;
        $item->desc =$request->desc;
        $item->category_id =$request->category_id;
        $item->save();

        $files = $request->file("imgs");
        foreach($files as $file){
          $name = Storage::disk("public")->put("item_imgs" ,$file); 
          $ii = new Item_Img();
          $ii->name = $name;         
          $ii->item_id =$item->id;
          $ii->save();
        }
      
        
        return redirect()->route("item.index");
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view("resturant.controladmin.items.edit")->with(compact("item"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
       
        $request->validate([
            "name" =>"required",
            "price" =>"required",
            
            "desc" =>"required",
            "category_id" =>"required",
        ]);
        
        $item->name =$request->name;
        $item->price =$request->price;
        $item->offer_price =$request->offer_price;
        $item->desc =$request->desc;
        $item->category_id =$request->category_id;
        $item->save();
        
        return redirect()->route("item.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route("item.index");
    }
    function findByCatId(Category $category){
        return view("resturant.site.Beverages")->with("items",$category->items);
        // dd($category->items->first()->item_img->first()->name);
    }
}
