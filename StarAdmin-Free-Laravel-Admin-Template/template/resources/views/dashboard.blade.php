@extends('layout.master')

@push('plugin-styles')
<!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')

@php
use App\Examen;
use Illuminate\Support\Facades\DB;
use App\Evento;
use App\Tribunal;
use App\Inscripcion;
use App\Aspirante;
$nAspirantes = DB::table('aspirantes')->count();
$nCasos = DB::table('casos')->count();
$nConvalidaciones = DB::table('convalidacions')->count();
$nEventos = DB::table('eventos')->count();
$nExamenes = DB::table('examens')->count();
$nInscripciones = DB::table('inscripcions')->count();
$nJueces = DB::table('juezs')->count();
$nTribunales = DB::table('tribunals')->count();
$eventos = Evento::all();
$aspirantes = Aspirante::all();
@endphp
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Aspirantes</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nAspirantes}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-star text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Casos Especiales</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nCasos}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-check text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Convalidaciones</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nConvalidaciones}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-calendar-today text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Eventos</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nEventos}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi  mdi-certificate text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Exámenes</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nExamenes}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-book-multiple text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Inscripciones</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nInscripciones}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-clipboard-account text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Jueces</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nJueces}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-sitemap text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Tribunales</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$nTribunales}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Eventos</h4>
        @foreach($eventos as $evento)
        <div class="event border-bottom py-3">
          <p class="mb-2 font-weight-medium">{{$evento->EVECODIGO}}</p>
          <div class="d-flex align-items-center">
            <div class="badge badge-success">{{$evento->EVEHORA}}</div>
            <small class="text-muted ml-2">{{$evento->EVEFECHA}}</small>
            <small class="text-muted ml-2">{{$evento->EVELUGAR}}</small>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>


@endsection

@push('plugin-scripts')
{!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
{!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
{!! Html::script('/assets/js/dashboard.js') !!}
@endpush