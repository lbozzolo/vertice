@extends('web.layout')

@section('css')

    <style type="text/css">

        .intro {
            background: url({{ asset('template-web/images/tech.jpg') }}) no-repeat center;
            background-size: cover;
        }

        .intro-page {
            background: url({{ asset('template-web/demo/bg/1.jpg') }}) no-repeat center;
        }

        .facts-content {
            background:#313131 url({{ asset('template-web/demo/bg/4.jpg') }}) no-repeat center;
        }

        .services-content {
            background:#313131 url({{ asset('template-web/demo/bg/4.jpg') }}) no-repeat center;
        }

        .testimonial-wrap {
            background:#313131 url({{ asset('template-web/demo/bg/6.jpg') }}) no-repeat center;
        }

        .cover {
            background: url({{ asset('template-web/images/overlay.png') }});
        }

    </style>

@endsection

@section('content')

    @include('web.partials.header')

    @if($slider)
        @include('web.partials.sliders')
    @endif


    <!-- Intro top content -->
    <section class="intro" id="home" data-slide="1" data-stellar-background-ratio="0.5">
        <div class="cover"></div>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 animated text-slide">
                        <div id="intro-slider" class="flexslider" style="height: 250px">
                            <ul class="slides">
                                <li>
                                    <h3 class="brand-heading">Diseñamos tu página web</h3>
                                    <div class="line"></div>
                                    <p class="intro-text">Nos adaptamos a tus necesidades</p>
                                </li>
                                <li>
                                    <h3 class="brand-heading">Encontramos la solución a tu proyecto</h3>
                                    <div class="line"></div>
                                    <p class="intro-text">Adaptabilidad y enfoque en los reales objetivos</p>
                                </li>
                                <li>
                                    <h3 class="brand-heading">Compromiso y dedicación</h3>
                                    <div class="line"></div>
                                    <p class="intro-text">Comprometidos y dedicados al cliente desde el primer instante</p>
                                </li>
                            </ul>
                        </div>
                        {{--<a href="{{ route('contacto') }}" target="_blank" class="btn btn-primary">Cotactanos ahora</a>--}}
                        {{--<a href="#contact" class="btn btn-primary" style="z-index: -1">Cotactanos ahora</a>--}}
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Welcome content -->

    {{--<!-- Welcome content -->--}}
    {{--<section class="welcome-content">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 welcome-text animated">--}}
                    {{--<h3>Bienvenidos a nuestra agencia</h3>--}}
                    {{--<div class="line1"></div>--}}
                    {{--<p>--}}
                        {{--Vestibulum pulvinar adipiscing turpis vitae ultrices.--}}
                        {{--Suspendisse eu lectus dui, vitae lobortis lorem. Fusce gravida nibh et ante accusan molestie. Duis convallis semper felis.--}}
                        {{--Curabitur fringilla placerat vestibulum. Aenean dignissim libero et quam tristique vel vehicula nunc suscipit.--}}
                        {{--Fusce id dui sem. Cras gravida odio et magna faucbus iaculis. Vestibulum ante ipsum primis in faucibus orci.--}}
                        {{--Luctus et ultrices posuere.--}}
                    {{--</p>--}}
                    {{--<a class="btn1" href="#">Read More</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- Welcome content -->--}}

    <!-- Team content -->
    <section class="team-content" id="team">
        <div class="container">
            <div class="row">
                <div class="fade-text animated">
                    <h3>Quiénes somos</h3>
                    <div class="line1"></div>
                    <p>
                        Somos un equipo de profesionales preparados para encontrarle la vuelta a tus ideas, negocios o proyectos
                        dándoles impulso y crecimiento.<br>
                        Nos destaca el compromiso constante con la satisfacción de nuestros clientes. A cada inquietud que surge, ofrecemos siempre
                        una solución.
                    </p>
                </div>
                <div class="space90"></div>
                <div class="col-md-12 no-padding">
                    <div class="col-md-3 staff-content animated"></div>
                    <div class="col-md-3 staff-content animated">
                        <div class="staff-img">
                            <span class="overlay">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </span>
                            {{--<img src="{{ asset('images/pela.jpg') }}" class="img-responsive" alt=""/>--}}
                        </div>
                        <h4>Fernando Alfonso <span>Analista</span></h4>
                    </div>
                    <div class="col-md-3 staff-content animated">
                        <div class="staff-img">
                            <span class="overlay">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </span>
                            {{--<img src="{{ asset('images/lucas.jpg') }}" class="img-responsive" alt=""/>--}}
                        </div>
                        <h4>Lucas Bozzolo <span>Programador</span></h4>
                    </div>
                    {{--<div class="col-md-3 staff-content animated">--}}
                    {{--<div class="staff-img">--}}
                    {{--<span class="overlay">--}}
                    {{--<ul class="team-social">--}}
                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                    {{--</ul>--}}
                    {{--</span>--}}
                    {{--<img src="{{ asset('template-web/demo/team/3.jpg') }}" class="img-responsive" alt=""/>--}}
                    {{--</div>--}}
                    {{--<h4>John Dee <span>Web Designer</span></h4>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 staff-content animated">--}}
                    {{--<div class="staff-img">--}}
                    {{--<span class="overlay">--}}
                    {{--<ul class="team-social">--}}
                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                    {{--</ul>--}}
                    {{--</span>--}}
                    {{--<img src="{{ asset('template-web/demo/team/4.jpg') }}" class="img-responsive" alt=""/>--}}
                    {{--</div>--}}
                    {{--<h4>Mary Roberts <span>Web Developer</span></h4>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Team content -->

    <!-- Facts content -->
    <section class="facts-content" id="facts" data-slide="2" data-stellar-background-ratio="0.5">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <h3>Algunos números</h3>
                <div class="col-md-6 fact-info animated">
                    <h4><em id="lines">0</em> <span>Proyectos</span></h4>
                    <div class="line2"></div>
                    <p>Exitosos proyectos que tuvimos el placer de construir junto a nuestros clientes.</p>
                </div>
                <div class="col-md-6 fact-info animated">
                    <h4><em id="lines1">0</em> <span>Clientes</span></h4>
                    <div class="line2"></div>
                    <p>Satisfechos clientes que siempre vuelven a recurrir a nosotros y nos recomiendan constantemente.</p>
                </div>
                {{--<div class="col-md-3 fact-info animated">--}}
                    {{--<h4><em id="lines2">0</em> <span>Pizza's Ordered</span></h4>--}}
                    {{--<div class="line2"></div>--}}
                    {{--<p>Cras gravida odio et magna faucbus iaculis aenean dignissim libero et quam tristique.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 fact-info animated">--}}
                    {{--<h4><em id="lines3">0</em> <span>Awwards</span></h4>--}}
                    {{--<div class="line2"></div>--}}
                    {{--<p>Cras gravida odio et magna faucbus iaculis aenean dignissim libero et quam tristique.</p>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    <!-- Facts content -->

    <section class="welcome-content">
        <div class="container">
            <div class="row">
                <div class=" welcome-text animated">
                    <h3>Con quiénes trabajamos</h3>
                    <div class="line1"></div>
                    <div class="text-center">
                        <a href="https://www.cuartocreativo.com.ar/" target="_blank">
                            <img src="{{ asset('images/cuarto_creativo.png') }}" width="300" style="margin: 30px">
                        </a>
                        <a href="http://www.rizomagroup.com.ar/" target="_blank">
                            <img src="{{ asset('images/rizoma.png') }}" width="300" style="margin: 30px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Services content -->
    <section class="services-content" id="services" data-slide="3" data-stellar-background-ratio="0.5">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <div class="fade-text animated">
                    <h3>Nuestros servicios</h3>
                    <div class="line3"></div>
                    <p>
                        Te ofrecemos numerosos productos y servicios que se adaptan justamente a lo que requiere tu empresa.
                        Si necesitás un servicio diferente consultanos que siempre podremos resolverlo.
                    </p>
                </div>
                <div class="space60"></div>
                <div class="col-md-12 no-padding space30">
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-cellphone-android" style="font-size: 5em"></i>
                            <h4>Aplicaciones Mobile</h4>
                            <p>En Vertice somos especialistas en el desarrollo de aplicaciones para iOS y Android.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-tune-vertical" style="font-size: 5em"></i>
                            <h4>Sitios autoadministrables</h4>
                            <p>Desarrollo de productos personalizados con tecnología web que se adaptan a tus necesidades</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-email-outline" style="font-size: 5em"></i>
                            <h4>Envío de Newsletter</h4>
                            <p>Utilice la poderosa herramienta de comunicación y marketing que le brinda nuestro servicio de envíos de Newsletters para sus clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 no-padding">
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-wordpress" style="font-size: 5em"></i>
                            <h4>Moodle / Wordpress</h4>
                            <p>Desarrollamos y brindamos soporte sobre plataformas de elearning y Wordpress para nuestros clientes.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-laptop-mac" style="font-size: 5em"></i>
                            <h4>Diseño Web</h4>
                            <p>Ofrecemos una solución integral a tu empresa, complementamos tus desarrollos con sitios webs dinámicos desarrollados con las últimas tecnologías.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-wrench" style="font-size: 5em"></i>
                            <h4>Soporte</h4>
                            <p>Brindamos la mejor atención personalizada para nuestros clientes proporcionándoles un servicio de calidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 no-padding">
                    {{--nuevos--}}
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-radio-tower" style="font-size: 5em"></i>
                            <h4>Streaming</h4>
                            <p>Sus oyentes podrán escuchar o visualizar lo que transmita a través de internet en tiempo real a traves de nuestro servicio de Streaming para radios.</p>
                        </div>
                    </div>

                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-widgets" style="font-size: 5em"></i>
                            <h4>Desarrollos a medida</h4>
                            <p>Nos ajustamos a las necesidades de tus ideas: buscamos la manera más simple y eficiente de concretar tu proyecto.</p>
                        </div>
                    </div>

                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-account-location" style="font-size: 5em"></i>
                            <h4>Consultoría</h4>
                            <p>Ponemos a disposición nuestra experiencia en más de 100 soluciones exitosas para asesorar a tu equipo de trabajo en proyectos tecnológicos.</p>
                        </div>
                    </div>
                    {{--fin nuevos--}}
                </div>
                <div class="col-md-12 no-padding">
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-database" style="font-size: 5em"></i>
                            <h4>Hosting</h4>
                            <p>Brindamos todas las alternativas de almacenamiento de su web acorde a lo necesario.</p>

                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-cart-outline" style="font-size: 5em"></i>
                            <h4>Tienda online</h4>
                            <p>Desarrollos seguros y confiables para implementar su tienda online en el competitivo mundo digital.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner text-center">
                            <i class="mdi mdi-currency-usd" style="font-size: 5em"></i>
                            <h4>Marketing digital</h4>
                            <p>Nos especializamos en brindar soluciones integrales de marketing y publicidad online para empresas de todos los rubros.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services content -->

    <!-- Portfolio content -->
    <section class="portfolio-wrap" id="portfolio">
        <div class="fade-text animated">
            <h3>Nuestro portfolio</h3>
        </div>
        <div class="line1"></div>
        <div class="col-md-12 no-padding portfolio-main">
            <ul id="filters" class="clearfix">
                {{--<li><span class="filter active" data-filter="@foreach($categories as $category) {!! $category->slug !!} @endforeach">Todo</span></li>--}}
                {{--@foreach($categories as $category)--}}
                    {{--<li><span class="filter" data-filter="{!! $category->slug !!}">{!! $category->name !!}</span></li>--}}
                {{--@endforeach--}}
                {{--<li><span class="filter active" data-filter="sort1 sort2 sort3 sort4">all</span></li>--}}
                {{--<li><span class="filter" data-filter="sort1">Web</span></li>--}}
                {{--<li><span class="filter" data-filter="sort2">Projecto</span></li>--}}
                {{--<li><span class="filter" data-filter="sort3">Sistema</span></li>--}}
                {{--<li><span class="filter" data-filter="sort4">Branding</span></li>--}}
            </ul>
            <div id="portfoliolist">

                @forelse($projects as $project)

                    <div class="portfolio animated {!! $project->categories->first()->slug !!}" data-cat="{!! $project->categories->first()->slug !!}">
                        <div class="portfolio-wrapper">
                            @if($project->mainImage())
                            <img src="{{ asset('imagenes/thumb-'.$project->mainImage()->path) }}" alt="" />
                            @endif
                            <div class="overlay1">
                                <a href="{!! $project->url !!}" target="_blank">
                                    <div class="overlay-text">Visitar web</div>
                                </a>
                            </div>
                        </div>
                    </div>

                @empty

                    <p>Todavía no hay ningún proyecto cargado</p>

                @endforelse

            </div>
        </div>
        {{--<a class="btn1" href="#">Load More</a>--}}
    </section>
    <!-- Portfolio content -->

    {{--<!-- Testimonial content -->--}}
    {{--<section class="testimonial-wrap" id="testimonials" data-slide="4" data-stellar-background-ratio="0.5">--}}
        {{--<div class="cover"></div>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="fade-text animated">--}}
                    {{--<h3>Our clients</h3>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 quote-slide animated">--}}
                    {{--<div id="quote-slider" class="flexslider">--}}
                        {{--<ul class="slides">--}}
                            {{--<li data-thumb="{{ asset('template-web/demo/quote/1.png') }}">--}}
                                {{--<img src="{{ asset('template-web/demo/quote/client1.png') }}" class="client-img" alt=""/>--}}
                                {{--<div class="sign">Dave Lucker <span>Ceo</span></div>--}}
                                {{--<p>Aenean dignissim libero et quam tristique vel vehicula nunc suscipit. Fusce id dui sem. Cras gravida odio et magna faucbus iaculis. Vestibulum ante ipsum primis in faucibus orci. Luctus et ultrices posuere..</p>--}}
                            {{--</li>--}}
                            {{--<li data-thumb="{{ asset('template-web/demo/quote/2.png') }}">--}}
                                {{--<img src="{{ asset('template-web/demo/quote/client2.png') }}" class="client-img" alt=""/>--}}
                                {{--<div class="sign">John Doe <span>Manager</span></div>--}}
                                {{--<p>Aenean dignissim libero et quam tristique vel vehicula nunc suscipit. Fusce id dui sem. Cras gravida odio et magna faucbus iaculis. Vestibulum ante ipsum primis in faucibus orci. Luctus et ultrices posuere..</p>--}}
                            {{--</li>--}}
                            {{--<li data-thumb="{{ asset('template-web/demo/quote/3.png') }}">--}}
                                {{--<img src="{{ asset('template-web/demo/quote/client3.png') }}" class="client-img" alt=""/>--}}
                                {{--<div class="sign">Maria vel <span>Designer</span></div>--}}
                                {{--<p>Aenean dignissim libero et quam tristique vel vehicula nunc suscipit. Fusce id dui sem. Cras gravida odio et magna faucbus iaculis. Vestibulum ante ipsum primis in faucibus orci. Luctus et ultrices posuere..</p>--}}
                            {{--</li>--}}
                            {{--<li data-thumb="{{ asset('template-web/demo/quote/4.png') }}">--}}
                                {{--<img src="{{ asset('template-web/demo/quote/client4.png') }}" class="client-img" alt=""/>--}}
                                {{--<div class="sign">David Joe <span>Founder</span></div>--}}
                                {{--<p>Aenean dignissim libero et quam tristique vel vehicula nunc suscipit. Fusce id dui sem. Cras gravida odio et magna faucbus iaculis. Vestibulum ante ipsum primis in faucibus orci. Luctus et ultrices posuere..</p>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- Testimonial content -->--}}

    <!-- Contact content -->


    <section class="contact-wrap" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h3>Contactanos</h3>
                    <div class="line1"></div>
                </div>

                {{--<div class="col-lg-6 col-md-6">--}}
                    {{--<p style="padding: 20px 30px">--}}
                        {{--Envianos un mensaje a través de cualquiera de nuestros medios de comunicación y a la brevedad te estaremos respondiendo para que--}}
                        {{--podamos coordinar un encuentro ( presencial o virtual ) en el que nos puedas contar sobre tus ideas.--}}
                        {{--Estaremos siempre dispuestos a empezar un nuevo proyecto.--}}
                    {{--</p>--}}
                {{--</div>--}}

                {{--<div class="col-lg-6 col-md-6">--}}

                    {{--<div style="padding: 20px 30px">--}}
{{--                        <form method="post" action="{{ asset('formulario/sendemail.php') }}" id="wrapped">--}}
                        {{--<form method="post" action="{{ route('contacto.post') }}" id="wrapped">--}}
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                            {{--<div id="middle-wizard">--}}
                                {{--<div class="submit step">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" name="name" class="form-control required" placeholder="Nombre">--}}
                                        {{--<i class="icon-user"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" name="last_name" class="form-control required" placeholder="Apellido">--}}
                                        {{--<i class="icon-user"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="email" name="email" class="form-control required" placeholder="Email">--}}
                                        {{--<i class="icon-envelope"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" name="phone" class="form-control" placeholder="Telefono">--}}
                                        {{--<i class="icon-phone"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<textarea class="form-control notes" name="message" placeholder="Comentario"></textarea>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group" style="text-align: left">--}}
                                        {{--{!! Captcha::img() !!}--}}
                                        {{--{!! Form::text('captcha', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los caracteres del captcha']) !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<button type="submit" name="process" class="btn btn-primary pull-right">Enviar</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                {{--</div>--}}

                <div class="col-lg-12">

                    <div class="space80"></div>
                    <div class="col-md-12 no-padding">
                        <div class="col-md-3 contact-info animated">
                            <h5><i class="fa fa-phone"></i> Teléfono</h5>
                            <p>+54-911-6358-3276</p>
                        </div>
                        <div class="col-md-3 contact-info animated">
                            <h5><i class="fa fa-map-marker"></i> Dirección</h5>
                            <p>Belgrano, Buenos Aires.<br>Argentina</p>
                        </div>
                        <div class="col-md-3 contact-info animated">
                            <h5><i class="fa fa-envelope-o"></i> Email</h5>
                            <p>
                                lucas@verticedigital.com.ar<br>
                                fernando@verticedigital.com.ar
                            </p>
                        </div>
                        <div class="col-md-3 contact-info animated">
                            <a href="{!! route('contacto') !!}">
                            <h5><i class="fa fa-arrow-circle-right"></i> Directo</h5>
                            <p>Formulario de contacto</p>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Contact content -->


@endsection