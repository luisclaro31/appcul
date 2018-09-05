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
                            @if(!empty($email_password) )
                                <h3><strong><font color="#DF0101">Tu solicitud para una nueva contraseña esta en proceso.</font></strong></h3>
                                <p><strong><font color="#DF0101">la nueva contraseña se enviará a tu correo personal y se publicará en este sitio web.</font></strong></p>
                            @else
                                    <h3><strong>{{ $result->password." " }}</strong><a  href="{{ url('/student/email_password/create') }}" class="btn btn-warning btn-sm">Solicitar Cambio</a></h3>
                            @endif
                        @endforeach
                    </div>
                    <div>
                        @if(!empty($email_password) )
                            @forelse($results as $result)
                                <ul>
                                    <h3>Guia para configuracion cuenta de correo.</h3>
                                    <il>
                                        <strong>1.     configuramos nuestra contraseña en el portal de office 365.</strong>
                                        <ul>- Ingresamos la pagina de office 365 <a href="https://portal.office.com" target="_blank"><strong> https://portal.office.com </strong></a>.</ul>
                                        <ul>- Copiamos el correo <strong><font color="#DF0101">{{ $result->email }}</font></strong> y la contraseña <strong><font color="#DF0101">EN MODIFICACION</font></strong> en la página de office 365.</ul>
                                        <ul>- Al intentar iniciar sesión en office 365 solicitará cambio de la contraseña actual.</ul>
                                        <ul>- Te solicitara la contraseña anterior <strong><font color="#DF0101">EN MODIFICACION</font></strong> y una contraseña nueva.</ul>
                                        <ul>- La contraseña nueva debe tener mínimo 8 Dígitos, letras MAYÚSCULAS, letras minúsculas y numeros.</ul>
                                        <ul>- Ejemplo (<strong><font color="#DF0101">EN MODIFICACION</font></strong>)</ul>
                                    </il>
                                    <il>
                                        <strong>2.    Terminado la configuración del correo, seguimos con la plataforma del aula virtual o Moodle.</strong>
                                        <ul>- Con el correo <strong><font color="#DF0101">{{ $result->email }}</font></strong> y la contraseña que se configuro anterior, ingresamos a la pagina <a href="http://moodle.ul.edu.co/" target="_blank"><strong> moodle.ul.edu.co </strong></a></ul>
                                    </il>
                                </ul>
                                <p align="center"><a  href="{{ url('/logout') }}" class="btn btn-primary btn-lg">Cerrar Tu Informacion</a></p>
                            @empty
                                <h2>Error Correo Institucional no disponible.</h2>
                                <p class="lead">En este momento no se encuentra disponible tu correo, pero ponemos a tu disposición este formulario para que solicites la asignación de uno, diligencia completamente el formulario.</p>
                                <iframe src="https://docs.google.com/forms/d/1_mfv40Pu5u97joAofuy5ppsT2QYDjjFT4e2WzIkXZ-4/viewform?embedded=true" width="600" height="1300" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
                                <p align="center"><a  href="{{ url('/logout') }}" class="btn btn-primary btn-lg">Cerrar Tu Informacion</a></p>
                            @endforelse
                        @else
                            @forelse($results as $result)
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
                            @empty
                                <h2>Error Correo Institucional no disponible.</h2>
                                <p class="lead">En este momento no se encuentra disponible tu correo, pero ponemos a tu disposición este formulario para que solicites la asignación de uno, diligencia completamente el formulario.</p>
                                <iframe src="https://docs.google.com/forms/d/1_mfv40Pu5u97joAofuy5ppsT2QYDjjFT4e2WzIkXZ-4/viewform?embedded=true" width="600" height="1300" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
                                <p align="center"><a  href="{{ url('/logout') }}" class="btn btn-primary btn-lg">Cerrar Tu Informacion</a></p>
                            @endforelse
                        @endif

                    </div>
                </div>
                <div class="box-footer">
                    Email Institucional
                </div>
            </div>
        </section>
    @endsection
