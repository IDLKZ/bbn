<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Заголовок:') !!}
    <p>{{ $news->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Описание:') !!}
    <p>{!! $news->description !!}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Картинка:') !!}
    <p><img src="{{ $news->getFile('image') }}"></p>
</div>

