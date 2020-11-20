@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="pull-left" style="text-align: center;">
          <h4 class="card-title">INSCRIPCIONES</h4>
        </div>
        <div class="pull-right" style="text-align: right;">
          <a class="btn btn-success" href="{{ route('inscripciones.create') }}"> AÑADIR INSCIPCIÓN</a>
        </div>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>CÓDIGO</th>
                <th>CÓDIGO DE EXÁMEN</th>
                <th>CÓDIGO DE REQUISITO</th>
                <th>CÓDIGO DE CONVALIDACIÓN</th>
                <th>CÉDULA DE ASPIRANTE</th>
                <th>CÓDIGO CASO ESPECIAL</th>
                <th>FECHA DE INSCIPCIÓN</th>
                <th>GRADO</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($inscripciones as $inscripcion)
              <tr>
                <td>{{$inscripcion->INSCODIGO}}</td>
                <td>{{$inscripcion->EXACODIGO}}</td>
                <td>{{$inscripcion->REQCODIGO}}</td>
                <td>{{$inscripcion->CONCODIGO}}</td>
                <td>{{$inscripcion->ASPCEDULA}}</td>
                <td>{{$inscripcion->CASCODIGO}}</td>
                <td>{{$inscripcion->INSFECHA}}</td>
                <td>{{$inscripcion->INSGRADO}}</td>
                <td>
                  <form action="{{ route('inscripciones.destroy',$inscripcion->INSCODIGO) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('inscripciones.show',$inscripcion->INSCODIGO) }}">VER</a>

                    <a class="btn btn-primary" href="{{ route('inscripciones.edit',$inscripcion->INSCODIGO) }}">EDITAR</a>

                    {{ method_field('DELETE')  }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php
  /*
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Hoverable Table</h4>
        <p class="card-description"> Add class <code>.table-hover</code> </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>User</th>
                <th>Product</th>
                <th>Sale</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jacob</td>
                <td>Photoshop</td>
                <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i>
                </td>
                <td>
                  <label class="badge badge-danger">Pending</label>
                </td>
              </tr>
              <tr>
                <td>Messsy</td>
                <td>Flash</td>
                <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i>
                </td>
                <td>
                  <label class="badge badge-warning">In progress</label>
                </td>
              </tr>
              <tr>
                <td>John</td>
                <td>Premier</td>
                <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i>
                </td>
                <td>
                  <label class="badge badge-info">Fixed</label>
                </td>
              </tr>
              <tr>
                <td>Peter</td>
                <td>After effects</td>
                <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i>
                </td>
                <td>
                  <label class="badge badge-success">Completed</label>
                </td>
              </tr>
              <tr>
                <td>Dave</td>
                <td>53275535</td>
                <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i>
                </td>
                <td>
                  <label class="badge badge-warning">In progress</label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description"> Add class <code>.table-striped</code> </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> User </th>
                <th> First name </th>
                <th> Progress </th>
                <th> Amount </th>
                <th> Deadline </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  <img src="{{ url('assets/images/faces-clipart/pic-1.png') }}" alt="image" /> </td>
                <td> Herman Beck </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('assets/images/faces-clipart/pic-2.png') }}" alt="image" /> </td>
                <td> Messsy Adam </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $245.30 </td>
                <td> July 1, 2015 </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('assets/images/faces-clipart/pic-3.png') }}" alt="image" /> </td>
                <td> John Richards </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $138.00 </td>
                <td> Apr 12, 2015 </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('assets/images/faces-clipart/pic-4.png') }}" alt="image" /> </td>
                <td> Peter Meggik </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('assets/images/faces-clipart/pic-1.png') }}" alt="image" /> </td>
                <td> Edward </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 160.25 </td>
                <td> May 03, 2015 </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('assets/images/faces-clipart/pic-2.png') }}" alt="image" /> </td>
                <td> John Doe </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 123.21 </td>
                <td> April 05, 2015 </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ url('assets/images/faces-clipart/pic-3.png') }}" alt="image" /> </td>
                <td> Henry Tom </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 150.00 </td>
                <td> June 16, 2015 </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bordered table</h4>
        <p class="card-description"> Add class <code>.table-bordered</code> </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> First name </th>
                <th> Progress </th>
                <th> Amount </th>
                <th> Deadline </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1 </td>
                <td> Herman Beck </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr>
                <td> 2 </td>
                <td> Messsy Adam </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $245.30 </td>
                <td> July 1, 2015 </td>
              </tr>
              <tr>
                <td> 3 </td>
                <td> John Richards </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $138.00 </td>
                <td> Apr 12, 2015 </td>
              </tr>
              <tr>
                <td> 4 </td>
                <td> Peter Meggik </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr>
                <td> 5 </td>
                <td> Edward </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 160.25 </td>
                <td> May 03, 2015 </td>
              </tr>
              <tr>
                <td> 6 </td>
                <td> John Doe </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 123.21 </td>
                <td> April 05, 2015 </td>
              </tr>
              <tr>
                <td> 7 </td>
                <td> Henry Tom </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> $ 150.00 </td>
                <td> June 16, 2015 </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Inverse table</h4>
        <p class="card-description"> Add class <code>.table-dark</code> </p>
        <div class="table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                <th> # </th>
                <th> First name </th>
                <th> Amount </th>
                <th> Deadline </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 1 </td>
                <td> Herman Beck </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr>
                <td> 2 </td>
                <td> Messsy Adam </td>
                <td> $245.30 </td>
                <td> July 1, 2015 </td>
              </tr>
              <tr>
                <td> 3 </td>
                <td> John Richards </td>
                <td> $138.00 </td>
                <td> Apr 12, 2015 </td>
              </tr>
              <tr>
                <td> 4 </td>
                <td> Peter Meggik </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr>
                <td> 5 </td>
                <td> Edward </td>
                <td> $ 160.25 </td>
                <td> May 03, 2015 </td>
              </tr>
              <tr>
                <td> 6 </td>
                <td> John Doe </td>
                <td> $ 123.21 </td>
                <td> April 05, 2015 </td>
              </tr>
              <tr>
                <td> 7 </td>
                <td> Henry Tom </td>
                <td> $ 150.00 </td>
                <td> June 16, 2015 </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table with contextual classes</h4>
        <p class="card-description"> Add class <code>.table-{color}</code> </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> First name </th>
                <th> Product </th>
                <th> Amount </th>
                <th> Deadline </th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-info">
                <td> 1 </td>
                <td> Herman Beck </td>
                <td> Photoshop </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr class="table-warning">
                <td> 2 </td>
                <td> Messsy Adam </td>
                <td> Flash </td>
                <td> $245.30 </td>
                <td> July 1, 2015 </td>
              </tr>
              <tr class="table-danger">
                <td> 3 </td>
                <td> John Richards </td>
                <td> Premeire </td>
                <td> $138.00 </td>
                <td> Apr 12, 2015 </td>
              </tr>
              <tr class="table-success">
                <td> 4 </td>
                <td> Peter Meggik </td>
                <td> After effects </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
              </tr>
              <tr class="table-primary">
                <td> 5 </td>
                <td> Edward </td>
                <td> Illustrator </td>
                <td> $ 160.25 </td>
                <td> May 03, 2015 </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  */?>
</div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush