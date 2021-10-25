@extends('layout.default')
@push('css')
    <style>
        .carousel-item img {
            width: 500px;
            height: auto;
            margin: auto;
        }
        @media only screen and (max-width: 500px) {
            .carousel-item img {
                width: 100%;
                height: auto;
                margin: auto;
            }
        }
    </style>
@endpush
@section('content')
    <div class="container my-3">
        @if(count($galleries)>0)
            <div id="carouselExampleControls" class="carousel carousel-dark slide w-75 mx-auto" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/uploads/{{$first['image']}}" class="d-block">
                    </div>
                    @foreach($galleries as $gallery)
                    <div class="carousel-item">
                        <img src="/uploads/{{$gallery['image']}}" class="d-block">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @endif
    </div>

    <div class="container">
        {!! $text->text !!}
    </div>
@endsection
@push('js')

@endpush
