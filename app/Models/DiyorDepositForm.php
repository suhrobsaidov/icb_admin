<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiyorDepositForm extends Model
{
    protected $fillable = [
        'surname',
        'name',
        'middle_name',
        'e_mail',
        'phone_number',
        'additional_phone_number'
    ];
}
