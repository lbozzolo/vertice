<div class="card">

    <div class="card-header">
        <span class="float-right">
            @if($noticia->active)
                <label class="badge badge-success">ACTIVA</label>
            @else
                <label class="badge badge-danger">INACTIVA</label>
            @endif
            @if($noticia->highlight)
                <label class="badge badge-warning">Destacada</label>
            @else
                <label class="badge badge-dark">Estándar</label>
            @endif
        </span>
        <h4>{!! $noticia->title !!}</h4>
    </div>
    <div class="card-body" style="background-color: #f2f8f9">
        <div>
            {!! $noticia->body !!}
        </div>
    </div>
    <div class="card-footer">
        <span class="float-right">{!! $noticia->fecha_creado !!}</span>
        @forelse($noticia->categorias as $categoria)
            <label class="badge badge-dark">{!! $categoria->name !!}</label>
        @empty
            <span class="text-muted"><em>no hay categorías especificadas</em></span>
        @endforelse
    </div>

    <div class="card-body">
        <a href="{!! route('noticias.edit', $noticia->id) !!}" class="btn btn-primary">Editar</a>
        <a href="{!! route('noticias.index') !!}" class="btn btn-default">Cancelar</a>
    </div>

</div>
