<!-- Name Field -->
<div class="form-group col-lg-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-lg-12">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<div class="col-lg-10">
    <div class="form-group ">
        {!! Form::label('colors', 'Colores') !!}
        <select name="colors[]" class="select2 form-control" placeholder="" multiple>
            @foreach ($colors as $key => $value)
                <option value="{{ $key }}" @if ($insumo->colors->contains($key)) selected @endif>
                    {{ $value }}
                </option>
            @endforeach
        </select>
    </div>
</div>


<div class="form-group col-lg-10">
    {!! Form::label('categorias', 'Categorías') !!}
    <select name="categorias[]" class="select2 form-control" placeholder="" multiple>
        @foreach ($categorias as $key => $value)
            <option value="{{ $key }}" @if ($insumo->categorias->contains($key)) selected @endif>
                {{ $value }}
            </option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('insumos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
