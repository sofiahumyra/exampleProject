@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of Cities') }}</div>
                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                <table class="table w-100 text-center">
                    <thead>  

                       <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cities Name</th>
        
                    </tr>
                </thead>
                <tbody>




                 <



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


