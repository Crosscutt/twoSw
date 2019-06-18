@extends('welcome')

@section('content')

<div class="panel">
    
    <div class="panel-heading">
        <center>
                <h3 class="panel-title">Tabla de Tecnicos</h3>
        </center>    
    </div>
    <div class="panel-heading">
            <a href="{{url('/Tecnico/create')}}">
                <button class="btn btn-dark btn-block  pull-right">Registrar Nuevo Tecnico</button>
              </a>
      </div> 
    <div class="panel-body">
        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
            <thead>
                <tr>
                    <th data-toggle="true">Cedula de Identidad</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th data-hide="phone, tablet">Celular</th>
                    <th data-hide="phone, tablet">Estado</th>
                    <th data-hide="phone, tablet">Accion</th>
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
            @foreach($tecnicos as $item)
                <tr>
                    <td>{{$item->Ci}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->apellido}}</td>
                    <td>{{$item->telefono}}</td>
                    <td> <button class="btn btn-{{$item->color}}">{{$item->nameColor}}</button></td>
                    <td>
                        <a class="btn btn-info" href="{{url('/solicitud/visualizar')}}" type="button">Vizualisar</a>
                        <a class="btn btn-success" href="{{url('/solicitud/visualizar')}}" type="button">Editar</a>
                        <a class="btn btn-danger" href="{{url('/solicitud/visualizar')}}" type="button">Eliminar</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="text-right">
                            <ul class="pagination"></ul>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <!--===================================================-->
    <!-- End Foo Table - Filtering -->

</div>


@endsection