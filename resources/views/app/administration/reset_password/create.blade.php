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

                    {!! Form::model($result, ['method' => 'PUT', 'route' => ['admin.update', $result], 'files' => 'true', 'novalidate' ]) !!}
                        <div class="form-group">
                            <!--{!! Form::label('id', 'id') !!}-->
                            {!! Form::text('id', null,['class' => 'form-control', 'placeholder' => 'id', 'readonly', 'style' => 'display:none']) !!}
                        </div>
                        <div class="form-group">
                        <!--{!! Form::label('user_id', 'user_id') !!}-->
                            {!! Form::text('user_id', null,['class' => 'form-control', 'placeholder' => 'user_id', 'readonly', 'style' => 'display:none']) !!}
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'Email Institucional') !!}
                            {!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'Email Institucional', 'readonly']) !!}
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::label('password', 'Contraseña') !!}
                            {!! Form::email('password', null,['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
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
