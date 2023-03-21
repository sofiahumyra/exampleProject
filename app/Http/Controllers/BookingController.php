<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Booking;
use App\Models\Flight;


class BookingController extends Controller
{

    // Insert Part

 public function insert(Flight $flight){
  //dd($flight);


    return view('/booking_insert');
}

public function create(Flight $flight,Request $request){
    
    $booking =Booking::create([
        'total_seat' => $request->total_seat,
        'date' => $request->date,
        'flight_id' =>$flight->id,



    ]);
    //dd($booking);
    return redirect('customer/'.$booking->id.'/insert');

}




}
