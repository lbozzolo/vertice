<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th style="width: 100px">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($estatutos as $estatuto)
        <tr>
            <td>{!! $estatuto->id !!}</td>
            <td>{!! $estatuto->title !!}</td>
            <td>{!! $estatuto->fecha_creado !!}</td>
            <td>
                <label class="{!! ($estatuto->active)? 'badge badge-success' : 'badge badge-danger' !!}">{!! ($estatuto->active)? 'ACTIVO' : 'INACTIVO' !!}</label>
            </td>
            <td>

                <div class='btn-group'>
                    <a href="{!! route('estatutos.show', [$estatuto->id]) !!}" class='btn btn-secondary btn-xs' title="Ver detalles"><i class="mdi mdi-18px mdi-file-document-box"></i></a>
                    <a href="{!! route('estatutos.edit', [$estatuto->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $estatuto->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="delete{!! $estatuto->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                {!! Form::open(['route' => ['estatutos.destroy', $estatuto->id], 'method' => 'delete']) !!}

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