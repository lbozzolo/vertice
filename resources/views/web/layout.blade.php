<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web.partials.head')
    </head>
    <body class="animsition">

        <header>@include('web.partials.header')</header>

        <div class="card-body">@include('flash::web-messages')</div>


            @yield('content')


        <footer>@include('web.partials.footer')</footer>

        @include('web.partials.scripts')

    </body>
</html>
