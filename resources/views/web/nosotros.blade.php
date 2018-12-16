@extends('web.layout')


@section('content')

    <section class="parallax_window_in short" data-parallax="scroll" data-image-src="{{ asset('template-web/assets/img/subheader_in_2.jpg') }}" data-natural-width="1400" data-natural-height="400">
        <div id="sub_content_in">
            <div class="container">
                <h1>Un poco de nuestra Historia</h1>
                <p></p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">

        </div>
    </div><!-- End position -->

    <main>
        <div class="container margin_60">
            <div class="row">

                @if($nosotros)

                    <div class="col-sm-6">
                        <h3 class="main_title_left"><em></em>{!! $nosotros->title !!}</h3>
                        <p>{!! $nosotros->body !!}</p>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                        <img src="img/about_1.jpg" alt="" class="img-responsive">
                    </div>

                @endif


            </div><!--/row-->
        </div><!--/container-->




    </main><!--/main-->

@endsection