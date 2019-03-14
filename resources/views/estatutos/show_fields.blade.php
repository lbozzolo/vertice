<table class="table table-striped table-bordered">
    <tbody>
    <tr>
        <td>Id:</td>
        <td>{!! $estatuto->id !!}</td>
    </tr>
    <tr>
        <td>Título:</td>
        <td>{!! $estatuto->title !!}</td>
    </tr>
    <tr>
        <td>Fecha:</td>
        <td>{!! $estatuto->fecha_creado !!}</td>
    </tr>
    <tr>
        <td>Última vez editado:</td>
        <td>{!! $estatuto->fecha_editado !!}</td>
    </tr>
    <tr>
        <td>Estado:</td>
        <td>
            <label class="{!! ($estatuto->active)? 'badge badge-success' : 'badge badge-danger' !!}">{!! ($estatuto->active)? 'ACTIVO' : 'INACTIVO' !!}</label>
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2">
            <a href="{!! route('estatutos.edit', $estatuto->id) !!}" class="btn btn-primary">Editar</a>
            <a href="{!! route('estatutos.index') !!}" class="btn btn-default">Cancelar</a>
        </td>
    </tr>
    </tfoot>
</table>

