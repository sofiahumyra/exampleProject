<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'age',
        'address',
        'postal',
        'city_name',
        'state_name',
        'booking_id',
       
    ];

     public function booking()
   {
     return $this->belongsTo(Booking::class);
   }
}
