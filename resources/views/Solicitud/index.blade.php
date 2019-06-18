@extends('welcome')

@section('content')

<div class="panel">
    
    <div class="panel-heading">
        <h3 class="panel-title">Tabla de Solicitudes</h3>
    </div>
    <div class="panel-body">
        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
            <thead>
                <tr>
                    <th data-toggle="true">#Solicitud</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th data-hide="phone, tablet">Descripcion del problema</th>
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
            @foreach($solicitudes as $solicitud)
                <tr>
                    <td>{{$solicitud->idS}}</td>
                    <td>{{$solicitud->Nombre}}</td>
                    <td>{{$solicitud->Apellido}}</td>
                    <td>{{$solicitud->Descripcion}}</td>
                    <td><span class="label label-table label-{{$solicitud->Color}}">{{$solicitud->NombreColor}}</span></td>
                    <td><a class="btn btn-info btn-block" href="{{url('/solicitud/visualizar',$solicitud->idS)}}" type="button">Vizualisar</a></td>
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