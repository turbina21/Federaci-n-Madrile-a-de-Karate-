@extends('pages.tables.aspirantes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>AÑADIR ASPIRANTE</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('aspirantes.index') }}"> Regresar</a>
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

<form action="{{ route('inscripciones.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="INSCODIGO"  class="form-control" placeholder="Cédula">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO EXÁMEN:</strong>
                <select class="form-control" name="EXACODIGO" id="EXACODIGO">
                    @php
                    use App\Examen;
                    $examenes = Examen::all();
                    @endphp
                    @foreach ($examenes as $examen)
                    <option value="{{$examen->EXACODIGO}}">{{$examen->EXACODIGO}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO REQUISITO:</strong>
                <select class="form-control" name="REQCODIGO" id="REQCODIGO">
                    @php
                    use App\Requisito;
                    $requisitos = Requisito::all();
                    @endphp
                    @foreach ($requisitos as $requisito)
                    <option value="{{$requisito->REQCODIGO}}">{{$requisito->REQCODIGO}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO CONVALIDACIÓN:</strong>
                <select class="form-control" name="CONCODIGO" id="CONCODIGO">
                    @php
                    use App\Convalidacion;
                    $convalidaciones = Convalidacion::all();
                    @endphp
                    <option value="null"></option>
                    @foreach ($convalidaciones as $convalidacion)
                    <option value="{{$convalidacion->CONCODIGO}}">{{$convalidacion->CONCODIGO}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA ASPIRANTE:</strong>
                <select class="form-control" name="ASPCEDULA" id="ASPCEDULA">
                    @php
                    use App\Aspirante;
                    $aspirantes = Aspirante::all();
                    @endphp
                    @foreach ($aspirantes as $aspirante)
                    <option value="{{$aspirante->ASPCEDULA}}">{{$aspirante->ASPCEDULA}} - ({{$aspirante->ASPNOMBRE}} {{$aspirante->ASPAPELLIDO}})</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO CASO ESPECIAL:</strong>
                <select class="form-control" name="CASCODIGO" id="CASCODIGO">
                    @php
                    use App\Caso;
                    $casos = Caso::all();
                    @endphp
                    <option value="null"></option>
                    @foreach ($casos as $caso)
                    <option value="{{$caso->CASCODIGO}}">{{$caso->CASCODIGO}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA DE INSCRIPCIÓN:</strong>
                <input type="date" name="INSFECHA"  class="form-control" placeholder="Grado Actual">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>GRADO:</strong>
                <select class="form-control"  name="INSGRADO" id="INSGRADO">
                    <option value="Cinturón Marrón">Cinturón Marrón</option>
                    <option value="Cinturón Negro">Cinturón Negro</option>
                    <option value="Primer Dan">Primer Dan</option>
                    <option value="Segundo Dan">Segundo Dan</option>
                    <option value="Tercer Dan">Tercer Dan</option>
                    <option value="Cuarto Dan">Cuarto Dan</option>
                    <option value="Quinto Dan">Quinto Dan</option>
                    <option value="Sexto Dan">Sexto Dan</option>
                    <option value="Séptimo Dan">Séptimo Dan</option>
                    <option value="Octavo Dan">Octavo Dan</option>
                    <option value="Noveno Dan">Noveno Dan</option>
                    <option value="Décimo Dan">Décimo Dan</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection