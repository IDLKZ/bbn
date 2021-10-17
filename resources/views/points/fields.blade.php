<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bookmarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookmarks', 'Bookmarks:') !!}
    {!! Form::text('bookmarks', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Graffiti Field -->
<div class="form-group col-sm-6">
    {!! Form::label('graffiti', 'Graffiti:') !!}
    {!! Form::text('graffiti', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Smoking Products Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smoking_products', 'Smoking Products:') !!}
    {!! Form::text('smoking_products', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::text('video', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>