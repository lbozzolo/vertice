<!-- Header desktop -->
<nav class="container-header-desktop">
    <div class="top-bar">
        <div class="content-topbar container flex-sb-c h-full">
            <div class="size-w-0 flex-wr-s-c">
                <div class="t1-s-1 cl-13 m-r-50">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                    <span>Av. 51 Numero 1725 e/29 y 30 - La Plata</span>
                </div>

                <div class="t1-s-1 cl-13 m-r-50">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                    <span>0221-457-5000</span>
                </div>


            </div>
        </div>
    </div>

    <div class="wrap-menu-desktop">
        <div class="limiter-menu-desktop container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('template-web/images/icons/logo_amghi.png') }}" alt="Logo Amghi"></a>
            </div>

            <!-- Menu desktop -->
            <div class="menu-desktop">
                <ul class="main-menu respon-sub-menu">
                    <li>
                        <a href="{{ route('home') }}">Inicio</a>
                    </li>

                    <li>
                        <a href="{{ route('web.estatuto') }}">Estatuto de AMGHI</a>
                    </li>

                    <li>
                        <a href="{{ route('web.comision') }}">Comisión</a>
                    </li>

                    <li>
                        <a href="{{ route('web.servicios') }}">Servicios</a>
                    </li>

                    {{--<li>--}}
                        {{--<a href="{{ route('web.works') }}">Noticias</a>--}}
                    {{--</li>--}}

                    <li>
                        <a href="{{ route('web.medicos') }}">Médicos</a>
                    </li>

                    <li>
                        <a href="{{ route('web.contacto') }}">Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Header Mobile -->
<nav class="container-header-mobile">
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{ route('home') }}"><img src="{{ asset('images') }}" alt="Logo Amghi"></a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <div class="menu-mobile">
        <ul class="top-bar-m p-l-20 p-tb-8">
            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
                    <span class="fs-16 m-r-6">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    <span>Av. 51 Numero 1725 e/29 y 30 - La Plata</span>
                </div>
            </li>

            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
                    <span class="fs-16 m-r-6">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                    <span>0221-457-5000</span>
                </div>
            </li>
        </ul>
    </div>
</nav>