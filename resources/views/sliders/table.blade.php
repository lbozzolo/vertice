<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Texto visible</th>
            <th>Estado</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
        <tr>
            <td>{!! $slider->id !!}</td>
            <td>{!! $slider->name !!}</td>
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
                    <a href="{!! route('sliders.edit', [$slider->id]) !!}" class='btn btn-dark btn-xs' title="Editar"><i class="mdi mdi-18px mdi-pencil-box"></i></a>
                    <button title="Eliminar" type="button" data-toggle="modal" data-target="#delete{!! $slider->id !!}" class="btn btn-xs  btn-danger"><i class="mdi mdi-delete mdi-18px"></i></button>
                    @if(!$slider->active && count($slider->images) != 0)
                        <a href="{!! route('sliders.activate', $slider->id) !!}" title="Activar este slider" class="btn btn-xs btn-success"><i class="mdi mdi-flag-variant mdi-18px"></i> </a>
                    @else
                        <button type="button" class="btn btn-xs btn-success" title="Activar este slider" disabled><i class="mdi mdi-flag-variant-outline mdi-18px"></i></button>
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