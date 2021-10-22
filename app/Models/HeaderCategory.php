<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeaderCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $fillable = [
        'name_en', 'name_ru', 'parentId', 'created_at', 'updated_at', 'deleted_at'
    ];


    public function categories(){
        return $this->hasMany(HeaderSubmenu::class, 'parentCategoryId', 'id');
    }
}
