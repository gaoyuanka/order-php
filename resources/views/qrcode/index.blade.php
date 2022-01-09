@extends('layout')
@section('content')
<div class="overlay overlay-bg"></div>
<div class="container">
    <div class="row justify-content-center text-center">
        
        <div class="row justify-content-center">
            <div class="col-lg-10 button-group-area mt-100">

                <div class="card">
                    <div class="card-header">
                        <h2>{{$restaurant->name}}</h2>
                    </div>
                    <div class="card-body">
                        {!! QrCode::size(300)->generate($qrlink) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection