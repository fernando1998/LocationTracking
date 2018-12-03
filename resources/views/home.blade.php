@extends('layouts.app')

@section('pageTitle','Tablero')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4> {{ __('Bienvenido!') }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title"><i class="fa fa-users text-info"></i> Usuarios</h3>
                <div class="text-right">
                    <h1><a class="btn btn-block btn-info btn-rounded" href="{{route('users.index')}}"> Ver</a></h1>
                </div>
            </div>
        </div>

    </div>
@endsection