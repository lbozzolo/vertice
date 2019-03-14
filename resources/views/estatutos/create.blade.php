@extends('layouts.app')

@section('content')

    <div class="card col-lg-12">
        <div class="card-body">

            <h1>Estatuto / <span class="text-warning">Agregar</span></h1>
            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => 'estatutos.store']) !!}

                    <div class="row">
                        @include('estatutos.fields')
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