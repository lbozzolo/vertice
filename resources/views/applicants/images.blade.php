
<div class="card" id="list-images">
    <div class="card-header">

        <span class="float-right">
            <span id="producto-id" data-producto-id="{!! route('subir.imagen', ['id' => $servicio->id, 'class' => 'Servicio']) !!}"></span>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <input type="file" class="file-upload form-control" id="file-upload" name="img" accept="image/*">
        </span>
        <span class="float-right text-secondary" style="padding: 5px; font-size: 1.5em"><i class="mdi mdi-cloud-upload"></i></span>
        <h3>Imágenes</h3>

    </div>
    <div class="card-body" style="background-color: #f2f8f9">
        @forelse($servicio->images as $imagen)

            <span style="display: inline-block">
            <a href="" data-toggle="modal" data-target="#modalVerImage{!! $imagen->id !!}">
                <img src="{{ route('imagenes.ver', $imagen->path) }}" alt="{!! $imagen->title !!}" class="img-responsive" style="{!! ($imagen->main == 0)? 'opacity: 0.5;' : '' !!} height: 80px">
            </a>
        </span>

        @empty

            <span class="text-muted"><i class="mdi mdi-vanish"></i> <small><em>No hay imágenes para mostrar.</em></small> </span>

        @endforelse
    </div>
</div>

<div class="card">
    <div class="card-body">

        <div id="croppie-image" style="display: none">

            <div id="resizer" style="width: 100%"></div>

            <div class="lead text-center">
                <button class="btn btn-secondary rotate" data-deg="90"><i class="mdi mdi-rotate-left" style="font-size: 2em"></i></button>
                <button class="btn btn-primary" id="upload" >Aceptar</button>
                <a href="{{ route('applicants', $servicio->id) }}" class="btn btn-light">Cancelar</a>
                <button class="btn btn-secondary rotate" data-deg="-90"><i class="mdi mdi-rotate-right" style="font-size: 2em"></i></button>
            </div>

        </div>

    </div>
</div>

@foreach($servicio->images as $imagen)

    <div class="modal fade" id="modalVerImage{!! $imagen->id !!}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ route('imagenes.ver', $imagen->path) }}" class="img-responsive" alt="{!! $imagen->title !!}" style="width: 100%; margin: 0px auto">
                </div>
                <div class="modal-footer">

                    @if($imagen->main == 0)
                        <a href="{{ route('images.main', ['id' => $servicio->id, 'class' => 'Servicio', 'imagen' => $imagen->id]) }}" class="btn btn-primary" title="Marcar como principal">Marcar como principal</a>
                    @else
                        <a href="#" class="btn btn-primary" disabled title="Marcar como principal">Marcar como principal</a>
                    @endif
                    <button class="btn btn-danger" title="Eliminar foto" data-toggle="modal" data-target="#modalDeleteImage{!! $imagen->id !!}">Eliminar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <div class="modal fade text-left" id="modalDeleteImage{!! $imagen->id !!}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Eliminar imagen</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-red">¿Está seguro que desea eliminar la imagen?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                                    {!! Form::open(['method' => 'DELETE', 'url' => route('images', $imagen->id)]) !!}
                                    {!! Form::submit('Eliminar de todos modos', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach


