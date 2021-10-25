@extends('layout.default')
@section('content')
    <div class="container my-3">
        <div class="card">
            <img src="{{$new->getFile('image')}}" class="card-img-top" alt="{{$new->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$new->title}}</h5>
                <p class="card-text">
                    {!! $new->description !!}
                </p>
            </div>
        </div>
    </div>
@endsection
