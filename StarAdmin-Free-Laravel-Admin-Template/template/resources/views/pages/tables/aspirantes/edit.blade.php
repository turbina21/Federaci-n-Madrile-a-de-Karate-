@extends('pages.tables.aspirantes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITAR ASPIRANTE</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('aspirantes.index') }}"> Back</a>
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
@if(session('error'))
<div class="alert alert-warning" role="alert">
    {{session('error')}}
</div>
@endif
<form action="{{ route('aspirantes.update',$aspirantes->ASPCEDULA )}}" method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')  }}
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA:</strong>
                <input type="text" name="ASPCEDULA" value="{{ $aspirantes->ASPCEDULA }}" class="form-control" placeholder="Cédula">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOMBRE:</strong>
                <input type="text" name="ASPNOMBRE" value="{{ $aspirantes->ASPNOMBRE }}" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>APELLIDO:</strong>
                <input type="text" name="ASPAPELLIDO" value="{{ $aspirantes->ASPAPELLIDO}}" class="form-control" placeholder="Apellido">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA DE NACIMIENTO:</strong>
                <input type="date" name="ASPFECHANACIMIENTO" value="{{ $aspirantes->ASPFECHANACIMIENTO }}" class="form-control" placeholder="Fecha de Nacimiento">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LICENCIA:</strong>
                <input type="text" name="ASPLICENCIA" value="{{ $aspirantes->ASPLICENCIA }}" class="form-control" placeholder="Licencia">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>GRADO ACTUAL:</strong>
                <select class="form-control" name="ASPGRADOACTUAL" id="ASPGRADOACTUAL">
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA DE GRADO ACTUAL:</strong>
                <input type="date" name="ASPFECHAGRADOACTUAL" value="{{ $aspirantes->ASPFECHAGRADOACTUAL }}" class="form-control" placeholder="FechaGrado Actual">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
<script>
    document.querySelector("#ASPGRADOACTUAL option[value='<?php echo ($aspirantes->ASPGRADOACTUAL) ?>']").setAttribute('selected', true);
</script>
@endsection