<table class="table table-responsive" id="empresas-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Texto</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($farmacias as $farmacia)
        <tr>
            <td>{!! $farmacia->id !!}</td>
            <td>{!! $farmacia->title !!}</td>
            <td>{!! $farmacia->body !!}</td>
            <td>{!! $farmacia->created_at !!}</td>
            <td>{!! $farmacia->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['farmacias.destroy', $farmacia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('farmacias.show', [$farmacia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('farmacias.edit', [$farmacia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro que desea eliminar esta empresa?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>