@extends('layout.master')
@push('plugin-styles')
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="pull-left" style="text-align: center;">
                    <h4 class="card-title">VER TRIBUNAL</h4>
                </div>
            </div>
            <div class="pull-right" style="text-align: right;">
                <a class="btn btn-primary" href="{{ route('tribunales.index') }}"> REGRESAR</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CÓDIGO:</strong>
                    {{ $tribunales->TRICODIGO }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CANTIDAD DE JUECES:</strong>
                    {{ $tribunales->TRICANTIDAD }}
                </div>
            </div>
        </div>
    </div>
</div>
@php
use App\Examen;
use Illuminate\Support\Facades\DB;
use App\Evento;
use App\Tribunal;
use App\Inscripcion;
use App\Aspirante;
$examenes = DB::table('examens')->where('TRICODIGO', $tribunales->TRICODIGO)->get();
@endphp

<div class="row">
    @foreach ($examenes as $examen)
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <form action="{{ route('examenes.update',$examen->EXACODIGO )}}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT')  }}
            {{ csrf_field() }}
            @php
            $inscripcion = DB::table('inscripcions')->where('EXACODIGO', $examen->EXACODIGO)->get();
            $evento = DB::table('eventos')->where('EVECODIGO', $examen->EVECODIGO)->get();
            $aspirante = DB::table('aspirantes')->where('ASPCEDULA', $inscripcion[0]->ASPCEDULA)->get();


            @endphp

            <div class="card">
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group" style="text-align: center;">
                            <strong>EXÁMEN ASOCIADO:</strong> {{$examen->EXACODIGO}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ASPIRANTE:</strong> {{$aspirante[0]->ASPNOMBRE}} {{$aspirante[0]->ASPAPELLIDO}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>CÉDULA DEL APSIRANTE:</strong> {{$aspirante[0]->ASPCEDULA}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>GRADO ACTUAL:</strong> {{$aspirante[0]->ASPGRADOACTUAL}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>GRADO AL QUE ASPIRA:</strong> {{$inscripcion[0]->INSGRADO}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group" style="text-align: center;">
                            <strong>PARÁMETROS A CALIFICAR</strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" hidden>
                        <div class="form-group">
                            <strong>CÓDIGO:</strong>
                            <input type="text" name="EXACODIGO" value="{{ $examen->EXACODIGO }}" class="form-control" placeholder="Código">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" hidden>
                        <div class="form-group">
                            <strong>CÓDIGO EVENTO:</strong>
                            <select class="form-control" name="EVECODIGO" id="EVECODIGO">
                                @php

                                $eventos = Evento::all();
                                @endphp
                                @foreach ($eventos as $evento)
                                <option value="{{$evento->EVECODIGO}}">{{$evento->EVECODIGO}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" hidden>
                        <div class="form-group">
                            <strong>CÓDIGO TRIBUNAL:</strong>
                            <select class="form-control" name="TRICODIGO" id="TRICODIGO">
                                @php

                                $tribunales = Tribunal::all();
                                @endphp
                                @foreach ($tribunales as $tribunal)
                                <option value="{{$tribunal->TRICODIGO}}">{{$tribunal->TRICODIGO}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" hidden>
                        <div class="form-group">
                            <strong>CATEGORÍA:</strong>
                            <select class="form-control" name="EXACATEGORIA" id="EXACATEGORIA">
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom ">

                                @php
                                $aux1='';
                                if($examen->EXACALIFICACIONTOTAL==1){
                                $aux1='checked';
                                }else{
                                $aux1='';
                                }
                                @endphp


                                <li>
                                    <div class="form-check form-check-flat">
                                        <label>
                                            <input class="checkbox" type="checkbox" name="EXACALIFICACIONTOTAL" id="EXACALIFICACIONTOTAL" <?php echo ($aux1) ?> placeholder="Informe">
                                            CALIFICACIÓN TOTAL
                                        </label>
                                    </div>
                                </li>
                                @php
                                $aux2='';
                                if($examen->EXABLOQUECOMUN==1){
                                $aux2='checked';
                                }else{
                                $aux2='';
                                }
                                @endphp

                                @if($inscripcion[0]->INSGRADO == 'Cinturón Marrón' ||
                                $inscripcion[0]->INSGRADO == 'Cinturón Negro'||
                                $inscripcion[0]->INSGRADO == 'Primer Dan'||
                                $inscripcion[0]->INSGRADO == 'Segundo Dan'||
                                $inscripcion[0]->INSGRADO == 'Tercer Dan')
                                <li>
                                    <div class="form-check form-check-flat">
                                        <label>
                                            <input class="checkbox" type="checkbox" name="EXABLOQUEESPECIFICO" id="EXABLOQUEESPECIFICO" <?php echo ($aux2) ?> placeholder="Informe">
                                            BLOQUE ESPECÍFICO
                                        </label>
                                    </div>
                                </li>
                                @php
                                $aux3='';
                                if($examen->EXABLOQUEESPECIFICO==1){
                                $aux3='checked';
                                }else{
                                $aux3='';
                                }
                                @endphp
                                <li>
                                    <div class="form-check form-check-flat">
                                        <label>
                                            <input class="checkbox" type="checkbox" name="EXABLOQUECOMUN" id="EXABLOQUECOMUN" <?php echo ($aux3) ?> placeholder="Informe">
                                            BLOQUE COMÚN
                                        </label>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>OBSERVACIONES</label>
                                <textarea type="text" name="EXAOBSERVACIONES" class="form-control" placeholder="Informe">{{$examen->EXAOBSERVACIONES}}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endforeach
</div>
<script>
    document.querySelector("#EVECODIGO option[value='<?php echo ($examen->EVECODIGO) ?>']").setAttribute('selected', true);
    document.querySelector("#TRICODIGO option[value='<?php echo ($examen->TRICODIGO) ?>']").setAttribute('selected', true);
    document.querySelector("#EXACATEGORIA option[value='<?php echo ($examen->EXACATEGORIA) ?>']").setAttribute('selected', true);
</script>
@endsection