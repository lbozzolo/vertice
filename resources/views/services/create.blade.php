@extends('layouts.app')

@section('css')
    <style type="text/css">
        body .popover{display:none !important; }
    </style>
@endsection

@section('content')

    <div class="card col-lg-12">
        <div class="card-body">

            <h1>{!! ucfirst($modelSpanish) !!} / <span class="text-warning">Agregar</span></h1>
            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => $modelPlural.'.store']) !!}

                    <div class="row">
                    @include($modelPlural.'.fields')
                    </div>

                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>

@endsection


@section('js')

    <script>

        $('.select2').select2({
           multiple: true
        });

    </script>

@endsection