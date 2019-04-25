@extends('layouts.app')

@section('css')
    <style type="text/css">
        body .popover{display:none !important; }
    </style>
@endsection

@section('content')

    <div class="card " id="form-fields">
        <div class="card-body">

            <h1>
                {!! ucfirst($modelSpanish) !!} /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($item, ['route' => [$modelPlural.'.update', $item->id], 'method' => 'patch']) !!}

                    <div class="row">
                    @include($modelPlural.'.fields')
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

@endsection