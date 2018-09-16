@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sliders / Editar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-lg-4 col-md-5">
                       <div class="row">
                   {!! Form::model($slider, ['route' => ['sliders.update', $slider->id], 'method' => 'patch']) !!}

                        @include('sliders.fields')

                   {!! Form::close() !!}
                       </div>
                   </div>
                   <div class="col-lg-8 col-md-7">

                       @include('sliders.images')

                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection