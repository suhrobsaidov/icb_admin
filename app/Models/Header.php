<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = ['title', 'description', 'link', 'sub_title', 'sub_description', 'image', 'page', 'language'];
}
