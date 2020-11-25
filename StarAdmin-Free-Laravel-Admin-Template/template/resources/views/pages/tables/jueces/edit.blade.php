@extends('pages.tables.jueces.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITAR JUECES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jueces.index') }}"> REGRESAR</a>
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

<form action="{{ route('jueces.update',$jueces->JUECEDULA )}}" method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')  }}
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA:</strong>
                <input type="text" name="JUECEDULA" value="{{ $jueces->JUECEDULA }}" class="form-control" placeholder="Código">
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
                <strong>NOMBRE:</strong>
                <input type="text" name="JUENOMBRE" value="{{ $jueces->JUENOMBRE}}" class="form-control" placeholder="PAÍS">
            </div>
        </div>
        @php
        $aux1='';
        if($jueces->JUEDIPLOMA==1){
        $aux1='checked';
        }else{
        $aux1='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DIPLOMA:</strong>
                <input type="checkbox" name="JUEDIPLOMA" <?php echo ($aux1) ?> class="form-control" placeholder="Curriculum Visado">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
<script>
    document.querySelector("#TRICODIGO option[value='<?php echo ($jueces->TRICODIGO) ?>']").setAttribute('selected', true);
</script>
@endsection