<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{   protected $table ="branches";
    use HasFactory;
    function resturent_info(){
        return $this->belongsTo(Resturent_Info::class,"resturent_info_id","id");

    }
    function delivery_location(){
        return $this->hasMany(Delivery_Location::class,"branche_id","id");
    }
}
