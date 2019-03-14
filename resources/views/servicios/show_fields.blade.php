<table class="table table-striped table-bordered">
    <tbody>
    <tr>
        <td>Id:</td>
        <td>{!! $servicio->id !!}</td>
    </tr>
    <tr>
        <td>Título:</td>
        <td>{!! $servicio->title !!}</td>
    </tr>
    <tr>
        <td>Texto:</td>
        <td>{!! $servicio->body !!}</td>
    </tr>
    <tr>
        <td>Fecha:</td>
        <td>{!! $servicio->fecha_creado !!}</td>
    </tr>
    <tr>
        <td>Última vez editado:</td>
        <td>{!! $servicio->fecha_editado !!}</td>
    </tr>
    <tr>
        <td>Estado:</td>
        <td>
            <label class="{!! ($servicio->active)? 'badge badge-success' : 'badge badge-danger' !!}">{!! ($servicio->active)? 'ACTIVO' : 'INACTIVO' !!}</label>
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2">
            <a href="{!! route('servicios.edit', $servicio->id) !!}" class="btn btn-primary">Editar</a>
            <a href="{!! route('servicios.index') !!}" class="btn btn-default">Cancelar</a>
        </td>
    </tr>
    </tfoot>
</table>




