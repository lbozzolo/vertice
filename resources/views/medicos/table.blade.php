<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Matrícula</th>
            <th>Activo</th>
            <th>Categoría</th>
            <th>Servicio</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($medicos as $medico)
        <tr>
            <td title="{!! $medico->id !!}">{!! ($medico->apynom && $medico->apynom != ' ')? $medico->apynom : '-' !!}</td>
            <td>{!! ($medico->matricula && $medico->matricula != ' ')? $medico->matricula : '-' !!}</td>
            <td>{!!($medico->activo && $medico->activo != ' ')?  '<label class="badge badge-success">activo</label>' : '<label class="badge badge-danger">inactivo</label>' !!}</td>
            <td>{!! ($medico->categoria && $medico->categoria != ' ')? $medico->categoria : '-' !!}</td>
            <td>{!! ($medico->servicio && $medico->servicio != ' ')? $medico->servicio : '-' !!}</td>
            <td>
                <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-secondary btn-sm">detalles</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>