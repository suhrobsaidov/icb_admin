<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepositCards extends Model
{
    protected $filliable = ['title', 'description', 'image', 'link', 'maintense', 'security', 'access', 'commission', 'time', 'money' ];
}
