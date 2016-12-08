@extends('theme.layout')

    @section('tittle')
        Actualización de Datos Semestral
    @endsection

    @section('content')
        <section class="content-header">
            <h1>
                Actualización de Datos Semestral
                <small>Diligencia tu información actual</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-database active"></i> Actualización de Datos Semestral </a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Formulario de Actualización</h3>

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

                    {!! Form::model($user, ['method' => 'POST', 'route' => 'student.data_update.store', 'files' => 'true', 'novalidate' ]) !!}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <!-- {!! Form::label('user_id', 'Id Usuario') !!} -->
                                        {!! Form::text('user_id', Auth::user()->id,['class' => 'form-control', 'placeholder' => 'Id Usuario', 'readonly', 'style' => 'display:none']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('identification') ? ' has-error' : '' }}">
                                        {!! Form::label('identification', '# de Documento') !!}
                                        {!! Form::text('identification', null,['class' => 'form-control', 'placeholder' => '# de Documento', 'autofocus']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        {!! Form::label('last_name', 'Nombres') !!}
                                        {!! Form::text('last_name', null,['class' => 'form-control', 'placeholder' => 'Nombres']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        {!! Form::label('first_name', 'Apellidos') !!}
                                        {!! Form::text('first_name', null,['class' => 'form-control', 'placeholder' => 'Apellidos']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('birth_date') ? ' has-error' : '' }}">
                                        {!! Form::label('birth_date', 'Fecha de nacimiento') !!}
                                        {!! Form::date('birth_date', 'AAAA-MM-DD', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('age') ? ' has-error' : '' }}">
                                        {!! Form::label('age', 'Edad actual') !!}
                                        {!! Form::selectRange('age',14, 100, null, ['class' => 'form-control', 'placeholder' => 'Edad actual']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('birth_municipality_id') ? ' has-error' : '' }}">
                                        {!! Form::label('birth_municipality_id', 'Municipio de nacimiento') !!}
                                        {!! Form::select('birth_municipality_id', ['' => 'Seleccionar', '1' => 'No es de Colombia', 'Municipio de Colombia' => $municipalities,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('birth_country_id') ? ' has-error' : '' }}">
                                        {!! Form::label('birth_country_id', 'Pais de nacimiento') !!}
                                        {!! Form::select('birth_country_id', ['' => 'Seleccionar', 'Pais de nacimiento' => $countries,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('personal_email') ? ' has-error' : '' }}">
                                        {!! Form::label('personal_email', 'Email personal') !!}
                                        {!! Form::email('personal_email', null,['class' => 'form-control', 'placeholder' => 'Email personal']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('one_phone') ? ' has-error' : '' }}">
                                        {!! Form::label('one_phone', 'Telefono o celular #1') !!}
                                        {!! Form::text('one_phone', null,['class' => 'form-control', 'placeholder' => 'Telefono o celular #1']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('two_phone') ? ' has-error' : '' }}">
                                        {!! Form::label('two_phone', 'Telefono o celular #2') !!}
                                        {!! Form::text('two_phone', null,['class' => 'form-control', 'placeholder' => 'Telefono o celular #2']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('residence_municipality_id') ? ' has-error' : '' }}">
                                        {!! Form::label('residence_municipality_id', 'Municipio donde reside actualmente') !!}
                                        {!! Form::select('residence_municipality_id', ['' => 'Seleccionar', 'Municipio de Residencia' => $municipalities,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('residence_address') ? ' has-error' : '' }}">
                                        {!! Form::label('residence_address', 'Direccion donde reside actualmente') !!}
                                        {!! Form::text('residence_address', null,['class' => 'form-control', 'placeholder' => 'Direccion de residencia']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('residential_area') ? ' has-error' : '' }}">
                                        {!! Form::label('residential_area', 'Zona residencial') !!}
                                        {!! Form::select('residential_area', ['' => 'Seleccionar', 'Urbana' => 'Urbana', 'Rural' => 'Rural'], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('civil_state_id') ? ' has-error' : '' }}">
                                        {!! Form::label('civil_state_id', 'Estado civil') !!}
                                        {!! Form::select('civil_state_id', ['' => 'Seleccionar', 'Estado civil' => $civil_states,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('sex_id') ? ' has-error' : '' }}">
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
                                                <div class="form-group has-feedback {{ $errors->has('sexual_orientation_id') ? ' has-error' : '' }}">
                                                    {!! Form::select('sexual_orientation_id', ['' => 'Seleccionar', 'orientación sexual' => $sexual_orientations,], null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-feedback {{ $errors->has('program_id') ? ' has-error' : '' }}">
                                        {!! Form::label('program_id', 'Programa actual') !!}
                                        {!! Form::select('program_id', ['' => 'Seleccionar', 'Programa actual' => $programs,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('schedule_id') ? ' has-error' : '' }}">
                                        {!! Form::label('schedule_id', 'Horario de clases') !!}
                                        {!! Form::select('schedule_id', ['' => 'Seleccionar', 'Horario de clases' => $schedules,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('semester') ? ' has-error' : '' }}">
                                        {!! Form::label('semester', 'Semestre actual') !!}
                                        {!! Form::selectRange('semester',1, 10, null, ['class' => 'form-control', 'placeholder' => 'Semestre Actual']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('credit_id') ? ' has-error' : '' }}">
                                        {!! Form::label('credit_id', 'Su semestre actual se encuentra financiado a crédito? Elija la entidad o Seleccione No de lo contrario') !!}
                                        {!! Form::select('credit_id', ['' => 'Seleccionar', '1' => 'Pago de Contado', 'Elija la entidad' => $credits,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('ethnic_group_id') ? ' has-error' : '' }}">
                                        {!! Form::label('ethnic_group_id', 'Pertenece a un Grupo Etnico cual? Elija el Grupo o Seleccione No de lo contrario') !!}
                                        {!! Form::select('ethnic_group_id', ['' => 'Seleccionar', '1' => 'No Aplica', 'Grupo Etnico' => $ethnic_groups,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('indigenous_people_id') ? ' has-error' : '' }}">
                                        {!! Form::label('indigenous_people_id', 'Pertenece algun Pueblo Indigena cual? Elija el Pueblo o Seleccione No de lo contrario') !!}
                                        {!! Form::select('indigenous_people_id', ['' => 'Seleccionar', '1' => 'No Aplica', 'Pueblo Indigena' => $indigenous_peoples,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('black_community_id') ? ' has-error' : '' }}">
                                        {!! Form::label('black_community_id', 'Pertenece alguna Comunidad Afrodescendiente cual? Elija la Comunidad o Seleccione No de lo contrario') !!}
                                        {!! Form::select('black_community_id', ['' => 'Seleccionar', '1' => 'No Aplica', 'Comunidad Afrodescendiente' => $black_communities,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('victim_type_id') ? ' has-error' : '' }}">
                                        {!! Form::label('victim_type_id', 'Se encuentra en el registro único de víctimas? Elija el tipo al que pertenece o Seleccione No de lo contrario?') !!}
                                        {!! Form::select('victim_type_id', ['' => 'Seleccionar', '1' => 'No Aplica', 'Tipo de Victima' => $victim_types,], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('disability_type_id') ? ' has-error' : '' }}">
                                        {!! Form::label('disability_type_id', 'Es persona en condición de discapacidad? Elija el tipo de condición de discapacidad o Seleccione No de lo contrario?') !!}
                                        {!! Form::select('disability_type_id', ['' => 'Seleccionar', '1' => 'No Aplica', 'Tipo de Discapacidad' => $disability_types,], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="well">
                                                <h4>Información de un Familiar</h4>
                                                <div class="form-group has-feedback {{ $errors->has('one_full_name_family') ? ' has-error' : '' }}">
                                                    {!! Form::label('one_full_name_family', 'Nombre del Familiar') !!}
                                                    {!! Form::text('one_full_name_family', null,['class' => 'form-control', 'placeholder' => 'Nombre del Familiar']) !!}
                                                </div>
                                                <div class="form-group has-feedback {{ $errors->has('one_relationship_family') ? ' has-error' : '' }}">
                                                    {!! Form::label('one_relationship_family', 'Relacion con el Familiar') !!}
                                                    {!! Form::select('one_relationship_family', ['' => 'Seleccionar', 'Papa' => 'Papa', 'Mama' => 'Mama', 'Heman@' => 'Herman@', 'Espos@' => 'Espos@', 'Hij@' => 'Hij@', 'Otro Familiar' => 'Otro Familiar'], null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="form-group has-feedback {{ $errors->has('one_phone_family') ? ' has-error' : '' }}">
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
                                                <div class="form-group has-feedback {{ $errors->has('two_full_name_family') ? ' has-error' : '' }}">
                                                    {!! Form::label('two_full_name_family', 'Nombre del Familiar') !!}
                                                    {!! Form::text('two_full_name_family', null,['class' => 'form-control', 'placeholder' => 'Nombre del Familiar']) !!}
                                                </div>
                                                <div class="form-group has-feedback {{ $errors->has('two_relationship_family') ? ' has-error' : '' }}">
                                                    {!! Form::label('two_relationship_family', 'Relacion con el Familiar') !!}
                                                    {!! Form::select('two_relationship_family', ['' => 'Seleccionar', 'Papa' => 'Papa', 'Mama' => 'Mama', 'Heman@' => 'Herman@', 'Espos@' => 'Espos@', 'Hij@' => 'Hij@', 'Otro Familiar' => 'Otro Familiar'], null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="form-group has-feedback {{ $errors->has('two_phone_family') ? ' has-error' : '' }}">
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
                    Actualización de Datos Semestral
                </div>
            </div>
        </section>
    @endsection
