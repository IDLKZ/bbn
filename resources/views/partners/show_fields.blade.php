<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Наименование компании:') !!}
    <p>{{ $partners->title }}</p>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Ссылка на сайт:') !!}
    <p>{{ $partners->link }}</p>
</div>

<!-- Logo Field -->
<div class="col-sm-12">
    {!! Form::label('logo', 'Логотип компании:') !!}
    <p><img src="{{ $partners->getFile('logo') }}"></p>
</div>

