@extends('welcome')

@section('content')

<style>
 #map {
        height: 500px;
        width: 800px;
      }
</style>
<div class="row" >
    <div class="col-sm-12">
        <div class="panel">
        <form method="POST" action="{{url('/Horario/store')}}">
            @csrf
            <div class="panel-heading">
                <center>
                        <h4 class="panel-title">Añadir un Nuevo Horario</h4>
                </center>    
            </div>        
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Hora de Entrada</label>
                                <input type="time" name="HE" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Hora de Rezeso</label>
                                <input type="time" name="HER" class="form-control">
                                <label class="control-label">ahh</label>
                                <input type="time" name="HFR" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Hora de Salida</label>
                                    <input type="time" name="HS" class="form-control">
                                </div>
                            </div>
                    </div>
                    
                </div>
                <div class="panel-footer ">
                    <button class="btn btn-success btn-block" type="submit">Grabar Datos </button>
                </div>
            </form>
          
          
        </div>
    </div>
</div>


@endsection

