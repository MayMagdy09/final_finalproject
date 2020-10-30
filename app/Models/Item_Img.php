<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Img extends Model
{
    use HasFactory;
    protected $table="item_imgs";
    protected $fillable=["name","comments","item_id"];

    function item(){
        return $this->belongsTo(Item::class ,"item_id" ,"id");



    }
}
