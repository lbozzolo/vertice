<!DOCTYPE html>

    @include('web.partials.head')

<body class="header-fixed page no-sidebar header-style-1 topbar-style-1 menu-has-search">


    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->

    <div class="layer"></div>
    <!-- /Overlay mask -->

        @include('web.partials.header')

        <div style="margin-top: 100px">@include('flash::web-messages')</div>

        @yield('content')

        @include('web.partials.footer')

        @include('web.partials.scripts')

</body>
</html>

