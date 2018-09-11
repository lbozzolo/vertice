<table class="table table-responsive" id="categoriables-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>categoriable_id</th>
            <th>categoriable_type</th>
            <th>categoria_id</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categoriables as $categoriable)
        <tr>
            <td>{!! $categoriable->id !!}</td>
            <td>{!! $categoriable->categoriable_id !!}</td>
            <td>{!! $categoriable->categoriable_type !!}</td>
            <td>{!! $categoriable->categoria_id !!}</td>
            <td>{!! $categoriable->created_at !!}</td>
            <td>{!! $categoriable->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['categoriables.destroy', $categoriable->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categoriables.show', [$categoriable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categoriables.edit', [$categoriable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>