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
                        <button type="button" class="btn btn-box-tool" dsexual_orientation_idata-widget="collapse" data-toggle="tooltip" title="Collapse">
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

                    {!! Form::model($user, ['method' => 'POST', 'route' => 'student.data_update.store', 'files' => 'true', 'novalidate' ]) !!}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('user_id', 'Id Usuario') !!}
                                        {!! Form::text('user_id', Auth::user()->id,['class' => 'form-control', 'placeholder' => 'Id Usuario', 'readonly']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('identification', '# de Documento') !!}
                                        {!! Form::text('identification', null,['class' => 'form-control', 'placeholder' => '# de Documento']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('last_name', 'Nombres') !!}
                                        {!! Form::text('last_name', null,['class' => 'form-control', 'placeholder' => 'Nombres', 'autofocus']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('first_name', 'Apellidos') !!}
                                        {!! Form::text('first_name', null,['class' => 'form-control', 'placeholder' => 'Apellidos']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('birth_date', 'Fecha de nacimiento') !!}
                                        {!! Form::date('birth_date', 'AAAA-MM-DD', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('age', 'Edad actual') !!}
                                        {!! Form::selectRange('age',14, 100, null, ['class' => 'form-control', 'placeholder' => 'Edad actual']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('birth_municipality', 'Municipio de nacimiento') !!}
                                        {!! Form::text('birth_municipality', null,['class' => 'form-control', 'placeholder' => 'Municipio de nacimiento']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('birth_country', 'Pais de nacimiento') !!}
                                        {!! Form::text('birth_country', null,['class' => 'form-control', 'placeholder' => 'Pais de nacimiento']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('personal_email', 'Email personal') !!}
                                        {!! Form::email('personal_email', null,['class' => 'form-control', 'placeholder' => 'Email personal']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('one_phone', 'Telefono o celular #1') !!}
                                        {!! Form::text('one_phone', null,['class' => 'form-control', 'placeholder' => 'Telefono o celular #1']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('two_phone', 'Telefono o celular #2') !!}
                                        {!! Form::text('two_phone', null,['class' => 'form-control', 'placeholder' => 'Telefono o celular #2']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('residence_municipality', 'Municipio donde reside actualmente') !!}
                                        {!! Form::text('residence_municipality', null,['class' => 'form-control', 'placeholder' => 'Municipio de residencia']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('residence_address', 'Direccion donde reside actualmente') !!}
                                        {!! Form::text('residence_address', null,['class' => 'form-control', 'placeholder' => 'Direccion de residencia']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('residential_area', 'Zona residencial') !!}
                                        {!! Form::select('residential_area', ['' => 'Seleccionar', 'Urbana' => 'Urbana', 'Rural' => 'Rural'], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('civil_state_id', 'Estado civil') !!}
                                        {!! Form::select('civil_state_id', ['' => 'Seleccionar', 'Estado civil' => $civil_states,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('sex_id', 'Sexo biologico') !!}
                                        {!! Form::select('sex_id', ['' => 'Seleccionar', 'Sexo biologico' => $sexes,], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="well">
                                                <h4>Con cuál orientación sexual se autoreconoce?</h4>
                                                <p><strong>Heterosexual: </strong>atracción sexual hacia las personas del sexo opuesto.</p>
                                                <p><strong>Bisexual: </strong>atracción sexual hacia hombres y mujeres</p>
                                                <p><strong>Homosexual: </strong>atracción sexual entre miembros del mismo sexo o género.</p>
                                                <p><strong>Pansexual: </strong>atracción sexual a todos los géneros, incluyendo géneros no binarios.</p>
                                                <p><strong>Asexual: </strong>orientación sexual de una persona que no siente atracción sexual hacia ninguna otra persona.</p>
                                                <p><strong></strong></p>
                                                <div class="form-group">
                                                    {!! Form::select('sexual_orientation_id', ['' => 'Seleccionar', 'orientación sexual' => $sexual_orientations,], null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('program_id', 'Programa actual') !!}
                                        {!! Form::select('program_id', ['' => 'Seleccionar', 'Programa actual' => $programs,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('schedule_id', 'Horario de clases') !!}
                                        {!! Form::select('schedule_id', ['' => 'Seleccionar', 'Horario de clases' => $schedules,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('semester', 'Semestre actual') !!}
                                        {!! Form::selectRange('semester',1, 10, null, ['class' => 'form-control', 'placeholder' => 'Semestre Actual']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('credit_id', 'Su semestre actual se encuentra financiado a crédito? Elija la entidad o Seleccione No de lo contrario') !!}
                                        {!! Form::select('credit_id', ['' => 'Seleccionar', '1' => 'No', 'Elija la entidad' => $credits,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('ethnic_group_id', 'Pertenece a un Grupo Etnico cual? Elija el Grupo o Seleccione No de lo contrario') !!}
                                        {!! Form::select('ethnic_group_id', ['' => 'Seleccionar', '1' => 'No', 'Grupo Etnico' => $ethnic_groups,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('indigenous_people_id', 'Pertenece algun Pueblo Indigena cual? Elija el Pueblo o Seleccione No de lo contrario') !!}
                                        {!! Form::select('indigenous_people_id', ['' => 'Seleccionar', '1' => 'No', 'Pueblo Indigena' => $indigenous_peoples,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('black_community_id', 'Pertenece alguna Comunidad Afrodescendiente cual? Elija la Comunidad o Seleccione No de lo contrario') !!}
                                        {!! Form::select('black_community_id', ['' => 'Seleccionar', '1' => 'No', 'Comunidad Afrodescendiente' => $black_communities,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('victim_type_id', 'Se encuentra en el registro único de víctimas? Elija el tipo al que pertenece o Seleccione No de lo contrario?') !!}
                                        {!! Form::select('victim_type_id', ['' => 'Seleccionar', '1' => 'No', 'Tipo de Victima' => $victim_types,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('disability_type_id', 'Es persona en condición de discapacidad? Elija el tipo de condición de discapacidad o Seleccione No de lo contrario?') !!}
                                        {!! Form::select('disability_type_id', ['' => 'Seleccionar', '1' => 'No', 'Tipo de Discapacidad' => $disability_types,], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="well">
                                                <h4>Información de un Familiar</h4>
                                                <div class="form-group">
                                                    {!! Form::label('one_full_name_family', 'Nombre del Familiar') !!}
                                                    {!! Form::text('one_full_name_family', null,['class' => 'form-control', 'placeholder' => 'Nombre del Familiar']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('one_relationship_family', 'Relacion con el Familiar') !!}
                                                    {!! Form::text('one_relationship_family', null,['class' => 'form-control', 'placeholder' => 'Relacion con el Familiar']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('one_phone_family', 'Telefono del Familiar') !!}
                                                    {!! Form::text('one_phone_family', null,['class' => 'form-control', 'placeholder' => 'Telefono del Familiar']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="well">
                                                <h4>Información de un Segundo Familiar</h4>
                                                <div class="form-group">
                                                    {!! Form::label('two_full_name_family', 'Nombre del Familiar') !!}
                                                    {!! Form::text('two_full_name_family', null,['class' => 'form-control', 'placeholder' => 'Nombre del Familiar']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('two_relationship_family', 'Relacion con el Familiar') !!}
                                                    {!! Form::text('two_relationship_family', null,['class' => 'form-control', 'placeholder' => 'Relacion con el Familiar']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('two_phone_family', 'Telefono del Familiar') !!}
                                                    {!! Form::text('two_phone_family', null,['class' => 'form-control', 'placeholder' => 'Telefono del Familiar']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle fa-lg"></i> Actualizar mis datos</button>
                    {!! Form::close() !!}

                </div>
                <div class="box-footer">
                    Email Institucional - para mayor info: Sala de Profesores 2do piso del Bloque A
                </div>
            </div>
        </section>
    @endsection