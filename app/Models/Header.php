<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\HeaderCategory;


class Header extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $fillable = [
        'name', 'parentId', 'link', 'created_at', 'updated_at', 'deleted_at'
    ];

    

    public static function headers(){
        $getHeader = Header::with('categories')->get();
        
        $getHeader = json_decode(json_encode($getHeader), true);
        return $getHeader;
    }



    public function categories(){
        return $this->hasMany(HeaderCategory::class, 'parentId', 'id')->with('categories');
    }

}