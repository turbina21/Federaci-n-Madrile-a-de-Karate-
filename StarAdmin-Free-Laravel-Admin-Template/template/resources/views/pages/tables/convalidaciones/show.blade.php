@extends('pages.tables.convalidaciones.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER CONVALIDACIÓN</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('convalidaciones.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO:</strong>
            {{ $convalidaciones->CONCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO INSCRIPCIÓN:</strong>
            {{ $convalidaciones->INSCODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PAÍS:</strong>
            {{ $convalidaciones->CONPAIS }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>TIEMPO DE PERMANENCIA:</strong>
            {{ $convalidaciones->CONTIEMPOPERMANENCIA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CURRICULUM VISADO:</strong>
            {{ $convalidaciones->CONCURRICULUMVISADO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ACREDITACIÓN:</strong>
            {{ $convalidaciones->CONACREDITACION }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>COPIA DE TÍTULOS:</strong>
            {{$convalidaciones->CONCOPIATITULOS}}           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PLAN DE ESTUDIOS:</strong>
            {{$convalidaciones->CONPLANESTUDIO}}           
        </div>
    </div>
</div>
@endsection