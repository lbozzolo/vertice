<table class="table table-responsive" id="insumos-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Código</th>
            <th>Categorías</th>
            <th>Creado</th>
            <th>Ultima edición</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{!! $producto->id !!}</td>
            <td>{!! $producto->name !!}</td>
            <td>{!! $producto->code !!}</td>
            <td>
                @forelse($producto->categorias as $categoria)
                    <span class="label label-default">{!! $categoria->name !!}</span>
                @empty
                    --
                @endforelse
            </td>
            <td>{!! $producto->fecha_creado !!}</td>
            <td>{!! $producto->fecha_editado !!}</td>
            <td>
                {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productos.show', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productos.edit', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro que desea eliminar este producto?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>