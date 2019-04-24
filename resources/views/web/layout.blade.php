<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        @include('web.partials.head')
    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <div class="body">

            @include('web.partials.header')

        </div>

            @yield('content')


        <footer>

            @include('web.partials.footer')

        </footer>

        @include('web.partials.scripts')

    </body>
</html>
