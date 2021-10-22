<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $fillable = [
        'name_en', 'name_ru', 'position_en', 'position_en', 'img', 'description_en', 'description_ru', 'created_at', 'updated_at', 'deleted_at'
    ];
}
