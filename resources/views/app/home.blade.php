@extends('theme.layout')

    @section('tittle')
        home
    @endsection

    @section('content')
        <section class="content-header">
            <h1>
                Home
                <small>Bienvenida</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
            </ol>
        </section>
        <section class="content">
            <!--<div class="callout callout-info">
                <h4>Tip!</h4>

                <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
                    is bigger than your content because it prevents extra unwanted scrolling.</p>
            </div>-->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Bienvenida</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <h4>Bienvenid@ ponemos a tu disposición este sitio web que te brinda accesibilidad a consultar tu <a href="{{ url('/student/email') }}"><strong>E-mail institucional, Usuario de MOODLE (Aula Virtual) con su respectiva contraseña.</strong></a> Además desde este semestre encontrarás <a href="{{ url('/student/rating') }}"><strong>tus Notas y sus Semestres.</strong></a>

                    <p><br>Con todo esto queremos invitarte a que nos des tu opinión de lo que está disponible y que quieres encontrar, a lo que deseas tener acceso en el futuro, y si tienes una idea el programa de Ingeniería de Sistemas y sus estudiantes lo haremos realidad.</p><a href="http://www.ul.edu.co/buzon-sugerencias.html"><strong><br>Buzón de Sugerencias.</strong></a><p><a href="#"><br>Correo: <strong>sugerencias@ul.edu.co</strong></a></p></h4>
                </div>
                <div class="box-footer">
                    Enhorabuena esperamos sea de tu ayuda!
                </div>
            </div>
        </section>
    @endsection
