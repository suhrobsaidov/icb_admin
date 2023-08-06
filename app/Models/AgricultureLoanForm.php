<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgricultureLoanForm extends Model
{
    protected $fillable = [
        'surname',
        'name',
        'middle_name',
        'e_mail',
        'phone_number',
        'additional_phone_number',
        'loan_product',
        'loan_currency',
        'loan_amount',
        'loan_term',
        'loan_purpose',
        'occupation',
        'city_district',
        'region',
        'address_where_registered',
        'monthly_family_income',
        'branch',
        'phone_number_for',
        'photo',
        'passport',
        'other_documents'
    ];
}
