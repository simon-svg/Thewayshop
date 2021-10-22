<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $fillable = [
        'title_en', 'title_ru', 'subtitle_en', 'subtitle_ru', 'img', 'created_at', 'updated_at', 'deleted_at'
    ];
}
