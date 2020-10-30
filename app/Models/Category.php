<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =["name"];
    protected $table="categories";
    function items(){        
        return $this->hasMany(Item::class ,"category_id" ,"id");
    }
}
