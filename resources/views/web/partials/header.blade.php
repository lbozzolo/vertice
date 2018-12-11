<!-- Header -->
<header id="site-header">
    <div id="site-header-inner" class="container">
        <div class="wrap-inner clearfix">
            <div id="site-logo" class="clearfix">
                <div id="site-log-inner">
                    <a href="{{ route('home') }}" rel="home" class="main-logo">
                        <img src="{{ asset('imagenes/logos/logo-small.png') }}" alt="" width="300" height="63" data-retina="{{ asset('imagenes/logos/logo-small@2x.png') }}" data-width="300" data-height="63">
                    </a>
                </div>
            </div><!-- /#site-logo -->

            <div class="mobile-button">
                <span></span>
            </div><!-- /.mobile-button -->

            <nav id="main-nav" class="main-nav">
                <ul id="menu-primary-menu" class="menu">
                    <li class="{{ (Request::is('/') ? 'menu-item menu-item-has-children current-menu-item' : 'menu-item menu-item-has-children') }}">
                        <a href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="{{ (Request::is('web/farmacia') ? 'menu-item menu-item-has-children current-menu-item' : 'menu-item menu-item-has-children') }}">
                        <a href="{{ route('web.farmacia') }}">LA EMPRESA </a>
                    </li>
                    <li class="{{ (Request::is('web/servicios') ? 'menu-item menu-item-has-children current-menu-item' : 'menu-item menu-item-has-children') }}">
                        <a href="{{ route('web.servicios') }}">SERVICIOS</a>
                    </li>
                    <li class="{{ (Request::is('web/equipamiento') ? 'menu-item menu-item-has-children current-menu-item' : 'menu-item menu-item-has-children') }}">
                        <a href="{{ route('web.insumos') }}">PRODUCTOS</a>
                    </li>
                    <li class="{{ (Request::is('web/contacto') ? 'menu-item menu-item-has-children current-menu-item' : 'menu-item menu-item-has-children') }}">
                        <a href="{{ route('web.contacto') }}">CONTACTANOS</a>
                    </li>
                </ul>
            </nav><!-- /#main-nav -->

        </div><!-- /.wrap-inner -->
    </div><!-- /#site-header-inner -->
</header><!-- /#site-header -->