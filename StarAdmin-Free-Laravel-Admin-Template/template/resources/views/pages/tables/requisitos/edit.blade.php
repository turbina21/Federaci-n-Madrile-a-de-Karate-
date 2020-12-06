@extends('pages.tables.requisitos.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITAR REQUISITOS</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('requisitos.index') }}"> REGRESAR</a>
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

<form action="{{ route('requisitos.update',$requisitos->REQCODIGO )}}" method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')  }}
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="REQCODIGO" value="{{ $requisitos->REQCODIGO }}" class="form-control" placeholder="Código">
            </div>
        </div>
        @php
        $aux1='';
        if($requisitos->REQFOTOCOPIACARNET==1){
        $aux1='checked';
        }else{
        $aux1='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTOCOPIA CARNET:</strong>
                <input type="checkbox" name="REQFOTOCOPIACARNET" <?php echo ($aux1) ?> class="form-control" placeholder="Curriculum Visado">
            </div>
        </div>
        @php
        $aux2='';
        if($requisitos->REQFOTOCOPIACEDULA==1){
        $aux2='checked';
        }else{
        $aux2='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTOCOPIA CÉDULA:</strong>
                <input type="checkbox" name="REQFOTOCOPIACEDULA" <?php echo ($aux2) ?> class="form-control" placeholder="Acreditación">
            </div>
        </div>
        @php
        $aux3='';
        if($requisitos->REQFOTOGRAFIAS==1){
        $aux3='checked';
        }else{
        $aux3='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTOGRAFIAS:</strong>
                <input type="checkbox" name="REQFOTOGRAFIAS" <?php echo ($aux3) ?> class="form-control" placeholder="Copia de títulos">
            </div>
        </div>
        @php
        $aux4='';
        if($requisitos->REQSOLICITUD==1){
        $aux4='checked';
        }else{
        $aux4='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SOLICITUD:</strong>
                <input type="checkbox" name="REQSOLICITUD" <?php echo ($aux4) ?> class="form-control" placeholder="Plan de estudio">
            </div>
        </div>
        @php
        $aux5='';
        if($requisitos->REQTRABAJO==1){
        $aux5='checked';
        }else{
        $aux5='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TRABAJO:</strong>
                <input type="checkbox" name="REQTRABAJO" <?php echo ($aux5) ?> class="form-control" placeholder="Plan de estudio">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection