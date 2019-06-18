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
        <form method="POST" action="/servicio/store">
            @csrf
            <div class="panel-heading">
                <center>
                        <h4 class="panel-title">Añadir un Nuevo Servicio</h4>
                </center>    
            </div>        
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Nombre del Servico</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Descripcion del Servicio</label>
                                <input type="text" name="descripcion" class="form-control">
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

