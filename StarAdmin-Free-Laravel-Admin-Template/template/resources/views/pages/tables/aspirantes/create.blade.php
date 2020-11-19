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

<form action="{{ route('aspirantes.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA:</strong>
                <input type="text" name="ASPCEDULA" class="form-control" placeholder="Cédula">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOMBRE:</strong>
                <input type="text" name="ASPNOMBRE" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>APELLIDO:</strong>
                <input type="text" name="ASPAPELLIDO" class="form-control" placeholder="Apellido">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA DE NACIMEINTO:</strong>
                <input type="date" name="ASPFECHANACIMIENTO" class="form-control" placeholder="Fecha de nacimiento">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LICENCIA:</strong>
                <input type="text" name="ASPLICENCIA" class="form-control" placeholder="Licencia">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>GRADO ACTUAL:</strong>
                <input type="text" name="ASPGRADOACTUAL" class="form-control" placeholder="Grado Actual">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA DE GRADO ACTUAL:</strong>
                <input type="date" name="ASPFECHAGRADOACTUAL" class="form-control" placeholder="Fecha Grado Actual">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection