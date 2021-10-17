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

            {!! Form::model($partners, ['route' => ['partners.update', $partners->id], 'method' => 'patch', 'files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('partners.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Обновить', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('partners.index') }}" class="btn btn-default">Отмена</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
