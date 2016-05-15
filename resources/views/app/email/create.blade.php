@extends('theme.layout')

    @section('tittle')
        email
    @endsection

    @section('content')
        <section class="content-header">
            <h1>
                Email Institucinal - Moodle
                <small>Configuracion del correo institucional para Moodle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-envelope active"></i> Recuperar Contraseña y/o Usuario </a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Email Institucinal</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <iframe src="https://docs.google.com/forms/d/1_mfv40Pu5u97joAofuy5ppsT2QYDjjFT4e2WzIkXZ-4/viewform?embedded=true" width="1000" height="1500" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
                </div>
                <div class="box-footer">
                    Email Institucional - para mayor info: Sala de Profesores 2do piso del Bloque A
                </div>
            </div>
        </section>
    @endsection
