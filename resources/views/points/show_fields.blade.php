<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'Пользователь:') !!}
    <p>{{ $points->user->login }}</p>
</div>

<!-- Bookmarks Field -->
@if($points->bookmarks)
<div class="col-sm-12">
    {!! Form::label('bookmarks', 'Закладка:') !!}
    <div id="map"></div>
</div>
@endif
@if($points->graffiti)
<!-- Graffiti Field -->
<div class="col-sm-12">
    {!! Form::label('graffiti', 'Граффити:') !!}
    <div id="map"></div>
</div>
@endif
@if($points->smoking_products)
<!-- Smoking Products Field -->
<div class="col-sm-12">
    {!! Form::label('smoking_products', 'Курительные изделия:') !!}
    <div id="map"></div>
</div>
@endif
<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Адрес:') !!}
    <p>{{ $points->address }}</p>
</div>

<!-- Video Field -->
<div class="col-sm-12">
    {!! Form::label('video', 'Видео с места:') !!}
    <p>
        <video  width="400" height="300" controls="controls" src="/{{ $points->video }}"></video>
    </p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Статус:') !!}
    <p>{{ $points->status ? 'Подтвержден' : 'На модерации'}}</p>
</div>

<div class="col-sm-12 d-flex justify-content-between">
    @if(!$points->status)
    {!! Form::open(['route' => ['changeStatusPoint', $points->id], 'method' => 'put']) !!}
        <button type="submit" class="btn btn-outline-success">Подтвердить</button>
    {!! Form::close() !!}
    @endif
    {!! Form::open(['route' => ['points.destroy', $points->id], 'method' => 'delete']) !!}
    <button type="submit" class="btn btn-outline-danger">Удалить</button>
    {!! Form::close() !!}
</div>
