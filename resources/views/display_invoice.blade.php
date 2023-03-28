@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Invoice') }}</div>



                <div class="card-body">
                    <div class="row">

                        <div class="col-7">


                            <h2 class="heading">Booking ID : {{$booking->customer->booking_id}}</h2>
                            <p>Customer Name : {{$booking->customer->customer_name}}</p>
                            <p>Age : {{$booking->customer->age}}</p>  
                            <?php  date_default_timezone_set("Asia/Kuala_Lumpur");
                                echo "Order Date: " . date("d/m/Y");  ?>
                                <br/>

                            </div>


                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        <form action="{{ route('history.view') }}" method="GET">
                              @csrf
                            <table class="table" style="width:100%; text-align:center">
                                <thead>  

                                 <tr>

                                    <th scope="col">Date</th>
                                    <th scope="col">Flight Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total Seat</th>
                                    <th scope="col">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>

                               <tr>
                                <td>{{$booking->date}}</td>
                                <td>{{$booking->flight->name}}</td>
                                <td>{{$booking->flight->price}}</td>
                                <td>{{$booking->total_seat}}</td>
                                <td>{{$booking->total_seat*$booking->flight->price}}</td>

                            </tr>


                            <tr>
                                <td colspan="4" style="text-align: end;">Service Tax </td>
                                <td>RM 145 </td>
                            </tr>

                            <tr>
                                <td colspan="4" style="text-align: end;">Surcharge</td>
                                <td>RM 50</td>

                            </tr>
                            <tr >
                                <td colspan="4"style="text-align: end;"><b>Total Amount Paid</b></td>
                                <td><b>RM {{ ($booking->total_seat*$booking->flight->price)+145+50}}</b></td>

                            </tr>

                        </tbody>

                    </table>

                </div>
                <br/>

             
                  
                    <div class="card-footer">
                          <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary float-end">
                                {{ __('Save') }}
                            </button>
                         </div>

                    </div>
               </form>
          
                <br/>
            </div>
        </div>
    </div>
</div>
@endsection