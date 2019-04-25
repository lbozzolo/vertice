<div class="card">

    <div class="card-body">
        <span class="float-right">

            @if($item->active)
                <label class="badge badge-success">{!! ($gender == 'M')? 'activo' : 'activa' !!}</label>
            @else
                <label class="badge badge-danger">{!! ($gender == 'M')? 'inactivo' : 'inactiva' !!}</label>
            @endif
        </span>
        <small class="float-right mr-2" style="padding: 5px">{!! $item->fecha_creado !!}</small>
        <h4>{!! $item->title !!}</h4>
        {!! ($item->description)? $item->description : '<small class="text-muted">No hay ninguna descripción</small>' !!}
    </div>

    <div class="card-body">
        <a href="{!! route($modelPlural.'.edit', $item->id) !!}" class="btn btn-primary">Editar</a>
        <a href="{!! route($modelPlural.'.index') !!}" class="btn btn-default">Cancelar</a>
    </div>

</div>
