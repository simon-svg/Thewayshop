<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $fillable = [
        'name_en', 'name_ru', 'price', 'sale', 'description_en', 'description_ru', 'category_id', 'best_product', 'number', 'img', 'imgs', 'show', 'count', 'created_at', 'updated_at', 'deleted_at'
    ];

    public static function products($id = null){
        $getProducts = '';
        if(!empty($id)){
            $getProducts = Product::with('size')->with('imgs')->findOrFail($id);
        } else {
            $getProducts = Product::with('size')->with('imgs')->get();
        }
        return $getProducts;
    }

    public function size(){
        return $this->hasMany(ProductSize::class, 'product_id', 'id');
    }

    public function imgs(){
        return $this->hasMany(Img::class, 'product_id', 'id');
    }
}