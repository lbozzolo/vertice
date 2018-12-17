<h4>Imágenes de galería</h4>
<ul class="list-inline" style="border: 2px dotted lightgrey; padding: 5px">
    @forelse($images as $imagen)

        <li>
            <span style="display: inline-block">
                <a href="" data-toggle="modal" data-target="#modalVerImage{!! $imagen->id !!}">
                    <img src="{{ route('imagenes.ver', $imagen->path) }}" alt="{!! $imagen->title !!}" class="img-responsive" style="height: 80px">
                </a>
            </span>
            <div class="modal fade" id="modalVerImage{!! $imagen->id !!}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="{{ route('imagenes.ver', $imagen->path) }}" class="img-responsive" alt="{!! $imagen->title !!}" style="margin: 0px auto">
                        </div>
                        <div class="modal-footer">

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
                                            {!! Form::open(['method' => 'DELETE', 'url' => route('images.destroy', $imagen->id)]) !!}
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
        </li>

    @empty

        <li class="text-muted"><i class="fa fa-meh-o"></i> <small><em>No hay imágenes para mostrar.</em></small> </li>

    @endforelse
</ul>

<h4>Otras imágenes</h4>
<ul class="list-inline" style="border: 2px dotted lightgrey; padding: 5px">
    @forelse($otras as $imagen)

        <li>
            <span style="display: inline-block">
                <a href="" data-toggle="modal" data-target="#modalVerImage{!! $imagen->id !!}">
                    <img src="{{ route('imagenes.ver', $imagen->path) }}" alt="{!! $imagen->title !!}" class="img-responsive" style="height: 80px">
                </a>
            </span>
            <div class="modal fade" id="modalVerImage{!! $imagen->id !!}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="{{ route('imagenes.ver', $imagen->path) }}" class="img-responsive" alt="{!! $imagen->title !!}" style="margin: 0px auto">
                        </div>
                        <div class="modal-footer">

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
                                            {!! Form::open(['method' => 'DELETE', 'url' => route('images.destroy', $imagen->id)]) !!}
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
        </li>

    @empty

        <li class="text-muted"><i class="fa fa-meh-o"></i> <small><em>No hay imágenes para mostrar.</em></small> </li>

    @endforelse
</ul>

{{--<table class="table table-responsive" id="images-table">--}}
    {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Id</th>--}}
            {{--<th>Ruta</th>--}}
            {{--<th>Nombre</th>--}}
            {{--<th>Principal</th>--}}
            {{--<th>Created_at</th>--}}
            {{--<th>Updated_at</th>--}}
            {{--<th colspan="3">Action</th>--}}
        {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@foreach($images as $image)--}}
        {{--<tr>--}}
            {{--<td>{!! $image->id !!}</td>--}}
            {{--<td>{!! $image->path !!}</td>--}}
            {{--<td>{!! $image->title !!}</td>--}}
            {{--<td>{!! $image->main !!}</td>--}}
            {{--<td>{!! $image->created_at !!}</td>--}}
            {{--<td>{!! $image->updated_at !!}</td>--}}
            {{--<td>--}}
                {{--{!! Form::open(['route' => ['images.destroy', $image->id], 'method' => 'delete']) !!}--}}
                {{--<div class='btn-group'>--}}
                    {{--<a href="{!! route('images.show', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    {{--<a href="{!! route('images.edit', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
{{--</table>--}}