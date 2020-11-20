@extends('pages.tables.examenes.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER EXÁMEN</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO:</strong>
            {{ $examenes->EXACODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO EVENTO:</strong>
            {{ $examenes->EVECODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>TRIBUNAL CÓDIGO:</strong>
            {{ $examenes->TRICODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CATEGORÍA:</strong>
            {{ $examenes->EXACATEGORIA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CALIFICACIÓN TOTAL:</strong>
            {{ $examenes->EXACALIFICACIONTOTAL }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>BLOQUE COMÚN:</strong>
            {{ $examenes->EXABLOQUECOMUN }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>BLOQUE ESPECÍFICO:</strong>
            {{$examenes->BLOQUEESPECIFICO}}           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>OBSERVACIONES:</strong>
            {{$examenes->EXAOBSERVACIONES}}           
        </div>
    </div>
</div>
@endsection