<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['surname', 'name', 'middle_name', 'e_mail', 'phone'];
}
