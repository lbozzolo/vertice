<table class="table table-responsive" id="colors-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($colors as $color)
        <tr>
            <td>{!! $color->id !!}</td>
            <td>{!! $color->name !!}</td>
            <td>{!! $color->created_at !!}</td>
            <td>{!! $color->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['colors.destroy', $color->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('colors.show', [$color->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('colors.edit', [$color->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>