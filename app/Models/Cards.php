<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $fillable = ['title', 'image', 'link', 'page', 'language'];
}
