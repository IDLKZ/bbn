<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Заголовок:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Описание:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editor']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Картинка:') !!}
    {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
</div>
