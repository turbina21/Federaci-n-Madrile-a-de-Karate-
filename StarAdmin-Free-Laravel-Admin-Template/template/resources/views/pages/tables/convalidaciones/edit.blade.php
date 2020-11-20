@extends('pages.tables.convalidaciones.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITAR CONVALIDACIONES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('convalidaciones.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('convalidaciones.update',$convalidaciones->CONCODIGO )}}" method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')  }}
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="CONCODIGO" value="{{ $convalidaciones->CONCODIGO }}" class="form-control" placeholder="Código">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PAÍS:</strong>
                <input type="text" name="CONPAIS" value="{{ $convalidaciones->CONPAIS}}" class="form-control" placeholder="PAÍS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TIEMPO DE PERMANENCIA:</strong>
                <input type="number" name="CONTIEMPOPERMANENCIA" value="{{ $convalidaciones->CONTIEMPOPERMANENCIA }}" class="form-control" placeholder="Tiempo de Permanencia">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CURRICULUM VISADO:</strong>
                <input type="checkbox" name="CONCURRICULUMVISADO" value="{{ $convalidaciones->CONCURRICULUMVISADO }}" class="form-control" placeholder="Curriculum Visado">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ACREDITACIÓN:</strong>
                <input type="checkbox" name="CONACREDITACION" value="{{ $convalidaciones->CONACREDITACION }}" class="form-control" placeholder="Acreditación">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>COPIA DE TÍTULOS:</strong>
                <input type="checkbox" name="CONCOPIATITULOS" value="{{ $convalidaciones->CONCOPIATITULOS }}" class="form-control" placeholder="Copia de títulos">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PLANES DE ESTUDIO:</strong>
                <input type="checkbox" name="CONPLANESTUDIO" value="{{ $convalidaciones->CONPLANESTUDIO }}" class="form-control" placeholder="Plan de estudio">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection