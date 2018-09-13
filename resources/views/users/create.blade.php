@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuario
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'users.store']) !!}

                    <div class="form-group col-sm-4 col-lg-4">
                        {!! Form::label('password', 'Ingrese una contraseña provisoria (máximo 6 caracteres)') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'maxlength' => '6']) !!}
                    </div>

                        @include('users.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
