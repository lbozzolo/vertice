<table class="table datatables">
    <thead>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Fecha</th>
            <th>Categorías</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{!! $item->id !!}</td>
            <td>{!! $item->title !!}</td>
            <td>{!! $item->fecha_creado !!}</td>
            <td>
                @foreach($item->categories as $category)

                    <label class="badge badge-info">{!! $category->name !!}</label>

                @endforeach
            </td>
            <td>
                @if($item->active)
                    <label class="badge badge-success">{!! ($gender == 'M')? 'activo' : 'activa' !!}</label>
                @else
                    <label class="badge badge-danger">{!! ($gender == 'M')? 'inactivo' : 'inactiva' !!}</label>
                @endif
            </td>
            <td>

                <div class='btn-group'>
                    <a href="{!! route($modelPlural.'.show', [$item->id]) !!}" class='btn btn-secondary btn-xs' title="Ver detalles"><i class="mdi mdi-18px mdi-file-document-box"></i></a>
                    <a href="{!! route($modelPlural.'.edit', [$item->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $item->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="delete{!! $item->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Eliminar {!! ucfirst($modelSpanish) !!}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar {!! ($gender == 'M')? 'este' : 'esta' !!} {!! $modelSpanish !!}?</p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::open(['route' => [$modelPlural.'.destroy', $item->id], 'method' => 'delete']) !!}

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