<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    protected $table="order_items";
    use HasFactory;
    function order(){
        return $this->belongsTo(Order::class,"order_id","id");
    }
    function item(){
        return $this->belongsTo(Item::class,"item_id","id");
    }
}
