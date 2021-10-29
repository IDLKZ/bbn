<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Наименование компании:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Ссылка на сайт:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Логотип компании:') !!}
    {!! Form::file('logo', ['class' => 'form-control', 'accept' => 'image/*']) !!}
</div>
