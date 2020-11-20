@extends('pages.tables.examenes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>AÑADIR EXÁMENES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> REGRESAR</a>
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

<form action="{{ route('examenes.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="EXACODIGO" class="form-control" placeholder="Código">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO EVENTO:</strong>
                <input type="text" name="EVECODIGO" class="form-control" placeholder="Código Inscripción">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO TRIBUNAL:</strong>
                <input type="text" name="TRICODIGO" class="form-control" placeholder="Código Inscripción">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CATEGORÍA:</strong>
                <input type="text" name="EXACATEGORIA" class="form-control" placeholder="Impedimento Físico" list="exampleList">
                <datalist id="exampleList">
                    <option value="A-PRIMER DAN">
                    <option value="A-SEGUNDO DAN">
                    <option value="A-TERCERDAN">
                    <option value="B-CUARTODAN">
                </datalist>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CALIFICACIÓN TOTAL:</strong>
                <input type="checkbox" name="EXACALIFICACIONTOTAL" class="form-control" placeholder="Certificado Médico">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BLOQUE COMÚN:</strong>
                <input type="checkbox" name="EXABLOQUECOMÚN" class="form-control" placeholder="Informe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BLOQUE ESPECÍFICO:</strong>
                <input type="checkbox" name="EXABLOQUEESPECIFICO" class="form-control" placeholder="Informe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>OBSERVACIONES:</strong>
                <input type="text" name="EXAOBSERVACIONES" class="form-control" placeholder="Informe"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>

@endsection