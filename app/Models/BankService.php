<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankService extends Model
{
    protected $filliable = ['title', 'description', 'page', 'image', 'link', 'language'];
}
