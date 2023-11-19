<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'age',
        'phone_number',
        'month_bdate',
        'day_bdate',
        'year_bdate',
        'street_address',
        'street_address_line_2',
        'city',
        'state_province',
        'postal_zipcode',
        'country',
        'weight',
        'height',
        'contact_first_name',
        'contact_last_name',
        'contact_street_address',
        'contact_street_address_line_2',
        'contact_city',
        'contact_state_province',
        'contact_postal_zipcode',
        'contact_country',
        'contact_phone_number',
        'hepa',
        'chicken_pox',
        'medical_history',
        'allergies',
        'list_reg_med',

    ];
}
