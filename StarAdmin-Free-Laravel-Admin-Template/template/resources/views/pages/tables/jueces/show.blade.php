@extends('pages.tables.jueces.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER JUEZ</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jueces.index') }}"> REGRESAR</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÉDUÑA:</strong>
            {{ $jueces->JUECEDULA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO TRIBUNAL:</strong>
            {{ $jueces->TRICODIGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>DIPLOMA:</strong>
            {{ $jueces->JUEDIPLOMA }}
        </div>
    </div>
</div>
@endsection