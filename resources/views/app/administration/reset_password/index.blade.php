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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo Institucional</th>
                            <th>Clave</th>
                            <th>Correo Personal</th>
                            <th>Tipo de Problema</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $result->user->first_name." ".$result->user->last_name }}</td>
                                <td>{{ $result->Email->email }}</td>
                                <td>{{ $result->Email->password }}</td>
                                <td>{{ $result->personal_email }}</td>
                                <td>{{ $result->type_of_problem }}</td>
                                <td><a class="btn btn-info btn-sm" href="{{ route('admin.edit', $result->user_id)  }}">Editar <i class="fa fa-pencil fa-lg"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo Institucional</th>
                            <th>Clave</th>
                            <th>Correo Personal</th>
                            <th>Tipo de Problema</th>
                            <th>Accion</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="box-footer">
                    Email Institucional
                </div>
            </div>
        </section>
    @endsection
