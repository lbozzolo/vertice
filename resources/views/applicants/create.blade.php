@extends('layouts.app')

@section('content')

    <div class="card col-lg-12">
        <div class="card-body">

            <h1>Aspirantes / <span class="text-warning">Agregar</span></h1>
            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => 'applicants.store']) !!}

                    <div class="row">
                        @include('applicants.fields')
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