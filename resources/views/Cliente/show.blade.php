@extends('welcome')

@section('content')

<div class="panel panel-bordered-primary">
        @foreach ($cliente as $item)
        <div class="panel-heading">
            <h1 class="panel-title">Datos del Cliente : {{$item->nombre}} {{$item->apellido}}</h1>
        </div>
        <div class="panel-body">
                <strong>Direccion: </strong>
                {{$item->direccion}}
                <br>
                <strong>#Casa:</strong>
                {{$item->Nro_Casa}}
                <br>
                <strong>Telefono o Celular :</strong>
                {{$item->telefono}}
                <br>
                <strong>Sexo : </strong>
                {{$item->sexo}}
                <br>
                <strong>Username :</strong>
                {{$item->Username}}
                <br>
                <strong>Cedula de identidad : </strong>
                {{$item->ci}}
            </div>
       </div>
       @endforeach
@endsection