@extends('layouts.auth')

@section('content')
    <section id="wrapper" class="login-register" style="background-color: grey;">
        <div class="login-box">
            <div class="white-box" style="padding: 60px;">

                <form class="form-horizontal form-material" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3 class="box-title m-b-20">Ingresar</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                                   name="email" type="email" value="{{old('email')}}" placeholder="Correo eletrónico">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                   type="password" placeholder="Contraseña">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div>
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Iniciar Sesión</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>
@endsection
