@extends('pages.tables.aspirantes.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER ASPIRANTE</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('aspirantes.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÉDULA:</strong>
            {{ $aspirantes->ASPCEDULA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NOMBRE:</strong>
            {{ $aspirantes->ASPNOMBRE }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>APELLIDO:</strong>
            {{ $aspirantes->ASPAPELLIDO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FECHA DE NACIMIENTO:</strong>
            {{ $aspirantes->ASPFECHANACIMIENTO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>LICENCIA:</strong>
            {{ $aspirantes->ASPLICENCIA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>GRADO ACTUAL:</strong>
            {{ $aspirantes->ASPGRADOACTUAL }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FECHA DE GRADO ACTUAL:</strong>
            {{$aspirantes->ASPFECHAGRADOACTUAL}}           
        </div>
    </div>
</div>
@endsection