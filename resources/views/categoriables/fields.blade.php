<!-- Categoriable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoriable_id', 'Categoriable Id:') !!}
    {!! Form::number('categoriable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoriable Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoriable_type', 'Categoriable Type:') !!}
    {!! Form::number('categoriable_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    {!! Form::number('categoria_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categoriables.index') !!}" class="btn btn-default">Cancelar</a>
</div>
