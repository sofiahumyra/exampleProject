<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Flight;


class DisplayinvoiceController extends Controller
{
    //
      
    public function show($id){
        // dd($id);
    
    $booking = Booking::find($id);
    // dd($booking->flight);    
    return view('display_invoice',compact('booking'));
    }


    
}
