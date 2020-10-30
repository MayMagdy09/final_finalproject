<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturent_Info extends Model
{   protected $table ="resturent_info";
    use HasFactory;
    function branch(){
        return $this->hasMany(Branch::class,"resturent_info_id","id");
    }
    function delivery_location(){
        return $this->hasMany(Branch::class,"resturent_info_id","id");
    }
}
