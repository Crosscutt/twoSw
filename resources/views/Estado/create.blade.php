@extends('welcome')

@section('content')

<style>
</style>
<div class="row" >
    <div class="col-sm-12">
        <div class="panel">
        <form method="POST" action="{{url('/Estado/store')}}">
            @csrf
            <div class="panel-heading">
                <center>
                        <h4 class="panel-title">Añadir un Nuevo Estado</h4>
                </center>    
            </div>        
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Nombre del Estado</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="browser-default custom-select form-control" name="color">
                                            <option  style="background: greenyellow" value="success"> Verde</option>
                                            <option  style="background: red"         value="danger"> Rojo</option>
                                            <option  style="background: yellow"value="warning">Amarillo</option>
                                            <option  style="background: cornflowerblue" value="info">Celeste</option>
                                            <option  style="background: navy" value="primary">Azul Marino</option>
                                            <option  style="background: purple"value="purple">Purpura</option>
                                            <option  style="background: black"value="dark">Negro</option>
                                            <option  style="background: mediumturquoise" value="mint">Turwuesa</option>
                                            <option  style="background: pink"value="prink">Rosado</option>
                                          </select>
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

