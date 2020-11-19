@extends('pages.tables.inscripciones.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITAR INSCRIPCIÓN</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inscripciones.index') }}"> REGRESAR</a>
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

<form action="{{ route('inscripciones.update',$inscripciones->INSCODIGO )}}" method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')  }}
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="INSCODIGO" value="{{ $inscripciones->INSCODIGO }}" class="form-control" placeholder="Cédula">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO EXÁMEN:</strong>
                <input type="text" name="EXACODIGO" value="{{ $inscripciones->EXACODIGO }}" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO CONVALIDACIÓN:</strong>
                <input type="text" name="CONCODIGO" value="{{ $inscripciones->CONCODIGO}}" class="form-control" placeholder="Apellido">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA ASPIRANTE:</strong>
                <input type="date" name="ASPCEDULA" value="{{ $inscripciones->ASPCEDULA }}" class="form-control" placeholder="Fecha de Nacimiento">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO CASO ESPECIAL:</strong>
                <input type="text" name="CASCODIGO" value="{{ $inscripciones->CASCODIGO }}" class="form-control" placeholder="Licencia">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA DE INSCRIPCIÓN:</strong>
                <input type="text" name="INSFECHA" value="{{ $inscripciones->INSFECHA }}" class="form-control" placeholder="Grado Actual">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>GRADO:</strong>
                <input type="date" name="INSGRADO" value="{{ $inscripciones->INSGRADO }}" class="form-control" placeholder="FechaGrado Actual">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection