@extends('web.layout')


@section('content')

    <section class="parallax_window_in short" data-parallax="scroll" data-image-src="{{ asset('template-web/assets/img/subheader_in_1.jpg') }}" data-natural-width="1400" data-natural-height="400">
        <div id="sub_content_in">
            <div class="container">
                <h1>Nuestros Servicios</h1>
                <p></p>
            </div>
        </div>
    </section><!-- /section -->

    <div id="position">
        <div class="container">

        </div>
    </div><!-- /position -->

    <main>
        <div class="container margin_60_35">
            <h2 class="main_title"><em></em>Nuestros Clientes nos eligen porque nuestro servicio es de calidad.</span></h2>

            <!--/row-->

            <!--/row-->
        </div><!--/container-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 nopadding">
                    <div class="features-bg">
                        <div class="features-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 nopadding">
                    <div class="features-content">
                        <h3>"Marcando la Diferencia"</h3>
                        <p>
                            Visítenos, nuestros clientes nos prefieren por el amplio surtido de productos, la atención y la buena disposición que hace de nuestra marca un hábito diario.
                        </p>

                    </div>
                </div>
            </div>
        </div><!-- /container-fluid  -->
        <div class="bg_white">
            <div class="container margin_60_35">

                <div class="row">

                    @forelse($servicios as $servicio)

                        <div class="col-sm-6">
                            <div class="box_service_2">
                                <i class="icon_check_alt2"></i>
                                <h4>{!! $servicio->title !!}</h4>
                                <p>{!! $servicio->body !!}</p>
                            </div>
                        </div>

                    @empty
                    @endforelse

                </div><!-- /row  -->

            </div><!-- /container  -->
        </div><!-- /bg_white  -->
    </main><!--/main-->


@endsection