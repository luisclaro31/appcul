@extends('theme.layout')

    @section('tittle')
        Campus Estudiante
    @endsection

    @section('content')
        <section class="content-header">
            <h1>
                Campus Estudiante
                <small>Disfruta de tu información académica desde cualquier lugar</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-file-text"></i> Campus Estudiante</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Campus Estudiante</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div align="center">
                        <a href="https://goo.gl/43onHn" target="_blank">
                            <img src="{{ asset('Campus_Cul.png') }}" class="img-thumbnail">
                        </a>
                    </div>
                </div>
                <div class="box-footer">
                    Campus Estudiante
                </div>
            </div>
        </section>
    @endsection
