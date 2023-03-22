@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="">
                @csrf
                <div class="card">
                    <div class="card-header">{{ __('Booking Information') }}</div>

                    <div class="card-body">

                        <div class="row mb-3">
                            <label for="total_seat" class="col-md-4 col-form-label text-md-end">{{ __('Total Seat') }}</label>


                            <div class="col-md-6">
                                <input id="total_seat" type="text" class="form-control @error('total_seat') is-invalid @enderror" name="total_seat" value="{{ old('total_seat') }}" required autocomplete="total_seat" autofocus>

                                @error('total_seat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <!-- Customer Part -->

                    <div class="card-header">{{ __('Customer Information') }}</div>

                 <br/>
                        <div class="row mb-3">
                        <label for="customer_name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="customer_name" type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name') }}" required autocomplete="customer_name" autofocus>

                            @error('customer_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>

                        <div class="col-md-6">
                            <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                            @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </form>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-end">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
