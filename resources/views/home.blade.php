@extends('layouts.app')

@section('content')

    @if(!Auth::user()->isMedico())
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-cube text-danger icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Estatutos</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">{!! $estatutos !!}</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <a href="{{ route('estatutos.create') }}" class="btn btn-success btn-xs">+ agregar</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-receipt text-warning icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Noticias</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">{!! $noticias !!}</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <a href="{{ route('noticias.create') }}" class="btn btn-success btn-xs">+ agregar</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-forum-outline text-success icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Servicios</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">{!! $servicios !!}</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <a href="{{ route('servicios.create') }}" class="btn btn-success btn-xs">+ agregar</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-code-tags text-info icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Categorías</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">{!! $categorias !!}</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <a href="{{ route('categorias.create') }}" class="btn btn-success btn-xs">+ agregar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="row">



        </div>
    </div>

@endsection
