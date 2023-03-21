@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Invoice') }}</div>


                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                <table class="table" style="width:100%; text-align:center">
                    <thead>  

                       <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                        <th scope="col">Booking</th>
                    </tr>
                </thead>
                <tbody>

                   
                       
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>
</div>


@endsection