<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'pre_title',
        'title',
        'description',
        'featured_image',
        'etsy_url',
        'facebook_url',
        'instagram_url'
    ];
}
