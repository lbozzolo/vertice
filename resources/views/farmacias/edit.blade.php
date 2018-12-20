@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nuestra Farmacia / Editar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                    <div class="col-lg-6">
                        <div class="row">
                            {!! Form::model($farmacia, ['route' => ['farmacias.update', $farmacia->id], 'method' => 'patch']) !!}

                            @include('farmacias.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                    {{--<div class="col-lg-6">--}}

                        {{--@include('farmacias.images')--}}

                    {{--</div>--}}
               </div>
           </div>
       </div>
   </div>
@endsection