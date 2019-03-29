<div class="card">

    <div class="card-body">
        <span class="float-right">

            @if($work->active)
                <label class="badge badge-success">ACTIVO</label>
            @else
                <label class="badge badge-danger">INACTIVO</label>
            @endif
        </span>
        <small class="float-right mr-2" style="padding: 5px">{!! $work->fecha_creado !!}</small>
        <h4>{!! $work->title !!}</h4>
        {!! $work->body !!}
    </div>

    <div class="card-body">
        <a href="{!! route('works.edit', $work->id) !!}" class="btn btn-primary">Editar</a>
        <a href="{!! route('works.index') !!}" class="btn btn-default">Cancelar</a>
    </div>

</div>
