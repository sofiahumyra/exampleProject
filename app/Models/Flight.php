<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'price',
        
    ];
         public function booking() {
        return $this->hasOne(Booking::class);
    }
}
