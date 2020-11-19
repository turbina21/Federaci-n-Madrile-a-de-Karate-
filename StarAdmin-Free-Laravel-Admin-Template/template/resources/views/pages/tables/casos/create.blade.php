@extends('pages.tables.casos.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>AÑADIR CASOS ESPECIALES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('casos.index') }}"> Regresar</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Problemas con ingreso de datos.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('casos.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="CASCODIGO" class="form-control" placeholder="Código">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO INSCRIPCIÓN:</strong>
                <input type="text" name="INSCODIGO" class="form-control" placeholder="Código Inscripción">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IMPEDIMENTO FÍSICO:</strong>
                <input type="text" name="CASIMPEDIMENTOFISICO" class="form-control" placeholder="Impedimento Físico">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CERTIFICADO MÉDICO:</strong>
                <input type="checkbox" name="CASCERTIFICADOMEDICO" class="form-control" placeholder="Certificado Médico" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>INFORME:</strong>
                <input type="checkbox" name="CASINFORME" class="form-control" placeholder="Informe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>

@endsection