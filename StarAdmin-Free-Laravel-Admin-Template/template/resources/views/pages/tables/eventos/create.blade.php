@extends('pages.tables.eventos.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>AÑADIR EVENTO</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Regresar</a>
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

<form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="EVECODIGO" class="form-control" placeholder="Código">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA:</strong>
                <input type="date" name="EVEFECHA" class="form-control" placeholder="Fecha">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LUGAR:</strong>
                <input type="text" name="EVELUGAR" class="form-control" placeholder="Lugar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection