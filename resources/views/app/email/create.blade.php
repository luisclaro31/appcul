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
                    <h2>Error Correo Institucional no disponible.</h2>
                    <p class="lead">En este momento no se encuentra disponible tu correo, pero ponemos a tu disposición este formulario para que solicites la asignación de uno, diligencia completamente el formulario.</p>
                    <iframe src="https://docs.google.com/forms/d/1_mfv40Pu5u97joAofuy5ppsT2QYDjjFT4e2WzIkXZ-4/viewform?embedded=true" width="600" height="1300" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
                </div>
                <div class="box-footer">
                    Email Institucional
                </div>
            </div>
        </section>
    @endsection
