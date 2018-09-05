@extends('theme.layout')

    @section('tittle')
        Solicitar Contraseña
    @endsection

    @section('content')
        <section class="content-header">
            <h1>
                Solicitar Contraseña de Email Institucinal - Moodle
                <small>Configuracion del correo institucional para Moodle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-envelope active"></i> Solicitar Contraseña </a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Solicitar Contraseña</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @include('app.data_update.design.partials.messages')

                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif

                    {!! Form::open(['method' => 'POST', 'route' => 'student.email_password.store', 'files' => 'true', 'novalidate' ]) !!}
                        <div class="form-group">
                            <!--{!! Form::label('user_id', 'user_id') !!}-->
                            {!! Form::text('user_id', $user_id->id,['class' => 'form-control', 'placeholder' => 'user_id', 'readonly', 'style' => 'display:none']) !!}
                        </div>
                        <div class="form-group">
                            <!--{!! Form::label('email_id', 'email_id') !!}-->
                            {!! Form::text('email_id', $email_id->id,['class' => 'form-control', 'placeholder' => 'email_id', 'readonly', 'style' => 'display:none']) !!}
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('personal_email') ? ' has-error' : '' }}">
                            {!! Form::label('personal_email', 'Email personal') !!}
                            {!! Form::email('personal_email', null,['class' => 'form-control', 'placeholder' => 'Email personal']) !!}
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('phone') ? ' has-error' : '' }}">
                            {!! Form::label('phone', 'Celular') !!}
                            {!! Form::text('phone', null,['class' => 'form-control', 'placeholder' => 'Celular']) !!}
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('type_of_problem') ? ' has-error' : '' }}">
                            {!! Form::label('type_of_problem', 'Problema Con La Contraseña') !!}
                            {!! Form::select('type_of_problem', ['' => 'Seleccionar', 'Error de Contrasena' => 'Error de Contraseña', 'Perdida de Contrasena' => 'Perdida de Contraseña', 'No Aparece Contrasena' => 'No aparece Contraseña'], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <!--{!! Form::label('category', 'category') !!}-->
                            {!! Form::text('category', 2,['class' => 'form-control', 'placeholder' => 'category', 'readonly', 'style' => 'display:none']) !!}
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle fa-lg"></i> Crear Solicitud</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-footer">
                    Email Institucional
                </div>
            </div>
        </section>
    @endsection
