<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $fillable = [
        'name_en', 'name_ru', 'price', 'sale', 'description_en', 'description_ru', 'category_id', 'best_product', 'size', 'number', 'img', 'imgs', 'show', 'count', 'created_at', 'updated_at', 'deleted_at'
    ];
}