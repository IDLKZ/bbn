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

            {!! Form::model($userList, ['route' => ['userLists.update', $userList->id], 'method' => 'patch', 'files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('user_lists.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Обновить', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('userLists.index') }}" class="btn btn-default">Отмена</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
