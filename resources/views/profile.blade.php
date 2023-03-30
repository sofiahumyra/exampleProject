@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        @if (session('success'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-error" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">{{ __('User Profile') }} </div>


            <div class="card-body">
             <form action="{{ route('user.profile.edit') }}">
            
                <div class="d-flex justify-content-center align-items-center">
                     <img src="{{ asset('storage/profile_pictures' . $user->profile_picture) }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px;">
                </div>

                <br/>

                   <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>


                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" readonly value="{{ Auth::user()->name}}" >
                    </div>
                   </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" readonly value="{{ Auth::user()->email}}" >
                    </div>
                </div>

                    <div>
                        <button type="submit" class="btn btn-primary float-end">Edit Profile
                        </button>
                    </div>
             </form>
            </div>
        </div>
    </div>
</div>
@endsection