@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Suscripciones al Newsletter</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

                <ul>
                    @forelse($emails as $email)

                        <li>{!! $email->email !!}</li>

                    @empty

                        <span>Todavía nadie se ha suscripto al newsletter</span>

                    @endforelse
                </ul>

            </div>
        </div>

    </div>
@endsection

