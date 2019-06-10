<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    protected $table = 'latest_news';
protected $fillable = ['slug', 'author', 'title', 'description', 'image', 'images', 'applemusic', 'spotify', 'soundcloud', 'youtube'];

}

