<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SLider extends Model
{
   protected $fillable = [
       'title',
       'desc',
       'img',
       'subtitle',
       'subdesc',
       'link'
   ];
}
