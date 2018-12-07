@extends('layouts.app')

@section('pageTitle','Ubicación del Usuario')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h4> Ubicación de {{$user->name}}</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="white-box" id="app">
                <tracking-map></tracking-map>
            </div>
        </div>
    </div>
@endsection