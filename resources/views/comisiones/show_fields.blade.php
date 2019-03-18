<table class="table table-striped table-bordered">
    <tbody>
    <tr>
        <td>Id:</td>
        <td>{!! $comision->id !!}</td>
    </tr>
    <tr>
        <td>Título:</td>
        <td>{!! $comision->title !!}</td>
    </tr>
    <tr>
        <td>Fecha:</td>
        <td>{!! $comision->fecha_creado !!}</td>
    </tr>
    <tr>
        <td>Última vez editado:</td>
        <td>{!! $comision->fecha_editado !!}</td>
    </tr>
    <tr>
        <td>Estado:</td>
        <td>
            <label class="{!! ($comision->active)? 'badge badge-success' : 'badge badge-danger' !!}">{!! ($comision->active)? 'ACTIVA' : 'INACTIVA' !!}</label>
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2">
            <a href="{!! route('comisiones.edit', $comision->id) !!}" class="btn btn-primary">Editar</a>
            <a href="{!! route('comisiones.index') !!}" class="btn btn-default">Cancelar</a>
        </td>
    </tr>
    </tfoot>
</table>

