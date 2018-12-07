@extends('layouts.app')

@section('pageTitle','Lista de Usuarios')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4> Lista de usuarios</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <div class="card-body row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table id="allUsers" class="table">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nombres</td>
                                    <td>DNI</td>
                                    <td>Ubicación</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $index=>$user)
                                    <tr>
                                        <td>{{++$index}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->dni}}</td>
                                        <td>
                                            <a href="{{route('users.tracking',$user->id)}}"
                                               aria-label="Ubicación" data-original-title="Ubicación"
                                               data-toggle="tooltip">
                                                <i class="fa fa-map-marker text-inverse m-r-10"></i>
                                                Ver Ubicación
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection