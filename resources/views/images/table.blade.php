<table class="table table-responsive" id="images-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Ruta</th>
            <th>Nombre</th>
            <th>Principal</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($images as $image)
        <tr>
            <td>{!! $image->id !!}</td>
            <td>{!! $image->path !!}</td>
            <td>{!! $image->title !!}</td>
            <td>{!! $image->main !!}</td>
            <td>{!! $image->created_at !!}</td>
            <td>{!! $image->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['images.destroy', $image->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('images.show', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('images.edit', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>