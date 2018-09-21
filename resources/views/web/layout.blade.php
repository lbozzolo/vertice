<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

    @include('web.partials.head')

<body class="header-fixed page no-sidebar header-style-1 topbar-style-1 menu-has-search">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">

        <div id="site-header-wrap">

            <div id="top-bar">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <div class="inner">
                                <span class="address content">Cucha Cucha 1736</span>
                                <span class="phone content">+11 - 4585-7774/5 </span>
                                <span class="time content">info@rizomagroup.com.ar</span>
                            </div>
                        </div>

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
                        </div>
                    </div>
                </div>
            </div>

            @include('web.partials.header')

        </div>

        @include('flash::web-messages')


        @yield('content')


        @include('web.partials.footer')

        @include('web.partials.footer-navbar')

    </div>

    <a id="scroll-top"></a>

    @include('web.partials.scripts')

</body>
</html>

