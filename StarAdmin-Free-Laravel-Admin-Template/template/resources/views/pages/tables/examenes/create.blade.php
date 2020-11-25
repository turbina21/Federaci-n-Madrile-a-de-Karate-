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
                <select class="form-control" name="EVECODIGO" id="EVECODIGO">
                    @php
                    use App\Evento;
                    $eventos = Evento::all();
                    @endphp
                    @foreach ($eventos as $evento)
                    <option value="{{$evento->EVECODIGO}}">{{$evento->EVECODIGO}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO TRIBUNAL:</strong>
                <select class="form-control" name="TRICODIGO" id="TRICODIGO">
                    @php
                    use App\Tribunal;
                    $tribunales = Tribunal::all();
                    @endphp
                    @foreach ($tribunales as $tribunal)
                    <option value="{{$tribunal->TRICODIGO}}">{{$tribunal->TRICODIGO}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CATEGORÍA:</strong>
                <select class="form-control" name="EXACATEGORIA" id="EXACATEGORIA">
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
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
                <textarea type="text" name="EXAOBSERVACIONES" class="form-control" placeholder="Informe"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>

@endsection