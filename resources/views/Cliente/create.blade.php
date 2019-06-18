@extends('welcome')

@section('content')

<style>
 #map {
        height: 500px;
        width: 100%;
      }
</style>
<div class="row" >
    <div class="col-sm-12">
        <div class="panel">
        <form method="POST" action="/cliente/store">
            @csrf
            <div class="panel-heading">
            <h4 class="panel-title">Añadir un Nuevo Cliente</h4>
            </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Nombres</label>
                                <input type="text" name="Nombre" class="form-control">
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
                                <input type="text" name="Direccion" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Cedula de Identidad</label>
                                <input type="text" name="Cedula" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">sexo</label>
                                <input type="text" name="sexo" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">telefono</label>
                                <input type="text" name="telefono"  class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">NroCasa</label>
                                <input type="text" name="#casa" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">

                        <div id="map"></div>
                        <input id="lat" type="text" name="lat" style="display: none" />
                        <input id="lng" type="text" name="lng" style="display: none" />
                    </div>
                    </div>
                </div>
                <div class="panel-footer ">
                    <button class="btn btn-success btn-block" type="submit">Grabar</button>
                </div>
            </form>
          
            <script>
                var map;
                var Marcador;
                function initMap() {
                  var sc = {lat: -17.7862892, lng: -63.1811714};
            
                  map = new google.maps.Map(document.getElementById('map'), {
                    scaleControl: true,
                    center: sc,
                    zoom: 13
                  });
            
                  map.addListener('click', function(e) {
                   placeMarkerAndPanTo(e.latLng, map);
                   cargarLatLng(e.latLng, map);
                  });
            
                }
            
                function cargarLatLng(latLng){
                  document.getElementById('lat').value=latLng.lat();
                  document.getElementById('lng').value=latLng.lng();
                }
            
                function placeMarkerAndPanTo(latLng, map) {
                  
                  if(Marcador!=null){
                    Marcador.setMap(null);
                  }
                  var infowindow = new google.maps.InfoWindow({
                  content: "Latitud:"+latLng.lat()+"   Longitud: "+latLng.lng()
                   });
                 
                     Marcador = new google.maps.Marker({
                      position: latLng,
                      map: map,
                      animation:google.maps.Animation.BOUNCE,
                });
            
               infowindow.open(map, Marcador);
               map.panTo(latLng);
            
              }
                
              </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD64hSjP3yTpz0UVku8q1diTmFDVW_evY0&callback=initMap"></script>
        </div>
    </div>
</div>


@endsection

