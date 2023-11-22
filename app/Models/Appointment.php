<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_type',
        'gender',
        'birth_date',
        'phone',
        'address',
        'service_type',
        'concern',
        'appointment_date',
        'queue_number',
        'last_name',
        'first_name',
        'age',
        // 'birth_date'
    ];

    public function scopeFilter($query, array $filters) {
        if ($filters['id'] ??false) {
            $query->where('id', 'like', '%' . request('id') . '%');
           }
        if ($filters['search'] ??false) {
            $query->where('first_name' , 'like', '%' . request('search') . '%')
            ->orWhere('last_name' , 'like', '%' . request('search') . '%')
            ->orWhere('service_type' , 'like', '%' . request('search') . '%')
            ->orWhere('queue_number' , 'like', '%' . request('search') . '%')
            ->orWhere('id' , 'like', '%' . request('search') . '%');
            // ->orWhere('age' , 'like', '%' . request('search') . '%')
           }
  
        
     
     }
}
