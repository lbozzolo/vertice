@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Evento / Editar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="row">
                           {!! Form::model($evento, ['route' => ['eventos.update', $evento->id], 'method' => 'patch']) !!}

                                @include('eventos.fields')

                           {!! Form::close() !!}
                       </div>
                   </div>
                   <div class="col-lg-6">

                       @include('eventos.images')

                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection