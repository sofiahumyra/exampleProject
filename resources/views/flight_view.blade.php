@extends('layouts.app')

@section('content')
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" ></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script
>
<script>
    $(document).ready(function() {
       
            $("#firstForm").validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 10,
                    },
                    code: {
                        required: true,
                        digits:true,
                        minlength: 2,
                        maxlength:4,
                    },
                    price: {
                        required: true,
                        minlength: 2,
                        maxlength:4,
                    }
                },
                messages: {
                    name: {
                        required: "Please enter name",
                        maxlength: "Your last name maxlength should be 10 characters long."
                    },
                    code: {
                        required: "Please enter code",
                        minlength: "The contact number should be 10 digits",
                        digits: "Please enter only numbers",
                        maxlength: "The contact number should be 10 digits",
                    },
                    price: {
                        required: "Please enter price",
                        email: "Please enter valid email",
                        maxlength: "",
                    }
                },
            });
        
    });
</script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard / Flight') }}</div>


                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4>List Flight Trip</h4> <!-- Button trigger modal -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <br/>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Insert New Flight
                        </button>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Flight Information</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <br/>
                                    <form method="POST" id="firstForm" action="{{ url('/flight/create')}}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>

                                            <div class="col-md-6">
                                                <input id="code" type="number" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required >

                                                @error('code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                                            <div class="col-md-6">
                                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required >

                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        
                                        <br/>

                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Add') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>

                <table class="table w-100 text-center">
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

                    @foreach ($flights as $key => $flight)
                    <tr scope="row">
                        <td>{{ $key+1 }}.</td>
                        <td>{{ $flight->name }}</td>
                        <td>{{ $flight->code }}</td>
                        <td>{{ $flight->price }}</td>
                        <td> <a href = "{{route('edit',$flight->id)}}" class="btn btn-primary btn-sm"> Edit </a> | 

                            <a  href = "{{route('destroy',$flight->id)}}" class="btn btn-warning btn-sm"> Delete </a> 
                        </td>
                        <td><a class="btn btn-link text-decoration-none" href = "{{ url('/flight/'.$flight->id.'/booking')}}"> Book Now</a></td>   
                    </tr>
                </tbody>


                @endforeach
            </table>
        </div>
        
    </div>
</div>
</div>




@endsection