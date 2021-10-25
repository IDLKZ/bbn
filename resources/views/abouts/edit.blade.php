@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Редактировать</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($about, ['route' => ['abouts.update', $about->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('abouts.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Обновить', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('abouts.index') }}" class="btn btn-default">Отмена</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
@push('page_scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#my-editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
