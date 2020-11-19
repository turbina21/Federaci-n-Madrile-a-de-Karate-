@extends('pages.tables.inscripciones.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER INSCRIPCIÓN</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inscripciones.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO:</strong>
            {{ $inscripciones->INSCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO EXÁMEN:</strong>
            {{ $inscripciones->EXACODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO REQUISITO:</strong>
            {{ $inscripciones->REQCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO CONVALIDACIÓN:</strong>
            {{ $inscripciones->CONCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÉDULA DEL ASPIRANTE:</strong>
            {{ $inscripciones->ASPCEDULA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO CASO ESPECIAL:</strong>
            {{ $inscripciones->CASCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FECHA DE INSCRIPCIÓN:</strong>
            {{$inscripciones->INSFECHA}}           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>GRADO:</strong>
            {{$inscripciones->INSGRADO}}           
        </div>
    </div>
</div>
@endsection