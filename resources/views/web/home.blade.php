@extends('web.layout')

@section('content')

    <main>
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:600px;">
                <!-- first slide -->
                <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                    <img src="{{ asset('template-web/assets/img/slides/slide_1.jpg') }}" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Mas de 30 años de reconocida trayectoria</h3>

                </div>
                <!-- second slide -->
                <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                    <img src="{{ asset('template-web/assets/img/slides/slide_2.jpg') }}" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Texto 2</h3>
                </div>
                <!-- third slide -->
                <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                    <img src="{{ asset('template-web/assets/img/slides/slide_3.jpg') }}" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top:45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Texto 3</h3>
                </div>
            </div>
        </div><!-- End layerslider -->

        <!--/container-->

        <div class="container margin_60_35">
            <h3 class="main_title_left"><em></em>Productos Destacados</h3>
            <div class="owl-carousel owl-theme case_studies add_bottom_30">

                <div>
                    <a href="detalle_producto.html" title="Farmacia Osvaldini">
                        <figure><img src="{{ asset('template-web/assets/img/case_study_thumb_1.jpg') }}" alt=""> </figure>
                        <h4>Producto 1</h4>

                    </a>
                </div>

                <div>
                    <a href="detalle_producto.html" title="Farmacia Osvaldini">
                        <figure><img src="{{ asset('template-web/assets/img/case_study_thumb_2.jpg') }}" alt=""> </figure>
                        <h4>Producto 2</h4>
                    </a>
                </div>

                <div>
                    <a href="detalle_producto.html" title="Farmacia Osvaldini">
                        <figure><img src="{{ asset('template-web/assets/img/case_study_thumb_3.jpg') }}" alt=""> </figure>
                        <h4>Producto 3</h4>
                    </a>
                </div>

                <div>
                    <a href="detalle_producto.html" title="Farmacia Osvaldini">
                        <figure><img src="{{ asset('template-web/assets/img/case_study_thumb_4.jpg') }}" alt=""> </figure>
                        <h4>Producto 4</h4>
                    </a>
                </div>

                <div>
                    <a href="detalle_producto.html" title="Farmacia Osvaldini">
                        <figure><img src="{{ asset('template-web/assets/img/case_study_thumb_5.jpg') }}" alt=""> </figure>
                        <h4>Producto 5</h4>
                    </a>
                </div>

            </div><!--/case_studies -->
        </div><!--/container-->


    </main><!--/main-->


@endsection