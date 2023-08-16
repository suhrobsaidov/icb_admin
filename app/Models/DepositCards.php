<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepositCards extends Model
{
    protected $fillable = ['title', 'description', 'image', 'link', 'maintenance', 'security', 'access', 'commission', 'time', 'money' ];
}
