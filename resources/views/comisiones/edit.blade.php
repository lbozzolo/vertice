@extends('layouts.app')

@section('content')

    <div class="card" id="form-fields">
        <div class="card-body">

            <h1>
                Comisión /
                <span class="text-warning">Editar</span>
            </h1>
            <div class="row">
                <div class="card-body">

                    {!! Form::model($comision, ['route' => ['comisiones.update', $comision->id], 'method' => 'patch']) !!}

                    <div class="row">
                        @include('comisiones.fields')
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')

    <script>

        $(document).ready(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 200,
            });
        });


    </script>

@endsection