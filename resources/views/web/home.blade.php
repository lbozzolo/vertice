@extends('web.layout')

@section('content')

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Top Bar -->
                <div id="top-bar">
                    <div id="top-bar-inner" class="container">
                        <div class="top-bar-inner-wrap">
                            <div class="top-bar-content">
                                <div class="inner">
                                    <span class="address content">Cucha Cucha 1736</span>
                                    <span class="phone content">+11 - 4585-7774/5 </span>
                                    <span class="time content">info@rizomagroup.com.ar</span>
                                </div>
                            </div><!-- /.top-bar-content -->

                            <div class="top-bar-socials">
                                <div class="inner">
                                    <span class="text">Seguinos:</span>
                                    <span class="icons">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                        <a href="{{ route('admin') }}" title="Panel de control"><i class="fa fa-dashboard"></i> </a>
                                    </span>
                                </div>
                            </div><!-- /.top-bar-socials -->
                        </div>
                    </div>
                </div><!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-log-inner">
                                    <a href="home.blade.php" rel="home" class="main-logo">
                                        <img src="{{ asset('template-web/assets/img/logo-small.png') }}" alt="Autora" width="186" height="39" data-retina="{{ asset('template-web/assets/img/logo-small@2x.png') }}" data-width="186" data-height="39">
                                    </a>
                                </div>
                            </div><!-- /#site-logo -->

                            <div class="mobile-button">
                                <span></span>
                            </div><!-- /.mobile-button -->

                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">
                                    <li class="menu-item menu-item-has-children current-menu-item">
                                        <a href="home.blade.php">HOME</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="home.blade.php">HOME 1</a></li>
                                            <li class="menu-item"><a href="">HOME 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="">LA EMPRESA </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="">ABOUT US</a></li>
                                            <li class="menu-item"><a href="">ABOUT DETAIL</a></li>
                                            <li class="menu-item"><a href="">ABOUT TEAM</a></li>
                                            <li class="menu-item"><a href="">ABOUT CAREERS</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="">SERVICIOS</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="">SERVICES</a></li>
                                            <li class="menu-item"><a href="">SERVICES DETAIL</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="">PROJECTOS</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="">PROJECTS</a></li>
                                            <li class="menu-item"><a href="">PROJECTS FULL WIDTH</a></li>
                                            <li class="menu-item"><a href="">PROJECTS DETAIL</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" >
                                        <a href="">EVENTOS</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="">PAGE TESTIMONIAL</a></li>
                                            <li class="menu-item"><a href="">PAGE PRICING</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="">EQUIPAMIENTOS</a>
                                        <ul class="sub-menu right-sub-menu">
                                            <li class="menu-item"><a href="">BLOG</a></li>
                                            <li class="menu-item"><a href="">BLOG SINGLE</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="">CONTACTANOS</a>
                                        <ul class="sub-menu right-sub-menu">
                                            <li class="menu-item"><a href="">CONTACT 1</a></li>
                                            <li class="menu-item"><a href="">CONTACT 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav><!-- /#main-nav -->

                        </div><!-- /.wrap-inner -->
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- #site-header-wrap -->

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                           <div class="page-content">
                               <!-- SLIDER -->
                                <div class="rev_slider_wrapper fullwidthbanner-container">
                                    <div id="rev-slider1" class="rev_slider fullwidthabanner">
                                        <ul>
                                            <!-- Slide 1 -->
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <img src="{{ asset('template-web/assets/img/slider/slider-bg-1.jpg') }}" alt="" data-bgposition="center center" data-no-retina>

                                                <!-- Layers -->
                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600"
                                                    data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                                                    data-fontsize="['20','20','20','16']"
                                                    data-lineheight="['70','70','40','24']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="700"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">

                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                                    data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-63','-63','-63','-63']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">

                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                                    data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['2','2','2','2']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">

                                                </div>

                                                <div class="tp-caption"
                                                    data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['106','106','106','106']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">

                                                </div>
                                            </li>
                                            <!-- /End Slide 1 -->

                                            <!-- Slide 2 -->
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <img src="{{ asset('template-web/assets/img/slider/slider-bg-2.jpg') }}" alt="" data-bgposition="center center" data-no-retina>

                                                <!-- Layers -->
                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-center"
                                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                                                    data-fontsize="['20','20','20','16']"
                                                    data-lineheight="['70','70','40','24']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="700"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    A GLOBAL LEADER IN INFRASTRUCTURE
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-63','-63','-63','-63']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    WE WILL BE HAPPY
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['2','2','2','2']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    TO TAKE CARE OF YOUR WORK
                                                </div>

                                                <div class="tp-caption text-center"
                                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['106','106','106','106']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                                </div>
                                            </li>
                                            <!-- /End Slide 2 -->

                                             <!-- Slide 3 -->
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <img src="{{ asset('template-web/assets/img/slider/slider-bg-3.jpg') }}" alt="" data-bgposition="center center" data-no-retina>

                                                <!-- Layers -->
                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                                                    data-fontsize="['20','20','20','16']"
                                                    data-lineheight="['70','70','40','24']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="700"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    A GLOBAL LEADER IN INFRASTRUCTURE
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-63','-63','-63','-63']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    WE WILL BE HAPPY
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['2','2','2','2']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    TO TAKE CARE OF YOUR WORK
                                                </div>

                                                <div class="tp-caption text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['106','106','106','106']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                                </div>
                                            </li>
                                            <!-- /End Slide 3 -->

                                             <!-- Slide 4 -->
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <img src="{{ asset('template-web/assets/img/slider/slider-bg-4.jpg') }}" alt="" data-bgposition="center center" data-no-retina>

                                                <!-- Layers -->
                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                                                    data-fontsize="['20','20','20','16']"
                                                    data-lineheight="['70','70','40','24']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="700"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    A GLOBAL LEADER IN INFRASTRUCTURE
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['-63','-63','-63','-63']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    WE WILL BE HAPPY
                                                </div>

                                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['2','2','2','2']"
                                                    data-fontsize="['52','52','42','32']"
                                                    data-lineheight="['65','65','45','35']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    TO TAKE CARE OF YOUR WORK
                                                </div>

                                                <div class="tp-caption text-right"
                                                    data-x="['right','right','right','center']" data-hoffset="['-14','-14','-14','0']"
                                                    data-y="['middle','middle','middle','middle']" data-voffset="['106','106','106','106']"
                                                    data-width="full"
                                                    data-height="none"
                                                    data-whitespace="normal"
                                                    data-transform_idle="o:1;"
                                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                    data-mask_in="x:0px;y:[100%];"
                                                    data-mask_out="x:inherit;y:inherit;"
                                                    data-start="1000"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-responsive_offset="on">
                                                    <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                                </div>
                                            </li>
                                            <!-- /End Slide 4 -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- END SLIDER -->

                                <!-- ICONBOX -->
                                <div class="row-iconbox">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                                <div class="themesflat-headings style-1 text-center clearfix">
                                                    <h2 class="heading">SU MEJOR ELECCION</h2>
                                                    <div class="sep has-icon width-125 clearfix">
                                                        <div class="sep-icon">
                                                            <span class="sep-icon-before sep-center sep-solid"></span>
                                                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                            <span class="sep-icon-after sep-center sep-solid"></span>
                                                        </div>
                                                    </div>
                                                    <p class="sub-heading">Creando espacios de forma creativa y funcional para darles un valor agregado a su imagen.</p>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                    <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="autora-icon-quality"></i>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">MEJOR CALIDAD</a></h5>
                                                            <div class="sep clearfix"></div>
                                                            <p class="sub-heading">Sabemos sobre los elementos requeridos para un stand y como aplicarlos eficientemente. Te brindaremos todas las herramientas necesarias para que estes siempre sobre la copmetencia.</p>
                                                        </div>
                                                    </div><!-- /.themesflat-icon-box -->
                                                </div><!-- /.themesflat-content-box -->
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-4">
                                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                                <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                    <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="autora-icon-time"></i>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">COMUNICACION VISUAL</a></h5>
                                                            <div class="sep clearfix"></div>
                                                            <p class="sub-heading">Fuerte comunicación de marca, circulación estratégica, mobiliario a medida que permita sectorizar y rotar productos, teniendo en cuenta el rubro y con una tendencia siempre actualizada.</p>
                                                        </div>
                                                    </div><!-- /.themesflat-icon-box -->
                                                </div><!-- /.themesflat-content-box -->
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-4">
                                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                                <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                    <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="autora-icon-author"></i>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">EXPERIENCIA</a></h5>
                                                            <div class="sep clearfix"></div>
                                                            <p class="sub-heading">Ofrecemos un servicio profesional junto con diseñadores experienciados de calidad y creativos respetando el rubro, estilo, y espíritu de la misma.</p>
                                                        </div>
                                                    </div><!-- /.themesflat-icon-box -->
                                                </div><!-- /.themesflat-content-box -->
                                            </div><!-- /.col-md-4 -->
                                        </div><!-- /.row -->


                                    </div><!-- /.container -->
                                </div>
                                <!-- END ICONBOX -->

                                <!-- PARTNER -->
                                <div class="row-partner">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="themesflat-spacer clearfix" data-desktop="83" data-mobile="60" data-smobile="60"></div>
                                                <div class="themesflat-carousel-box clearfix" data-gap="5" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-1.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-1-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-2.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-2-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1  align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-3.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-3-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-4.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-4-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-5.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-5-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-1.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-1-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-2.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-2-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1  align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-3.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-3-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-4.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-4-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                        <div class="themesflat-partner style-1 align-center clearfix">
                                                            <div class="partner-item">
                                                                <div class="inner">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-5.png') }}" alt="Image" class="partner-default">
                                                                        <img src="{{ asset('template-web/assets/img/partners/partner-5-color.png') }}" alt="Image" class="partner-color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /themesflat-partner -->
                                                    </div>
                                                </div><!-- /.themesflat-carousel-box -->
                                                <div class="themesflat-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                                <!-- END PARTNER -->
                           </div><!-- /.page-content -->
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->

            <!-- Footer -->
            <footer id="footer" class="clearfix">
                <div id="footer-widgets" class="container">
                    <div class="themesflat-row gutter-30">
                        <div class="col span_1_of_3">
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <p>
                                        <img src="{{ asset('template-web/assets/img/logo-white@2x.png') }}" alt="Image" width="170" height="34">
                                    </p>

                                    <p class="margin-bottom-15">Modulo de Artquitectura Publicitaria</p>

                                    <ul>
                                        <li>
                                            <div class="inner">
                                                <span class="fa fa-map-marker"></span>
                                                <span class="text">Cucha Cucha 1736 <span class="sl">C1416CJN CABA</span></span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="inner">
                                                <span class="fa fa-phone"></span>
                                                <span class="text">TELEFONO : +11 - 4585-7774/5</span>
                                            </div>
                                        </li>

                                        <li class="margin-top-7">
                                            <div class="inner">
                                                <span class=" font-size-14 fa fa-envelope"></span>
                                                <span class="text">info@rizomagroup.com.ar</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.widget_text -->
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                        </div><!-- /.col -->

                        <div class="col span_1_of_3">
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>

                            <div class="widget widget_lastest">

                            </div><!-- /.widget_lastest -->
                        </div><!-- /.col -->

                        <div class="col span_1_of_3">
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>


                        </div><!-- /.col -->

                        <div class="col span_1_of_3">
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                            <div class="widget widget_instagram">
                                <h2 class="widget-title margin-bottom-30"><span>INSTAGRAM FOTOS</span></h2>
                                <div class="instagram-wrap data-effect clearfix col3 g10">
                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="#" target="_blank" class="data-effect-item">
                                            <span class="item"><img src="{{ asset('template-web/assets/img/instagram/instagram-1-83x83.jpg') }}" alt="INSTAGRAM" ></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="#" target="_blank" class="data-effect-item">
                                            <span class="item"><img src="{{ asset('template-web/assets/img/instagram/instagram-2-83x83.jpg') }}" alt="INSTAGRAM" ></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>

                                    </div>

                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="#" target="_blank" class="data-effect-item">
                                            <span class="item"><img src="{{ asset('template-web/assets/img/instagram/instagram-3-83x83.jpg') }}" alt="INSTAGRAM"></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="#" target="_blank" class="data-effect-item">
                                            <span class="item"><img src="{{ asset('template-web/assets/img/instagram/instagram-4-83x83.jpg') }}" alt="INSTAGRAM"></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="#" target="_blank" class="data-effect-item">
                                            <span class="item"><img src="{{ asset('template-web/assets/img/instagram/instagram-5-83x83.jpg') }}" alt="INSTAGRAM"></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="instagram_badge_image has-effect-icon">
                                        <a href="#" target="_blank" class="data-effect-item">
                                            <span class="item"><img src="{{ asset('template-web/assets/img/instagram/instagram-6-83x83.jpg') }}" alt="INSTAGRAM"></span>
                                            <div class="overlay-effect bg-color-2"></div>
                                            <div class="elm-link">
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.widget_instagram -->
                        </div><!-- /.col -->
                    </div><!-- /.themesflat-row -->
                </div><!-- /#footer-widgets -->
            </footer><!-- /#footer -->

            <!-- Bottom -->
            <div id="bottom" class="clearfix has-spacer">
                <div id="bottom-bar-inner" class="container">
                    <div class="bottom-bar-inner-wrap">
                        <div class="bottom-bar-content">
                            <div id="copyright">© <span class="text">Rizoma Group. Design by<a href="http://www.bamdig.com" target="_new" class="text-accent"> Bamdig.com</a></span>
                            </div>
                        </div><!-- /.bottom-bar-content -->

                        <div class="bottom-bar-menu">
                            <ul class="bottom-nav">
                                <li class="menu-item current-menu-item">
                                    <a href="home.blade.php">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a href="">La Empresa</a>
                                </li>
                                <li class="menu-item">
                                    <a href="">Servicios</a>
                                </li>
                                <li class="menu-item">
                                    <a href="">Projectos</a>
                                </li>
                                <li class="menu-item">
                                    <a href="">Eventos</a>
                                </li>
                                <li class="menu-item ">
                                    <a href="">Equipamiento</a>
                                </li>
                                <li class="menu-item">
                                    <a href="">Contacto</a>
                                </li>
                            </ul>
                        </div><!-- /.bottom-bar-menu -->
                    </div><!-- /.bottom-bar-inner-wrap -->
                </div><!-- /#bottom-bar-inner -->
            </div><!-- /#bottom -->

        </div><!-- /#page -->
    </div><!-- /#wrapper -->

    <a id="scroll-top"></a>

@endsection