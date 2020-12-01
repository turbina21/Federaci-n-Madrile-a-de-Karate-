@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="pull-left" style="text-align: center;">
          <h4 class="card-title">EVENTOS</h4>
        </div>
        <div class="pull-right" style="text-align: right;">
          <a class="btn btn-success" href="{{ route('eventos.create') }}"> AÑADIR EVENTOS</a>
        </div>
        <?php
        /*
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>CÓDIGO</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>LUGAR</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($eventos as $evento)
              <tr>
                <td>{{$evento->EVECODIGO}}</td>
                <td>{{$evento->EVEFECHA}}</td>
                <td>{{$evento->EVEHORA}}</td>
                <td>{{$evento->EVELUGAR}}</td>
                <td>
                  <form action="{{ route('eventos.destroy',$evento->EVECODIGO) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('eventos.show',$evento->EVECODIGO) }}">VER</a>

                    <a class="btn btn-primary" href="{{ route('eventos.edit',$evento->EVECODIGO) }}">EDITAR</a>

                    {{ method_field('DELETE')  }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                  </form>
                </td>
              </tr>


              @endforeach
            </tbody>
          </table>
        </div>*/
        ?>
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
  */ ?>
</div>
<div class="row">
  @foreach ($eventos as $evento)
  <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Evento: {{$evento->EVECODIGO}}</h4>
        <div class="shedule-list d-flex align-items-center justify-content-between mb-3">
          <h3>{{$evento->EVEFECHA}}</h3>
        </div>
        <div class="event border-bottom py-3">
          <div class="d-flex align-items-center">
            <div class="badge badge-success">{{$evento->EVEHORA}}</div>
            <small class="text-muted ml-2">{{$evento->EVELUGAR}}</small>
            <div class="image-grouped ml-auto">
              <form action="{{ route('eventos.destroy',$evento->EVECODIGO) }}" method="POST">

                <a class="btn btn-secondary btn-icons btn-rounded" href="{{ route('eventos.show',$evento->EVECODIGO) }}"><i class="menu-icon mdi mdi-eye"></i></a>

                <a class="btn btn-warning btn-icons btn-rounded" href="{{ route('eventos.edit',$evento->EVECODIGO) }}"><i class="menu-icon mdi mdi-lead-pencil"></i></a>

                {{ method_field('DELETE')  }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-icons btn-rounded"><i class="menu-icon mdi mdi-delete"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush