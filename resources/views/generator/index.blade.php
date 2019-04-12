@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1>
                Generator
                <a class="btn btn-primary btn-sm" href="{!! route('generator.create') !!}">Agregar</a>
            </h1>

        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">

            {!! Form::open(['url' => route('generator.make.model'), 'method' => 'post']) !!}

            <div class="form-group">
                {!! Form::label('model', 'Nombre del modelo') !!}
                {!! Form::text('model', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

