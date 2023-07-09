<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $filliable = ['title', 'description', 'page', 'link', 'language'];
}
