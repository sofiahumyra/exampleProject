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

                <form method="POST" action="{{ route('user.profile.update') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" name="profile_picture" value="{{ $user->profile_picture }}" class="form-control">
                    </div>
                    <br/>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection