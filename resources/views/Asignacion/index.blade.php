@extends('welcome')

@section('content')

<div class="panel">
    
    <div class="panel-heading">
        <h3 class="panel-title">Vista de Solicitudes Asignadas</h3>
    </div>
    <div class="panel-body">
        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
            <thead>
                <tr>
                    <th data-toggle="true">#Asignacion</th>
                    <th>Nombre y Apellido - Tecnico</th>
                    <th>Fecha</th>
                    <th data-hide="phone, tablet">Hora a Marcar</th>
                    <th data-hide="phone, tablet">Hora Marcada</th>
                    <th data-hide="phone, tablet">Hora Finalizada</th>
                    <th>Estado</th>
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
            @foreach($Asignations as $item)
                <tr>
                    <td>{{$item->idAsignacion}}</td>
                    <td>{{$item->nombre}} {{$item->apellido}}</td>
                    <td>{{$item->fecha}}</td>
                    <td>{{$item->hora}}</td>
                    <td>{{$item->HM}}</td>
                    <td>{{$item->HF}}</td>
                    <td><span class="label label-table label-{{$item->color}}">{{$item->Nombre}}</span></td>
                    <td><a class="btn btn-info btn-block" href="{{url('/solicitud/visualizar',$item->idAsignacion)}}" type="button">ver Detalle</a></td>
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