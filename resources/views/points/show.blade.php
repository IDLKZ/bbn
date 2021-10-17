@extends('layouts.app')
@push('page_css')
    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}">
    <style>
        #map {height: 400px}
    </style>
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Подробнее</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('points.index') }}">
                        Назад
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('points.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page_scripts')
    <script src="{{asset('js/leaflet.js')}}"></script>
    <script>
        var map = L.map('map').setView([48.005284, 66.9045434], 5);
        googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        let bookmarks = @json(json_decode($points->bookmarks)),
            graffiti = @json(json_decode($points->graffiti)),
            smoke = @json(json_decode($points->smoking_products));

        if (bookmarks != null){
            var bookmarkIcon = L.icon({
                iconUrl: '/images/bookmark.png',
            });
            L.marker(bookmarks[0], {icon: bookmarkIcon}).addTo(map);
        }
        if (graffiti != null){
            var graffitiIcon = L.icon({
                iconUrl: '/images/Graffiti.png',
            });
            L.marker(graffiti[0], {icon: graffitiIcon}).addTo(map);
        }
        if (smoke != null){
            var smokeIcon = L.icon({
                iconUrl: '/images/smoke.png',
            });
            L.marker(smoke[0], {icon: smokeIcon}).addTo(map);
        }
    </script>
@endpush
