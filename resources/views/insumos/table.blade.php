<table class="table table-responsive" id="insumos-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Código</th>
            <th>Colores</th>
            <th>Categorías</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($insumos as $insumo)
        <tr>
            <td>{!! $insumo->id !!}</td>
            <td>{!! $insumo->name !!}</td>
            <td>{!! $insumo->code !!}</td>
            <td>
                @forelse($insumo->colors as $color)
                    <span class="label label-default">{!! $color->name !!}</span>
                @empty
                    --
                @endforelse
            </td>
            <td>
                @forelse($insumo->categorias as $categoria)
                    <span class="label label-default">{!! $categoria->name !!}</span>
                @empty
                    --
                @endforelse
            </td>
            <td>{!! $insumo->created_at !!}</td>
            <td>{!! $insumo->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['insumos.destroy', $insumo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('insumos.show', [$insumo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('insumos.edit', [$insumo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro que desea eliminar este insumo?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>