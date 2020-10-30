<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_Location extends Model
{   protected $table="delivery_locations";
    use HasFactory;
    function order(){
        return $this->hasMany(Order::class,"delivery_location_id","id");
    }
    function branch(){
        return $this->belongsTo(Branch::class,"branche_id","id");

    }
    function resturent_info(){
        return $this->belongsTo(Resturent_Info::class,"branche_id","id");
    }
}
