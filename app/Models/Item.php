<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable =["name" ,"price" ,"offer_price" ,"brand_id" ,"desc" ,"category_id"];
    protected $table="items";
    function category(){
        return $this->belongsTo(Category::class);
    }
    function item_img(){
        return $this->hasMany(Item_Img::class ,"item_id" ,"id");
    }
    function order_item(){
        return $this->hasMany(Order_Items::class,"item_id","id");
    }

}
