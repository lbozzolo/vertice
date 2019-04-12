<div class="form-group col-lg-6">
    {!! Form::label('title', 'Título:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('active', 'Estado:') !!}
    {!! Form::select('active', ['0' => 'Inactivo', '1' => 'Activo'], (isset($item))? $item->active : null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('type', 'Tipo:') !!}
    {!! Form::select('type', [0 => 'Pasado', 1 => 'Presente'], (isset($item))? $item->type : null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-lg-12">
    {!! Form::label('body', 'Descripción:') !!}
    <div>
        {!! Form::textarea('description', (isset($item)? $item->description : null), ['class' => 'form-control', 'id' => 'summernote', 'rows' => '10']) !!}
    </div>
</div>

{{--EN CASO DE QUE EL MODELO TUVIERA CATEGORIAS--}}

{{--<div class="form-group col-lg-9">--}}
    {{--{!! Form::label('categories', 'Categorías') !!}--}}
    {{--@if(isset($noticia))--}}
    {{--<select name="categories[]" class="select2 form-control" placeholder="" multiple style="width: 100%">--}}
        {{--@foreach ($categories as $key => $value)--}}
            {{--<option value="{{ $key }}" @if ($noticia->categories->contains($key)) selected @endif>--}}
                {{--{{ $value }}--}}
            {{--</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}
    {{--@else--}}
        {{--{!! Form::select('categories[]', $categories, null, ['class' => 'form-control select2', 'placeholder' => '']) !!}--}}
    {{--@endif--}}
{{--</div>--}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-default">Cancelar</a>
</div>
