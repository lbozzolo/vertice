<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Imágenes</th>
            <th>Texto</th>
            <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
        <tr>
            <td>{!! $slider->id !!}</td>
            <td>{!! $slider->name !!}</td>
            <td>
                {{--@if($slider->mainImage())--}}
                {{--<img src="{{ route('imagenes.ver', $slider->mainImage()->path) }}"--}}
                     {{--alt="{!! $slider->mainImage()->title !!}"--}}
                     {{--style="{!! ($slider->mainImage()->main == 0)? 'opacity: 0.5;' : '' !!} border-radius: 0px!important">--}}
                {{--@endif--}}
                <ul class="list-inline" style="border: 2px dotted lightgrey; padding: 5px">
                    @forelse($slider->images as $imagen)

                        <li>
                            <span style="display: inline-block">
                                <img src="{{ route('imagenes.ver', $imagen->path) }}" alt="{!! $imagen->title !!}" style="{!! ($imagen->main == 0)? 'opacity: 0.5;' : '' !!} border-radius: 0px!important;">
                            </span>
                        </li>

                    @empty

                        <li class="text-muted"><i class="fa fa-meh-o"></i> <small><em>No hay imágenes para mostrar.</em></small> </li>

                    @endforelse
                </ul>
            </td>
            <td>
                @if($slider->text_active)
                    <label class="badge badge-primary">activado</label>
                @else
                    <label class="badge badge-secondary">desactivado</label>
                @endif
            </td>
            <td>
                @if($slider->active)
                    <label class="badge badge-success">activado</label>
                @else
                    <label class="badge badge-danger">desactivado</label>
                @endif
            </td>
            <td>

                <div class='btn-group'>
                    <a href="{!! route('sliders.show', [$slider->id]) !!}" class='btn btn-secondary btn-xs' title="Ver detalles"><i class="mdi mdi-18px mdi-file-document-box"></i></a>
                    <a href="{!! route('sliders.edit', [$slider->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $slider->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                    @if(!$slider->active && count($slider->images) != 0)
                        <a href="{!! route('sliders.activate', $slider->id) !!}" class="btn btn-xs btn-success"><i class="mdi mdi-flag-variant mdi-18px"></i> </a>
                    @else
                        <button type="button" class="btn btn-xs btn-success" disabled><i class="mdi mdi-flag-variant-outline mdi-18px"></i></button>
                    @endif
                </div>

                <!-- Modal -->
                <div class="modal fade" id="delete{!! $slider->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar Estatuto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar este estatuto?</p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}

                                <button title="Eliminar" type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>