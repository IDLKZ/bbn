@extends('layout.default')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
    <link rel="stylesheet" href="{{asset('css/leaflet-gps.min.css')}}"/>

    <style>
        #map {height: 400px}
    </style>
@endpush
@section('content')
    <hr>
    <div class="container">
        <form action="{{route('setGraffiti')}}" method="post" id="set-graffiti" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="hidden" id="mapGeo" name="graffiti">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Введите адрес</label>
                        <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="Например, г.Нур-султан улица Сыганак 25">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Загрузите видео с места</label>
                        <input type="file" name="video" class="form-control" accept="video/*">
                    </div>
                    <div class="mb-3">
                        <button id="createMarker" class="btn btn-outline-success">Отправить отчет</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="map"></div>
                </div>
            </div>
        </form>
    </div>


    <hr>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
    <script src="{{asset('js/leaflet-gps.min.js')}}"></script>

    <script>
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            draw: {
                polygon: false,
                rectangle: false,
                marker: true,
                polyline: false,
                circle: false
            },
            edit: {
                featureGroup: drawnItems
            }
        });
        map.addControl(drawControl);
        map.on('draw:created', function (e) {
            // console.log(e);
            var layer = e.layer,
                feature = layer.feature = layer.feature || {};

            feature.type = feature.type || 'Feature';
            var props = feature.properties = feature.properties || {};
            drawnItems.clearLayers();
            drawnItems.addLayer(layer);
        })
        var gps = new L.Control.Gps({
            // autoActive:true,
            autoCenter:true
        });//inizialize control

        gps
            .on('gps:located', function(e) {
                //	e.marker.bindPopup(e.latlng.toString()).openPopup()
                console.log(e.latlng, map.getCenter())
            })
            .on('gps:disabled', function(e) {
                e.marker.closePopup()
            });

        gps.addTo(map);

        let coordinates = [];
        $("#createMarker").on("click",function (e) {
            e.preventDefault();
            map.eachLayer((l) => {
                if( l instanceof L.Marker){
                    coordinates.push(l.getLatLng())
                }
            })
            if(coordinates.length){
                $("#mapGeo").attr("value",JSON.stringify(coordinates));
            }
            $("#set-graffiti").submit();
        });
    </script>
@endpush
