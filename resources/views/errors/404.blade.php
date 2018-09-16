@extends('errors.layout')

@section('content')

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="text-center col-lg-2">
                            <i class="fa fa-map text-default" style="font-size: 5em"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2>Página no encontrada</h2>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="text-center col-lg-2">

                        </div>
                        <div class="col-lg-10">
                            <h3>Error 404</h3>
                            <p>No se ha encontrado la página a la que desea acceder.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ URL::previous() }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>

@endsection