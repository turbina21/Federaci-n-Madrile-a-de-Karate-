@extends('pages.tables.examenes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITAR EXÁMENES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> REGRESAR</a>
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

<form action="{{ route('examenes.update',$examenes->CASCODIGO )}}" method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')  }}
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="EXACODIGO" value="{{ $examenes->EXACODIGO }}" class="form-control" placeholder="Código">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO EVENTO:</strong>
                <input type="text" name="EVECODIGO" value="{{ $examenes->EVECODIGO }}" class="form-control" placeholder="Código Inscripción">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TRIBUNAL CÓDIGO:</strong>
                <input type="text" name="TRICODIGO" value="{{ $examenes->TRICODIGO}}" class="form-control" placeholder="Impedimento Físico">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CATEGORÍA:</strong>
                <input type="text" name="EXACATEGORIA" value="{{ $examenes->EXACATEGORIA }}" class="form-control" placeholder="Certificado Médico">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CALIFICACIÓN TOTAL:</strong>
                <input type="checkbox" name="EXACALIFICACIONTOTAL" value="{{ $examenes->EXACALIFICACIONTOTAL }}" class="form-control" placeholder="Informe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BLOQUE COMÚN:</strong>
                <input type="checkbox" name="EXABLOQUECOMUN" value="{{ $examenes->EXABLOQUECOMUN }}" class="form-control" placeholder="Informe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BLOQUE ESPECÍFICO:</strong>
                <input type="checkbox" name="EXABLOQUEESPECIFICO" value="{{ $examenes->EXABLOQUEESPECIFICO }}" class="form-control" placeholder="Informe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>OBSERVACIONES:</strong>
                <textarea type="text" name="EXABLOQUEESPECIFICO" value="{{ $examenes->EXABLOQUEESPECIFICO }}" class="form-control" placeholder="Informe"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection