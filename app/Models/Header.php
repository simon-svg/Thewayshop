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

    // DB::table('users')
    //         ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //         ->join('orders', 'users.id', '=', 'orders.user_id')
    //         ->select('users.*', 'contacts.phone', 'orders.price')
    //         ->get();



    public $timestamps = true;
    protected $fillable = [
        'name_en', 'name_ru', 'link', 'created_at', 'updated_at', 'deleted_at'
    ];

    

    public static function headers(){
        $getHeader = Header::with('categories')->get();
        return $getHeader;
    }

    

    public function categories(){
        return $this->hasMany(HeaderCategory::class, 'parentId', 'id')->with('categories');
    }
}