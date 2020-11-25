@extends('pages.tables.convalidaciones.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITAR CONVALIDACIONES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('convalidaciones.index') }}"> REGRESAR</a>
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

<form action="{{ route('convalidaciones.update',$convalidaciones->CONCODIGO )}}" method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')  }}
    {{ csrf_field() }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO:</strong>
                <input type="text" name="CONCODIGO" value="{{ $convalidaciones->CONCODIGO }}" class="form-control" placeholder="Código">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PAÍS:</strong>
                <select class="form-control" name="CONPAIS" id="CONPAIS">
                    @php
                    $paises = array("Afganistán", "Albania", "Alemania", "Andorra", "Angola", "Antigua y Barbuda", "Arabia Saudita", "Argelia", "Argentina", "Armenia", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bangladés", "Barbados", "Baréin", "Bélgica", "Belice", "Benín", "Bielorrusia", "Birmania", "Bolivia", "Bosnia y Herzegovina", "Botsuana", "Brasil", "Brunéi", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Catar", "Chad", "Chile", "China", "Chipre", "Ciudad del Vaticano", "Colombia", "Comoras", "Corea del Norte", "Corea del Sur", "Costa de Marfil", "Costa Rica", "Croacia", "Cuba", "Dinamarca", "Dominica", "Ecuador", "Egipto", "El Salvador", "Emiratos Árabes Unidos", "Eritrea", "Eslovaquia", "Eslovenia", "España", "Estados Unidos", "Estonia", "Etiopía", "Filipinas", "Finlandia", "Fiyi", "Francia", "Gabón", "Gambia", "Georgia", "Ghana", "Granada", "Grecia", "Guatemala", "Guyana", "Guinea", "Guinea ecuatorial", "Guinea-Bisáu", "Haití", "Honduras", "Hungría", "India", "Indonesia", "Irak", "Irán", "Irlanda", "Islandia", "Islas Marshall", "Islas Salomón", "Israel", "Italia", "Jamaica", "Japón", "Jordania", "Kazajistán", "Kenia", "Kirguistán", "Kiribati", "Kuwait", "Laos", "Lesoto", "Letonia", "Líbano", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Madagascar", "Malasia", "Malaui", "Maldivas", "Malí", "Malta", "Marruecos", "Mauricio", "Mauritania", "México", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montenegro", "Mozambique", "Namibia", "Nauru", "Nepal", "Nicaragua", "Níger", "Nigeria", "Noruega", "Nueva Zelanda", "Omán", "Países Bajos", "Pakistán", "Palaos", "Panamá", "Papúa Nueva Guinea", "Paraguay", "Perú", "Polonia", "Portugal", "Reino Unido", "República Centroafricana", "República Checa", "República de Macedonia", "República del Congo", "República Democrática del Congo", "República Dominicana", "República Sudafricana", "Ruanda", "Rumanía", "Rusia", "Samoa", "San Cristóbal y Nieves", "San Marino", "San Vicente y las Granadinas", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Serbia", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Sri Lanka", "Suazilandia", "Sudán", "Sudán del Sur", "Suecia", "Suiza", "Surinam", "Tailandia", "Tanzania", "Tayikistán", "Timor Oriental", "Togo", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Uruguay", "Uzbekistán", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Yibuti", "Zambia", "Zimbabue");
                    @endphp
                    @foreach ($paises as $pais)
                    <option value="{{$pais}}">{{$pais}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TIEMPO DE PERMANENCIA:</strong>
                <input type="number" name="CONTIEMPOPERMANENCIA" value="{{ $convalidaciones->CONTIEMPOPERMANENCIA }}" class="form-control" placeholder="Tiempo de Permanencia">
            </div>
        </div>
        @php
        $aux='';
        if($convalidaciones->CONCURRICULUMVISADO==1){
        $aux='checked';
        }else{
        $aux='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CURRICULUM VISADO:</strong>
                <input type="checkbox" name="CONCURRICULUMVISADO" <?php echo ($aux) ?> class="form-control" placeholder="Curriculum Visado">
            </div>
        </div>
        @php
        $aux2='';
        if($convalidaciones->CONACREDITACION==1){
        $aux2='checked';
        }else{
        $aux2='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ACREDITACIÓN:</strong>
                <input type="checkbox" name="CONACREDITACION" <?php echo ($aux2) ?> class="form-control" placeholder="Acreditación">
            </div>
        </div>
        @php
        $aux3='';
        if($convalidaciones->CONCOPIATITULOS==1){
        $aux3='checked';
        }else{
        $aux3='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>COPIA DE TÍTULOS:</strong>
                <input type="checkbox" name="CONCOPIATITULOS" <?php echo ($aux3) ?> class="form-control" placeholder="Copia de títulos">
            </div>
        </div>
        @php
        $aux4='';
        if($convalidaciones->CONPLANESTUDIO==1){
        $aux4='checked';
        }else{
        $aux4='';
        }
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PLANES DE ESTUDIO:</strong>
                <input type="checkbox" name="CONPLANESTUDIO" <?php echo ($aux4) ?> class="form-control" placeholder="Plan de estudio">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
<script>
    document.querySelector("#CONPAIS option[value='<?php echo ($convalidaciones->CONPAIS) ?>']").setAttribute('selected', true);
</script>
@endsection