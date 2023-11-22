<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'gender',
        'birth_date',
        'phone',
        'address',
        'service_type',
        'concern',
    ];
}
