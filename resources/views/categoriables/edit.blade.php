@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categoriable
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoriable, ['route' => ['categoriables.update', $categoriable->id], 'method' => 'patch']) !!}

                        @include('categoriables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection