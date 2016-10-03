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
                <li><a href="#"><i class="fa fa-envelope active"></i> Email Institucional</a></li>
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
                    <div align="center">
                        @foreach($results as $result)
                            <h4>E-Mail (Correo Electronico)</h4>
                            <h3><strong>{{ $result->email }}</strong></h3>
                            <h4>Contraseña</h4>
                            <h3><strong>{{ $result->password }}</strong></h3>
                        @endforeach
                    </div>
                    <div>
                        @foreach($results as $result)
                            <ul>
                               <h3>Guia para configuracion cuenta de correo.</h3>
                                <il>
                                    <strong>1.     configuramos nuestra contraseña en el portal de office 365.</strong>
                                    <ul>- Ingresamos la pagina de office 365 <a href="https://portal.office.com" target="_blank"><strong> https://portal.office.com </strong></a>.</ul>
                                    <ul>- Copiamos el correo <strong><font color="#DF0101">{{ $result->email }}</font></strong> y la contraseña <strong><font color="#DF0101">{{ $result->password }}</font></strong> en la página de office 365.</ul>
                                    <ul>- Al intentar iniciar sesión en office 365 solicitará cambio de la contraseña actual.</ul>
                                    <ul>- Te solicitara la contraseña anterior <strong><font color="#DF0101">{{ $result->password }}</font></strong> y una contraseña nueva.</ul>
                                    <ul>- La contraseña nueva debe tener mínimo 8 Dígitos, letras MAYÚSCULAS, letras minúsculas y numeros.</ul>
                                    <ul>- Ejemplo (<strong><font color="#DF0101">{{ $result->password }}</font></strong>)</ul>
                                </il>
                                <il>
                                    <strong>2.    Terminado la configuración del correo, seguimos con la plataforma del aula virtual o Moodle.</strong>
                                    <ul>- Con el correo <strong><font color="#DF0101">{{ $result->email }}</font></strong> y la contraseña que se configuro anterior, ingresamos a la pagina <a href="http://moodle.ul.edu.co/" target="_blank"><strong> moodle.ul.edu.co </strong></a></ul>
                                </il>
                            </ul>
                            <p align="center"><a  href="{{ url('/logout') }}" class="btn btn-primary btn-lg">Cerrar Tu Informacion</a></p>
                        @endforeach
                    </div>
                </div>
                <div class="box-footer">
                    Email Institucional
                </div>
            </div>
        </section>
    @endsection
