<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_seat',
        'date',
        'flight_id',
       
    ];

//     public function show(Booking $booking){
        
//     return view('bookings.show', ['booking' => $booking]);
// }


     public function customer() {
        return $this->hasOne(Customer::class);
    }

       public function flight()
   {
     return $this->belongsTo(Flight::class);
   }
}