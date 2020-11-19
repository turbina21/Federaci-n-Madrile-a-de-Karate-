@extends('pages.tables.casos.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER CASOS ESPECIALES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('casos.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO:</strong>
            {{ $casos->CASCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO INSCRIPCIÓN:</strong>
            {{ $casos->INSCÓDIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>IMPEDIMENTO FÍSICO:</strong>
            {{ $casos->CASIMPEDIMENTOFISICO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CERTIFICADO MÉDICO:</strong>
            {{ $casos->CASCERTIFICADOMEDICO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>INFORME:</strong>
            {{ $casos->CASINFORME }}
        </div>
    </div>
</div>
@endsection