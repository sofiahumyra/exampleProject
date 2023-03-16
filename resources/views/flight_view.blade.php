@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>List Name and Code</h4>
                            
                         <table style="width:100%; text-align:center">
                             <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Action</th>
                                </tr>
                                    @foreach ($flights as $flight)
                                         <tr>
                                            <td>{{ $flight->id }}</td>
                                            <td>{{ $flight->name }}</td>
                                            <td>{{ $flight->code }}</td>
                                            <td> <a href = "{{route('edit',$flight->id)}}"> Edit</a> | <a href = "{{route('destroy',$flight->id)}}"> Delete</a>  </td>
                                            
                                         </tr>
                                        
                                      @endforeach

                              </table>
                         

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
