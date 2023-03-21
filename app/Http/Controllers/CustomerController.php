<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Flight;
use App\Models\Booking;
use App\Models\Customer;

class CustomerController extends Controller
{

    // Insert Part

 public function insert(Booking $booking){


    return view('/customer_insert');
}

public function create(Booking $booking,Request $request){
    //dd($booking->id);
    // Customer::create([
    //     'customer_name' => $request->customer_name,
    //     'age' => $request->age,
    //     'booking_id' => $booking->id,

    // ]);
   $customer = new Customer;
   $customer->customer_name = $request->customer_name;
   $customer->age = $request->age;
   $customer->booking_id = $booking->id;
   $customer->save();

    return view('display_invoice');

}

// Show Part
public function show(Request $request, $id)
{
   $customer = new Customer;
   $customer->customer_name = $request->customer_name;
   $customer->age = $request->age;
   $customer->save();

   return redirect('customer\display_invoice');


}


}



