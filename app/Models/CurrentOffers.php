<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentOffers extends Model
{
    protected $fillable = ['title', 'description','link','image'];
}
