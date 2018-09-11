<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Imageable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imageable_id', 'Imageable Id:') !!}
    {!! Form::number('imageable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Imageable Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imageable_type', 'Imageable Type:') !!}
    {!! Form::text('imageable_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Main Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main', 'Main:') !!}
    {!! Form::number('main', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('image_file', '') !!}
    {!! Form::file('image_file') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('images.index') !!}" class="btn btn-default">Cancelar</a>
</div>
