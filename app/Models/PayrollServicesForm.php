<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayrollServicesForm extends Model
{
    protected $fillable = [
      'surname',
        'name',
        'middle_name',
        'e_mail',
        'phone_number',
        'city_district'
    ];
}
