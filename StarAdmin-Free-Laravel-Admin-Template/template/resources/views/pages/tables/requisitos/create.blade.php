@extends('pages.tables.requisitos.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>AÑADIR REQUISITOS</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('requisitos.index') }}"> REGRESAR</a>
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

<form action="{{ route('requisitos.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="REQCODIGO"  class="form-control" placeholder="Código">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTOCOPIA CARNET:</strong>
                <input type="checkbox" name="REQFOTOCOPIACARNET"  class="form-control" placeholder="Curriculum Visado">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTOCOPIA CÉDULA:</strong>
                <input type="checkbox" name="REQFOTOCOPIACEDULA"  class="form-control" placeholder="Acreditación">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTOGRAFIAS:</strong>
                <input type="checkbox" name="REQFOTOGRAFIAS"  class="form-control" placeholder="Copia de títulos">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SOLICITUD:</strong>
                <input type="checkbox" name="REQSOLICITUD"  class="form-control" placeholder="Plan de estudio">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TRABAJO:</strong>
                <input type="checkbox" name="REQTRABAJO"  class="form-control" placeholder="Plan de estudio">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>

@endsection