@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of States') }}</div>
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
                            <th scope="col">States</th>
                            <th scope="col">Code</th>
                            <th scope="col">Cities</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($states as $key => $state)
                        <tr scope="row">
                            <td>{{ $key+1 }}.</td>
                            <td>{{ $state->state_name }}</td>
                            <td>{{ $state->code }}</td>
                            <td>
                                <a class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $key+1 }}">
                                View</a>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $key+1 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">List Cities in {{ $state->state_name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <br/>
                                            <ul class="list-group">
                                               
                                                @foreach($state->cities as $city)
                                                <li class="list-group-item">
                                                    {{ $city->city_name }}</li>
                                                    @endforeach
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                </td>


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


