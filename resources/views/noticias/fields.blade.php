<!-- Name Field -->
<div class="form-group col-lg-6">
    {!! Form::label('title', 'Título:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-lg-6">
    {!! Form::label('active', 'Estado:') !!}
    {!! Form::select('active', ['0' => 'Inactiva', '1' => 'Activa'], (isset($noticia))? $noticia->active : null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-lg-12">
    {!! Form::label('body', 'Descripción:') !!}
    <div>
        {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'summernote', 'rows' => '10']) !!}
    </div>
</div>

<div class="form-group col-lg-9">
    {!! Form::label('categorias', 'Categorías') !!}
    @if(isset($noticia))
    <select name="categorias[]" class="select2 form-control" placeholder="" multiple style="width: 100%">
        @foreach ($categorias as $key => $value)
            <option value="{{ $key }}" @if ($noticia->categorias->contains($key)) selected @endif>
                {{ $value }}
            </option>
        @endforeach
    </select>
    @else
        {!! Form::select('categorias[]', $categorias, null, ['class' => 'form-control select2', 'placeholder' => '']) !!}
    @endif
</div>

<!-- Hightlight Field -->
<div class="form-group col-lg-3" style="padding-top: 30px">
    {!! Form::checkbox('highlight', '1') !!}
    {!! Form::label('highlight', 'Destacar esta noticia', ['style' => 'padding-top: 5px']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('noticias.index') !!}" class="btn btn-default">Cancelar</a>
</div>
