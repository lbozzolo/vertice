@extends('web.layout')


@section('content')

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- SERVICES -->
                        <div class="row-services">
                            <div class="container">



                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                        <div class="themesflat-headings style-1 text-center clearfix">
                                            <h2 class="heading font-size-30">EQUIPAMIENTOS</h2>
                                            <div class="sep has-icon width-125 clearfix">
                                                <div class="sep-icon">
                                                    <span class="sep-icon-before sep-center sep-solid"></span>
                                                    <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                    <span class="sep-icon-after sep-center sep-solid"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>

                                        <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                        <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">

                                            @forelse($insumos as $insumo)

                                                <div class="project-item green villa">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                            @if($insumo->main_image)
                                                                <img src="{{ route('imagenes.ver', $insumo->main_image->path) }}" class="img-responsive" alt="{!! $insumo->main_image->title !!}" style="margin: 0px auto">
                                                            @endif
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="{!! route('web.equipamiento.detalle', $insumo->id) !!}">{!! $insumo->name !!}</a></h5>
                                                            <div class="elm-meta">
                                                                <ul class="list-inline">
                                                                    @foreach($insumo->categorias as $categoria)
                                                                        <span class="label">{!! $categoria->name !!}</span>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @empty

                                                <p>NO HAY EVENTOS PARA MOSTRAR</p>

                                            @endforelse

                                            <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->
                        </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

@endsection