@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pesan Dari {{$data['name']}} </div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <h3>{{$data['email']}}</h3>
                    </div>
                    <h3>{{$data['phone']}}</h3>
                    <h3>{{$data['message']}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


