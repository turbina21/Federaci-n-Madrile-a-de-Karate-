@extends('pages.tables.requisitos.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER REQUISITO</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('requisitos.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO:</strong>
            {{ $requisitos->REQCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO INSCRIPCIÓN:</strong>
            {{ $requisitos->INSCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FOTOCOPOIA CARNET:</strong>
            {{ $requisitos->REQFOTOCOPIACARNET }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FOTOCOPOIA CEDULA:</strong>
            {{ $requisitos->REQFOTOCOPIACEDULA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FOTOGRAFÍAS:</strong>
            {{ $requisitos->REQFOTOGRAFIAS }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>SOLICITUD:</strong>
            {{ $requisitos->REQSOLICITUD}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>TRABAJO:</strong>
            {{$requisitos->REQTRABAJO}}           
        </div>
    </div>
</div>
@endsection