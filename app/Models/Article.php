<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 
        'meta_title', 'meta_desc', 'meta_key','category_id','user_id','schema'
    ];

}
