<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Categorías</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Tipo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($noticias as $noticia)
        <tr>
            <td>{!! $noticia->id !!}</td>
            <td>{!! $noticia->title !!}</td>
            <td>
                @forelse($noticia->categorias as $categoria)
                    <label class="badge badge-info">{!! $categoria->name !!}</label>
                @empty
                    --
                @endforelse
            </td>
            <td>{!! $noticia->fecha_creado !!}</td>
            <td>
                @if($noticia->active)
                    <label class="badge badge-success">ACTIVA</label>
                @else
                    <label class="badge badge-danger">INACTIVA</label>
                @endif
            </td>
            <td>
                @if($noticia->highlight)
                    <label class="badge badge-warning">Destacada</label>
                @else
                    <label class="badge badge-dark">Estándar</label>
                @endif
            </td>
            <td>

                <div class='btn-group'>
                    <a href="{!! route('noticias.show', [$noticia->id]) !!}" class='btn btn-secondary btn-xs' title="Ver detalles"><i class="mdi mdi-18px mdi-file-document-box"></i></a>
                    <a href="{!! route('noticias.edit', [$noticia->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $noticia->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="delete{!! $noticia->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar Noticia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar esta noticia?</p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::open(['route' => ['noticias.destroy', $noticia->id], 'method' => 'delete']) !!}

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