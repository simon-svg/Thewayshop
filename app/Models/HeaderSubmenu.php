<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\HeaderCategory;

class HeaderSubmenu extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $fillable = [
        'name', 'parentCategoryId', 'link', 'created_at', 'updated_at', 'deleted_at'
    ];
}
