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
                               <h3>Configuracion para Cuentas Nuevas - Cuentas Antiguas salte al paso tres </h3>
                                <il>
                                    <strong>1.     configuramos nuestra contraseña en el portal de office 365.</strong>
                                    <ul>- Entramos a esta página <a href="https://portal.office.com" target="_blank"><strong> https://portal.office.com </strong></a>.</ul>
                                    <ul>- Copiamos el correo <strong>{{ $result->email }}</strong> y contraseña <strong>{{ $result->password }}</strong> que se encuentran en la parte superior.</ul>
                                    <ul>- Solicitara contraseña anterior y una contraseña nueva, la contraseña nueva debe tener mínimo 8 Dígitos, una letra MAYÚSCULA, una letra minúscula y numero Ejemplo ({{ $result->password }}).</ul>
                                </il>
                                <il>
                                    <strong>2.    Terminado la configuración del correo, seguimos con la plataforma del aula virtual o Moodle.</strong>
                                    <ul>- Con el correo {{ $result->email }} y la contraseña que se configuro anterior mente en tramos a la Moodle en esta página <a href="http://190.242.128.234/moodle/" target="_blank"><strong> http://190.242.128.234/moodle/ </strong></a></ul>
                                </il>
                                <il>
                                    <strong>3.    Solo Cuentas Antiguas.</strong>
                                    <ul>- Con el correo {{ $result->email }} y la contraseña {{ $result->password }} en tramos a la Moodle en esta página <a href="http://190.242.128.234/moodle/" target="_blank"><strong> http://190.242.128.234/moodle/ </strong></a></ul>
                                </il>
                            </ul>
                            <p align="center"><a  href="{{ url('/logout') }}" class="btn btn-primary btn-lg">Cerrar Tu Informacion</a></p>
                        @endforeach
                    </div>
                </div>
                <div class="box-footer">
                    Email Institucinal - para mayor info: Admisiones modulo 7
                </div>
            </div>
        </section>
    @endsection
