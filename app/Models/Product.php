<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Product -> tabla products
// productModel -> products.model
class Product extends Model
{
    use HasFactory;
    //protected $table= 'producto';
    function brand(){
        return $this->belongsTo(Brand::class);
    }  
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }   
}
