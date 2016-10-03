@extends('theme.layout')

    @section('tittle')
        notas
    @endsection

    @section('content')
        <section class="content-header">
            <h1>
                Calificaciones
                <small>divididas por programa academico</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-file-text active"></i> Calificaciones</a></li>
            </ol>
        </section>
        @foreach($results as $result)
            @foreach($result->student as $student)
                <section class="content">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $student->code }} - {{ $student->program->description }}</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td colspan="3"><h5 align="center"><strong>Nota:</strong> La información de esta página no puede ser utilizada  como certificado ante ninguna entidad externa.</h5></td>
                                    </tr>
                                    <tr>
                                        <th>Asignatura</th>
                                        <th>Periodo</th>
                                        <th>Calificacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student->rating as $rating)
                                        <tr>
                                            <td>{{ $rating->subject->description }}</td>
                                            <td>{{ $rating->period }}</td>
                                            <td>{{ $rating->value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Asignatura</th>
                                    <th>Periodo</th>
                                    <th>Calificacion</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box-footer">
                            <strong>Nota:</strong> La información de esta página no puede ser utilizada  como certificado ante ninguna entidad externa.
                        </div>
                    </div>
                </section>
            @endforeach
        @endforeach
    @endsection