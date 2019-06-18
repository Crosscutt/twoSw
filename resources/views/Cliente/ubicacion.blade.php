@extends('welcome')

@section('content')
<style>
#map {
    height: 700px;
    width: 100%;
  }
</style>
<div class="panel">
        
        <div class="panel-heading">
            <h3 class="panel-title">Ubicacion del Cliente
            <a href="{{url('cliente/index')}}">
             <button class="btn btn-success  pull-right">Regresar</button>
              </a>
            </h3> 
        </div>
        
        <div  id="map"></div>
        @foreach ($ubicacion as $item)
        <input id="lat" value="{{$item->lat}}" style="display: none" />
        <input id="lng" value="{{$item->log}}" style="display: none"/>
        @endforeach
</div>




<script>

var x=document.getElementById('lat').value;
var y=document.getElementById('lng').value;
        function initMap() {
            var myLatLng = {lat: parseFloat(x), lng: parseFloat(y)};
        map = new google.maps.Map(document.getElementById('map'), {
          scaleControl: true,
          center: myLatLng,
          zoom: 13,
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD64hSjP3yTpz0UVku8q1diTmFDVW_evY0&callback=initMap"></script>



@endsection