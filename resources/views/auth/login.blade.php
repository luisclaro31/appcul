@extends('auth.design.layout')

    @section('tittle')
        login in
    @endsection

    @section('content')
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><img src="{{ asset ('theme/logo.png') }}" alt=""></a>
            </div>
            <div class="login-box-body">
                @if ( count($errors) > 0)
                    <p><h4 align="center"><span class="label label-danger">Error De Identificacion</span></h4></p>
                @else
                    <p class="login-box-msg">Identificacion para Estudiantes y Docentes</p>
                @endif

                {!! Form::open(['method' => 'POST', 'url' => '/login' ]) !!}
                    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Identificacion']) !!}
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::text('password', '$2y$10$8Zq6VLUoieP75', ['class' => 'form-control', 'placeholder' => 'Clave Temporal', 'readonly']) !!}
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    {!! Form::checkbox('remember', 'value') !!} Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            {!! Form::submit('Consultar!', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}

                <a href="#">Para Reportar Errores Admisiones Modulo 7 y 8 </a><br>
                <!-- <a href="#" class="text-center">Register a new membership</a> -->
            </div>
        </div>
    @endsection