@extends('welcome')

@section('content')
@section('heders')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
@endsection
<div class="panel">
    
    <div class="panel-heading">
        <h3 class="panel-title">Detalle de Solicitud</h3>
    </div>
    <div class="panel-body">

      <div class="panel  panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Datos del Cliente</h3>
        </div>
        @foreach ($Datos as $item)
        <div class="panel-body">
                <strong>Nombre y Apellido: {{$item->nombre}} {{$item->apellido}} </strong> 
                <br>
                <strong>Direccion: {{$item->direccion}}</strong>
                <br>
                <strong>#Casa: {{$item->Nro_Casa}}</strong>
                <br>
                <strong>Telefono o Celular {{$item->telefono}}:</strong>
            </div>
       </div>
        <div class="panel  panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Datos de la Solicitud</h3>
                </div>
                <div class="panel-body">
                    <strong>Descripcion: {{$item->descripcion}}</strong>
                    <br>
                    <strong>Fecha y Hora de Emision: {{$item->Fecha_hora}}</strong>
                </div>
        </div>
        @endforeach

    <div class="panel  panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Servicios Requeridos</h3>
            </div>
            <br>
            @foreach ($Servicios as $servicio)
           <strong class="tag label label-primary">{{$servicio->nombre}}</strong>  
            @endforeach 

    </div>
     
    <div class="panel  panel-success">
       <form method="POST" action="{{url('/asignacion/store')}}">
        @csrf
            <div class="panel-heading">
                <h3 class="panel-title">Asignar Tecnico a la Solicitud</h3>
            </div>
            <div class="panel-body">
                <strong>Elegir Tecnico:</strong>  
                <select class="selectpicker form-control" name="idTecnico" data-live-search="true">
                @foreach ($Tecnicos as $tecnico)
                <option data-tokens="{{$tecnico->idTecnico}}" value="{{$tecnico->idTecnico}}">Nombre y Apellido : {{$tecnico->nombre}} {{$tecnico->apellido}},  Direccion:  {{$tecnico->direccion}}</option>
                @endforeach
                </select>
                <br>
                <strong>Fecha de Asistencia:</strong>
                    <input  type="date" class="form-control" name="fecha"/>
                <br>
                <strong>Hora de Asistencia:</strong>
                <input  type="time" class="form-control" name="hora"/>
                <input style="display: none" name="idSolicitud" value="{{$id}}"/>
            </div>
             <div class="form-control">
                 <button class="btn btn-dark btn-block" type="submit">TERMINAR TRABAJO</button>
             </div>   
         </form>   
    </div>

    </div>
</div>    
@endsection