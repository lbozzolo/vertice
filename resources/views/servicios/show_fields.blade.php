<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $servicio->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Título:') !!}
    <p>{!! $servicio->title !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Texto:') !!}
    <p>{!! $servicio->body !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $servicio->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $servicio->updated_at !!}</p>
</div>

{{--<div class="form-group">--}}
    {{--{!! Form::label('images', 'Imágenes') !!}--}}
    {{--<ul class="list-inline" style="border: 2px dotted lightgrey; padding: 5px">--}}
        {{--@forelse($servicio->images as $imagen)--}}

            {{--<li>--}}
                {{--<span style="display: inline-block">--}}
                    {{--<a href="" data-toggle="modal" data-target="#modalVerImage{!! $imagen->id !!}">--}}
                        {{--<img src="{{ route('imagenes.ver', $imagen->path) }}" alt="{!! $imagen->title !!}" class="img-responsive" style="{!! ($imagen->main == 0)? 'opacity: 0.5;' : '' !!} height: 80px">--}}
                    {{--</a>--}}
                {{--</span>--}}
            {{--</li>--}}

        {{--@empty--}}

            {{--<li class="text-muted"><i class="fa fa-meh-o"></i> <small><em>No hay imágenes para mostrar.</em></small> </li>--}}

        {{--@endforelse--}}
    {{--</ul>--}}
{{--</div>--}}

{{--@foreach($servicio->images as $imagen)--}}

    {{--<div class="modal fade" id="modalVerImage{!! $imagen->id !!}">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-body">--}}
                    {{--<img src="{{ route('imagenes.ver', $imagen->path) }}" class="img-responsive" alt="{!! $imagen->title !!}" style="margin: 0px auto">--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--@endforeach--}}
