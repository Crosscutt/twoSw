
@extends('welcome')

@section('content')

<div class="panel">
    
    <div class="panel-heading">
        <center>
                <h3 class="panel-title">Tabla de Serviciso ofrecidos</h3>
        </center>    
    </div>
    <div class="panel-heading">
            <a href="{{url('servicio/create')}}">
                <button class="btn btn-dark btn-block  pull-right">Registrar Nuevo Servicio</button>
              </a>
      </div>  
    <div class="panel-body">
        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
            <thead>
                <tr>
                    <th data-toggle="true">#Servicio</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
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
            @foreach($servicios as $item)
                <tr>
                    <td>{{$item->idServicio}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>
                    <a class="btn btn-danger " href="{{url('/servicio/delete',$item->idServicio)}}" type="button">Eliminar</a>
                    <a class="btn btn-success" href="" type="button">Editar</a>
                    
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

</div>



@endsection