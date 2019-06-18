
@extends('welcome')

@section('content')

<div class="panel">
    
    <div class="panel-heading">
        <center>
                <h3 class="panel-title">Tabla de Horarios del PERSONAL </h3>
        </center>    
    </div>
    <div class="panel-heading">
            <a href="{{url('servicio/create')}}">
                <button class="btn btn-dark btn-block  pull-right">Registrar Nuevo Horario</button>
              </a>
      </div>  
    <div class="panel-body">
        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
            <thead>
                <tr>
                    <th data-toggle="true">#HORARIO</th>
                    <th>Hora de Entrada</th>
                    <th>Resezo</th>
                    <th>Hora de Salida</th>
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
            @foreach($horarios as $item)
                <tr>
                    <td>{{$item->idHorario}}</td>
                    <td>{{$item->HE}}</td>
                    <td>{{$item->HER}}-{{$item->HTR}}</td>
                     <td>{{$item->HS}}</td>
                    <td>
                    <a class="btn btn-danger " href="{{url('/servicio/delete',$item->idHorario)}}" type="button">Eliminar</a>
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