<?php

namespace App\Http\Controllers;


use DB;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Flight;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class BookingController extends Controller{


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

    public function store(Flight $flight,Request $request){

        $booking =Booking::create([

            'total_seat' =>$request->total_seat,
            'date' => $request->date,
            'flight_id' =>$flight->id,
        ]);

        $customer =Customer::create([
            'customer_name' => $request->customer_name,
            'age' =>$request->age,
            'booking_id' =>$booking->id,

        ]);

        return view('display_invoice',compact('booking'))->with('success','New booking successfully created.');
    }



}
