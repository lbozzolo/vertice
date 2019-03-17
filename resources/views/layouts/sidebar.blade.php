<aside class="main-sidebar" id="sidebar-wrapper">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('template-web/images/icons/logo_amghi.png') }}" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>AMGHI</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif

                <a href="#"><i class="fa fa-circle text-success"></i> En línea</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            @include('layouts.menu')
        </ul>

    </section>

</aside>