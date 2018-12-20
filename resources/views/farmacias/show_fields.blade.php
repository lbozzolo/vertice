<!-- Id Field -->
<div class="form-group">
    {!! Form::label('active', 'Entrada activs:') !!}
    <p>{!! ($farmacia->active)? 'Activa' : 'Inactiva' !!}</p>
</div>

<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $farmacia->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Título:') !!}
    <p>{!! $farmacia->title !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Texto:') !!}
    <p>{!! $farmacia->body !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $farmacia->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $farmacia->updated_at !!}</p>
</div>


