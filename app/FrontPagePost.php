<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPagePost extends Model
{
    protected $fillable = ['title', 'description', 'image', 'source', 'youtube'];

}
