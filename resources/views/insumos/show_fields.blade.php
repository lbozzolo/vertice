<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $insumo->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $insumo->name !!}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Código:') !!}
    <p>{!! $insumo->code !!}</p>
</div>

<div class="form-group">
    {!! Form::label('categorias', 'Categorías:') !!}<br>
    @forelse($insumo->categorias as $categoria)
        <span class="label label-default">{!! $categoria->name !!}</span>
    @empty
        <small class="text-muted"><em>no hay categorías especificadas</em></small>
    @endforelse
</div>

<div class="form-group">
    {!! Form::label('colors', 'Colores:') !!}<br>
    @forelse($insumo->colors as $color)
        <span class="label label-default">{!! $color->name !!}</span>
    @empty
        <small class="text-muted"><em>no hay colores especificados</em></small>
    @endforelse
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $insumo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $insumo->updated_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('images', 'Imágenes') !!}
    <ul class="list-inline" style="border: 2px dotted lightgrey; padding: 5px">
        @forelse($insumo->images as $imagen)

            <li>
                <span style="display: inline-block">
                    <a href="" data-toggle="modal" data-target="#modalVerImage{!! $imagen->id !!}">
                        <img src="{{ route('imagenes.ver', $imagen->path) }}" alt="{!! $imagen->title !!}" class="img-responsive" style="{!! ($imagen->main == 0)? 'opacity: 0.5;' : '' !!} height: 80px">
                    </a>
                </span>
            </li>

        @empty

            <li class="text-muted"><i class="fa fa-meh-o"></i> <small><em>No hay imágenes para mostrar.</em></small> </li>

        @endforelse
    </ul>
</div>

@foreach($insumo->images as $imagen)

    <div class="modal fade" id="modalVerImage{!! $imagen->id !!}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ route('imagenes.ver', $imagen->path) }}" class="img-responsive" alt="{!! $imagen->title !!}" style="margin: 0px auto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

@endforeach

