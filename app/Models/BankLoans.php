<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankLoans extends Model
{
    protected $fillable = ['title', 'description', 'image', 'link', 'maintense', 'security', 'access', 'commission', 'time', 'money' ];
}
