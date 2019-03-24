@extends('layouts.app-sistema')

@section('content')

    <div class="row">

        <div class="col-lg-4">

            <div class="card" style="min-height: 245px">
                <div class="card-body">

                    <h2>Resúmenes mensuales</h2>

                    {!! Form::open(['url' => route('liquidaciones.consultar.resumenes.mensuales'), 'method' => 'post']) !!}

                    <div class="row">

                        <div class="form-group col-lg-6">
                            {!! Form::label('fecha_desde', 'Desde') !!}
                            {!! Form::text('fecha_desde', null, ['class' => 'form-control datepicker', 'autocomplete' => 'off']) !!}
                        </div>
                        <div class="form-group col-lg-6">
                            {!! Form::label('fecha_hasta', 'Hasta') !!}
                            {!! Form::text('fecha_hasta', null, ['class' => 'form-control datepicker', 'autocomplete' => 'off']) !!}
                            {!! Form::hidden('fecha_hasta_hidden', null,['id' => 'fecha-alternativa']) !!}
                        </div>
                        <div class="form-group col-lg-12">
                            {!! Form::submit('Consultar', ['class' => 'btn btn-primary btn-sm']) !!}
                        </div>

                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>

        @include('liquidaciones.partials.medico-info')

    </div>

    @if(isset($result_mensuales))
        @include('liquidaciones.partials.result-mensuales')
    @endif

    @if(isset($total_mensuales))
        @include('liquidaciones.partials.total-mensuales')
    @endif

@endsection

@section('js')

    <script>

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
        });

    </script>

@endsection

