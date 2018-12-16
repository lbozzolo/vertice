@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Producto / Editar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="row">
                           {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'patch']) !!}

                                @include('productos.fields')

                           {!! Form::close() !!}
                       </div>
                   </div>
                   <div class="col-lg-6">

                       @include('productos.images')

                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection

@section('scripts')

    <script>

        $('.select2').select2({
            multiple: true
        });

    </script>

@endsection