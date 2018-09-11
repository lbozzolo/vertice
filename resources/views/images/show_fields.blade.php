<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $image->id !!}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Path:') !!}
    <p>{!! $image->path !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $image->title !!}</p>
</div>

<!-- Imageable Id Field -->
<div class="form-group">
    {!! Form::label('imageable_id', 'Imageable Id:') !!}
    <p>{!! $image->imageable_id !!}</p>
</div>

<!-- Imageable Type Field -->
<div class="form-group">
    {!! Form::label('imageable_type', 'Imageable Type:') !!}
    <p>{!! $image->imageable_type !!}</p>
</div>

<!-- Main Field -->
<div class="form-group">
    {!! Form::label('main', 'Main:') !!}
    <p>{!! $image->main !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $image->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $image->updated_at !!}</p>
</div>

