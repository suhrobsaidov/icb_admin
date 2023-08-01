<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    protected $fillable = ['title', 'description', 'page', 'image', 'link', 'language'];
}
