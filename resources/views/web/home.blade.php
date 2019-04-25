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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro top content -->

    <!-- Welcome content -->
    <section class="welcome-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 welcome-text animated">
                    <h3>Bienvenidos a nuestra agencia</h3>
                    <div class="line1"></div>
                    <p>Vestibulum pulvinar adipiscing turpis vitae ultrices. Suspendisse eu lectus dui, vitae lobortis lorem. Fusce gravida nibh et ante accusan molestie. Duis convallis semper felis. Curabitur fringilla placerat vestibulum. Aenean dignissim libero et quam tristique vel vehicula nunc suscipit. Fusce id dui sem. Cras gravida odio et magna faucbus iaculis. Vestibulum ante ipsum primis in faucibus orci. Luctus et ultrices posuere..</p>
                    <a class="btn1" href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome content -->

    <!-- Facts content -->
    <section class="facts-content" id="facts" data-slide="2" data-stellar-background-ratio="0.5">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <h3>Algunos números</h3>
                <div class="col-md-6 fact-info animated">
                    <h4><em id="lines">0</em> <span>Proyectos</span></h4>
                    <div class="line2"></div>
                    <p>Cras gravida odio et magna faucbus iaculis aenean dignissim libero et quam tristique.</p>
                </div>
                <div class="col-md-6 fact-info animated">
                    <h4><em id="lines1">0</em> <span>Clientes</span></h4>
                    <div class="line2"></div>
                    <p>Cras gravida odio et magna faucbus iaculis aenean dignissim libero et quam tristique.</p>
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

    <!-- Team content -->
    <section class="team-content" id="team">
        <div class="container">
            <div class="row">
                <div class="fade-text animated">
                    <h3>Quiénes somos</h3>
                    <div class="line1"></div>
                    <p>Somos un equipo de profesionales preparados para encontrarte la vuelta a tus ideas, negocios o proyectos a los que quieras dar un impulso y crecimiento.</p>
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
                            <img src="{{ asset('images/pela.jpg') }}" class="img-responsive" alt=""/>
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
                            <img src="{{ asset('images/lucas.jpg') }}" class="img-responsive" alt=""/>
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

    <!-- Services content -->
    <section class="services-content" id="services" data-slide="3" data-stellar-background-ratio="0.5">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <div class="fade-text animated">
                    <h3>Nuestros servicios</h3>
                    <div class="line3"></div>
                    <p>Aenean dignissim libero et quam tristique vel vehicula nunc suscipit. Fusce id dui sem. Cras gravida odio et magna faucbus iaculis. Vestibulum ante ipsum primis in faucibus orci. Luctus et ultrices posuere..</p>
                </div>
                <div class="space60"></div>
                <div class="col-md-12 no-padding space30">
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner">
                            <img src="{{ asset('template-web/images/ico1.png') }}" alt=""/>
                            <h4>Mobile Application</h4>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner">
                            <img src="{{ asset('template-web/images/ico2.png') }}" alt=""/>
                            <h4>Photography</h4>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner">
                            <img src="{{ asset('template-web/images/ico3.png') }}" alt=""/>
                            <h4>Email Marketing</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 no-padding">
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner">
                            <img src="{{ asset('template-web/images/ico4.png') }}" alt=""/>
                            <h4>Networking</h4>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner">
                            <img src="{{ asset('template-web/images/ico5.png') }}" alt=""/>
                            <h4>Web Designing</h4>
                        </div>
                    </div>
                    <div class="col-md-4 service-content animated">
                        <div class="service-content-inner">
                            <img src="{{ asset('template-web/images/ico6.png') }}" alt=""/>
                            <h4>Branding</h4>
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
                <li><span class="filter active" data-filter="@foreach($categories as $category) {!! $category->slug !!} @endforeach">Todo</span></li>
                @foreach($categories as $category)
                    <li><span class="filter" data-filter="{!! $category->slug !!}">{!! $category->name !!}</span></li>
                @endforeach
                {{--<li><span class="filter active" data-filter="sort1 sort2 sort3 sort4">Todo</span></li>--}}
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

    <!-- Testimonial content -->
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
    <!-- Testimonial content -->

    <!-- Contact content -->
    <section class="contact-wrap" id="contact">
        <div class="container">
            <div class="row">
                <div class="fade-text animated">
                    <h3>Contactanos</h3>
                    <div class="line1"></div>
                    <p>
                        Envianos un mensaje a través de cualquiera de nuestros medios de comunicación y a la brevedad te estaremos respondiendo para que
                        podamos coordinar un encuentro ( presencial o virtual ) en el que nos puedas contar sobre tus ideas.
                        Estaremos siempre dispuestos a empezar un nuevo proyecto.
                    </p>
                </div>
                <div class="space80"></div>
                <div class="col-md-12 no-padding">
                    <div class="col-md-4 contact-info animated">
                        <h5><i class="fa fa-phone"></i> Teléfonos</h5>
                        <p>
                            +54-911-6358-3276<br>
                            +54-911-5132-1300
                        </p>
                    </div>
                    <div class="col-md-4 contact-info animated">
                        <h5><i class="fa fa-map-marker"></i> Dirección</h5>
                        <p>Belgrano, Buenos Aires.<br>Argentina</p>
                    </div>
                    <div class="col-md-4 contact-info animated">
                        <h5><i class="fa fa-envelope-o"></i> Email</h5>
                        <p>
                            lucas@verticedigital.com.ar<br>
                            fernando@verticedigital.com.ar
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact content -->


@endsection