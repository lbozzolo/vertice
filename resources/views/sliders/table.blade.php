<table class="table table-responsive" id="sliders-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Imágenes</th>
            <th>Activar</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
        <tr>
            <td>{!! $slider->id !!}</td>
            <td>{!! $slider->name !!}</td>
            <td>
                <ul class="list-inline" style="border: 2px dotted lightgrey; padding: 5px">
                    @forelse($slider->images as $imagen)

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
            </td>
            <td>

                <div>
                    @if(!$slider->active && count($slider->images) != 0)
                        <a href="{!! route('sliders.activate', $slider->id) !!}" class="btn btn-primary">Activar este slider</a>
                    @else
                        <span class="btn btn-primary" disabled>Activar este slider</span>
                    @endif
                </div>


                @if($slider->text_active)
                    <span class="text-center text-success">Texto sobre la imagen activado</span>
                @else
                    <span class="text-center text-danger">Texto sobre la imagen desactivado</span>
                @endif

            </td>
            <td>
                {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sliders.show', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sliders.edit', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro que desea eliminar este slider?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>