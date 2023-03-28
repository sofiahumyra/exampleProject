@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('History') }}</div>


                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4>List Booking History</h4> 

                        <table class="table w-100 text-center">
                            <thead>  

                             <tr>
                                <th scope="col">#</th>
                                <th scope="col">Booking ID</th>
                                <th scope="col">Flight Name</th>
                                <th scope="col">Date Departure</th>
                                <th scope="col">Total Seat</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total Price</th>

                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($bookings as $key => $booking)
                                    <tr scope="row">

                                         <td>{{ $key+1 }}.</td>
                                         <td>{{$booking->id}}</td>
                                         <td>{{$booking->flight->name}}</td>
                                         <td>{{$booking->date}}</td>
                                         <td>{{$booking->total_seat}}</td>
                                         <td>{{$booking->flight->price}}</td>
                                         <td>{{$booking->total_seat*$booking->flight->price}}</td>

                                    </tr>
                            </tbody>
                                 @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
