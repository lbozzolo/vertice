@extends('web.layout')


@section('content')


<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- CONTACT -->
                    <div class="row-contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">CONTACTANOS</h2>
                                        <div class="sep has-width w80 accent-bg clearfix"></div>
                                        <p class="sub-heading">Para mayor informacion podra ponerse en contacto completando el siguiente formulario, nosotros nos encargaremos de comunicarnos con usted para poder brindarle toda la informacion detallada que necesita.</p>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-contact-form style-2 clearfix">
                                        {!! Form::open(['url' => route('web.post.contacto'), 'method' => 'post', 'class' => 'contact-form wpcf7-form']) !!}


                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Nombre*" required>
                                                    </span>
                                            <span class="wpcf7-form-control-wrap your-phone">
                                                        <input type="text" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Telefono">
                                                    </span>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                        <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Email*" required>
                                                    </span>
                                            <span class="wpcf7-form-control-wrap your-subject">
                                                        <input type="text" tabindex="4" id="subject" name="subject" value="" class="wpcf7-form-control" placeholder="Tema">
                                                    </span>
                                            <span class="wpcf7-form-control-wrap your-message">
                                                       <textarea name="textarea" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Mensaje*" required ></textarea>
                                                    </span>
                                            <span class="wrap-submit">
                                                        <input type="submit" value="ENVIAR" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                                    </span>

                                        {!! Form::close() !!}
                                    </div><!-- /.themesflat-contact-form -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">INFOMACION</h2>
                                        <div class="sep has-width w80 accent-bg clearfix"></div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-tabs style-1 w168 clearfix">
                                        <ul class="tab-title clearfix">
                                            <li class="item-title active">
                                                <span class="inner">Nuestras Oficinas</span>
                                            </li>
                                        </ul>

                                        <div class="tab-content-wrap clearfix">
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-map-marker"></span>
                                                                <span class="text">Cucha Cucha 1736 - Caballito - Ciudad Autonoma de Buenos Aires </span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-phone"></span>
                                                                <span class="text">TELEFONO : +11 - 4585-7774/5</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-envelope"></span>
                                                                <span class="text">EMAIL : info@rizomagroup.com.ar</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.tab-content -->


                                        </div>
                                    </div><!-- /.themesflat-tabs -->
                                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="35" data-smobile="35"></div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0305107470695!2d-58.45769688433931!3d-34.60338998045957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca069958a23d%3A0x22a5b3ad487d5edd!2sCucha+Cucha+1736%2C+C1416CJN+CABA!5e0!3m2!1ses-419!2sar!4v1537211832206" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END CONTACT -->
                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

@endsection