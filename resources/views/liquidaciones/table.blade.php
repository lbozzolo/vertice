<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Matrícula</th>
            <th>Activo</th>
            <th>Categoría</th>
            <th>Servicio</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($liquidaciones as $liquidacion)
        <tr>
            <td title="{!! $liquidacion->id !!}">{!! $liquidacion->id !!}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>