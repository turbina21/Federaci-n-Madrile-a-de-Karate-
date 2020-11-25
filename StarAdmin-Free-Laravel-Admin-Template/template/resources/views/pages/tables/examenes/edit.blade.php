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

<form action="{{ route('examenes.update',$examenes->EXACODIGO )}}" method="POST" enctype="multipart/form-data">
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
        @php
        $aux1='';
        if($examenes->EXACALIFICACIONTOTAL==1){
        $aux1='checked';
        }else{
        $aux1='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CALIFICACIÓN TOTAL:</strong>
                <input type="checkbox" name="EXACALIFICACIONTOTAL" <?php echo ($aux1) ?> class="form-control" placeholder="Informe">
            </div>
        </div>
        @php
        $aux2='';
        if($examenes->EXABLOQUECOMUN==1){
        $aux2='checked';
        }else{
        $aux2='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BLOQUE COMÚN:</strong>
                <input type="checkbox" name="EXABLOQUECOMUN" <?php echo ($aux2) ?> class="form-control" placeholder="Informe">
            </div>
        </div>
        @php
        $aux3='';
        if($examenes->EXABLOQUECOMUN==1){
        $aux3='checked';
        }else{
        $aux3='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>BLOQUE ESPECÍFICO:</strong>
                <input type="checkbox" name="EXABLOQUEESPECIFICO" <?php echo ($aux3) ?> class="form-control" placeholder="Informe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>OBSERVACIONES:</strong>
                <textarea type="text" name="EXAOBSERVACIONES" class="form-control" placeholder="Informe">{{$examenes->EXAOBSERVACIONES}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
<script>
    document.querySelector("#EVECODIGO option[value='<?php echo ($examenes->EVECODIGO) ?>']").setAttribute('selected', true);
    document.querySelector("#TRICODIGO option[value='<?php echo ($examenes->TRICODIGO) ?>']").setAttribute('selected', true);
    document.querySelector("#EXACATEGORIA option[value='<?php echo ($examenes->EXACATEGORIA) ?>']").setAttribute('selected', true);
</script>
@endsection