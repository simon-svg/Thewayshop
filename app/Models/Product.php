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
        'name', 'price', 'sale', 'description', 'size', 'number', 'img', 'imgs', 'show',
        'count', 'created_at', 'updated_at', 'deleted_at'
    ];
}