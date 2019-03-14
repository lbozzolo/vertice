<!-- Title Field -->
<div class="form-group col-lg-6">
    {!! Form::label('title', 'Título:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Active Field -->
<div class="form-group col-lg-6 mt-4">
    {!! Form::checkbox('active') !!}
    {!! Form::label('active', 'Marcar este estatuto como ACTIVO', ['style' => 'padding-top: 6px']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-lg-12">
    {!! Form::label('body', 'Texto:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'summernote']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-lg-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estatutos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
