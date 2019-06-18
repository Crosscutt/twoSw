@extends('welcome')

@section('content')

<div class="row" >
    <div class="col-sm-12">
        <div class="panel">
        <form method="POST" action="{{url('/Tecnico/store')}}">
            @csrf
            <div class="panel-heading">
            <h4 class="panel-title">Añadir un Nuevo Tecnico</h4>
            </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Nombres</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Apellido</label>
                                <input type="text" name="apellido" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Direccion</label>
                                <input type="text" name="direccion" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Cedula de Identidad</label>
                                <input type="text" name="ci" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">sexo</label>
                                <select class="browser-default custom-select form-control" name="sexo">
                                <option  value="Masculino">
                                 <strong>Masculino</strong>,
                                </option>
                                <option  value="Femenino">
                                        <strong>Femenino</strong>,
                                       </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">telefono</label>
                                <input type="text" name="telefono"  class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                                <div class="form-group">
                                        <label class="control-label">Horario</label>

                                    <select class="browser-default custom-select form-control" name="horario">
                                    @foreach ($horarios as $item)
                                    <option   value="{{ $item->idHorario}}">
                                     <strong>Hora de Entrada :  {{$item->HE}}</strong>,
                                    <strong>Hora de Reseso : {{ $item->HER}}-{{ $item->HTR}}</strong>,
                                    <strong>Hola de Salida : {{$item->HS}}</strong>
                                    </option>
                                    @endforeach    
                                    </select>
                                </div>
                            </div>
                        <div class="col-sm-12">

                    </div>
                    </div>
                </div>
                <div class="panel-footer ">
                    <button class="btn btn-success btn-block" type="submit">Grabar</button>
                </div>
            </form>
          
    
        </div>
    </div>
</div>


@endsection

