<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
</div>
