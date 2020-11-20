@extends('pages.tables.eventos.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER EVENTO</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO:</strong>
            {{ $eventos->EVECODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FECHA:</strong>
            {{ $eventos->EVEFECHA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>HORA:</strong>
            {{ $eventos->EVEHORA}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>LUGAR:</strong>
            {{ $eventos->EVELUGAR }}
        </div>
    </div>
</div>
@endsection