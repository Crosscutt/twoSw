@extends('welcome')

@section('content')

<style>
    #map {
           height: 500px;
           width: 100%;
         }
   </style>
<div class="panel">
  <div class="panel-heading">
      <h3 class="panel-title">Gestionar Cliente</h3>
  </div>
  <div class="panel-heading">
        <a href="{{url('cliente/create')}}">
            <button class="btn btn-dark btn-block  pull-right">Registrar Nuevo Cliente</button>
          </a>
  </div>  
  <div class="panel-body">
      <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
          <thead>
              <tr>
                  <th data-toggle="true">#idCliente</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th data-hide="phone, tablet">Direccion</th>
                  <th data-hide="phone, tablet">Telefono</th>
                  <th data-hide="phone, tablet">#Casa</th>
                  <th>Opciones</th>
              </tr>
          </thead>
          <div class="pad-btm form-inline">
              <div class="row">
                  <div class="col-sm-6 text-xs-center">
                      <div class="form-group">
                          <label class="control-label">Status</label>
                          <select id="demo-foo-filter-status" class="form-control">
                              <option value="">Todoss</option>
                              <option value="Revisado">Revisado</option>
                              <option value="disabled">Por Revisar</option>
                              <option value="suspended">Observado</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-6 text-xs-center text-right">
                      <div class="form-group">
                          <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                      </div>
                  </div>
              </div>
          </div>
          <tbody>
          @foreach($cliente as $client)
              <tr>
                  <td>{{$client->idCliente}}</td>
                  <td>{{$client->nombre}}</td>
                  <td>{{$client->apellido}}</td>
                  <td>{{$client->direccion}}</td>
                  <td>{{$client->telefono}}</td>
                  <td>{{$client->Nro_Casa}}</td>
                  <td>
                    <a class="btn btn-info" href="{{url('/cliente/show',$client->idCliente)}}" type="button">Vizualisar</a>
                    <a class="btn btn-primary" href="{{url('/cliente/location',$client->id)}}" type="button">Ver Ubicacion</a>
                    <a class="btn btn-success"  href="" type="button">Editar Usuario</a>
                    
                          </div>
                        </div>
                      </div>
                  </td>
              </tr>
          @endforeach
          </tbody>
          <tfoot>
              <tr>
                  <td colspan="7">
                      <div class="text-right">
                          <ul class="pagination"></ul>
                      </div>
                  </td>
              </tr>
          </tfoot>
      </table>
  </div>

</div>




@endsection