<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{ protected $fillable=["estimate_time_request","status","user_id","delevery_location"];
    protected $table ="orders";
    use HasFactory;
    function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    function order_item(){
        return $this->hasMany(Order_Items::class,"order_id","id");
    }
    function delevery_location(){
        return $this->belongsTo(Delevey_Location::class,"delevery_location_id","id")
    }
}
