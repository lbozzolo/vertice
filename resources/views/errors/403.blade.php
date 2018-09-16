@extends('errors.layout')

@section('content')

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-danger" style="margin-top: 20px">
                <div class="panel-heading">
                    <div class="row">
                        <div class="text-center col-lg-2">
                            <i class="fa fa-ban text-danger" style="font-size: 5em"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2>Acceso denegado</h2>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="text-center col-lg-2">

                        </div>
                        <div class="col-lg-10">
                            <h3>Error 403</h3>
                            <p>Usted no tiene los permisos requeridos para acceder a los recursos solicitados.</p>
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