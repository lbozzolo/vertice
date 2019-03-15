@extends('layouts.app')

@section('content')

    <div class="card col-lg-12">
        <div class="card-body">

            <h1>Categoría / <span class="text-warning">Agregar</span></h1>
            <div class="row">
                <div class="card-body">
                    {!! Form::open(['route' => 'categorias.store']) !!}

                    <div class="row">
                        @include('categorias.fields')
                    </div>

                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>

@endsection
