<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;



class BookingController extends Controller
{

    public function index(Request $request)

    {
        $bookings = Auth::user()->bookings;

        $bookings = Booking::orderBy('created_at', 'desc')->get();
        
        return view('history_view', compact('bookings'));
    }
    


    public function insert(Flight $flight)
    {
          //dd($flight);
        return view('/booking_insert');
    }

    public function create(Flight $flight,Request $request)
    {

        $booking =Booking::create([

            'total_seat' => $request->total_seat,
            'date' => $request->date,
            'flight_id' =>$flight->id,

        ]);
            //dd($booking);
        return redirect('customer/'.$booking->id.'/insert');
    }

    public function store(Flight $flight,Request $request)
    {
      

        $booking =Booking::create([

            'total_seat' =>$request->total_seat,
            'date' => $request->date,
            'flight_id' =>$flight->id,
        ]);

        $customer =Customer::create([
            'customer_name' => $request->customer_name,
            'age' =>$request->age,
            'address' => $request->address,
            'postal' => $request->postal,
            'city_name' => $request->city_name,
            'state_name' => $request->state_name,
            'booking_id' =>$booking->id,
        ]);

        return view('display_invoice',compact('booking'))->with('success','New booking successfully created.');
    }

    public function show($id){
        // dd($id);
        
        $booking = Booking::find($id);
        // dd($booking->flight);    
        return view('history_view',compact('booking'));
    }
}
