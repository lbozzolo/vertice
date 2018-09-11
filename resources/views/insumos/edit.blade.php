@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Insumo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="row">
                           {!! Form::model($insumo, ['route' => ['insumos.update', $insumo->id], 'method' => 'patch']) !!}

                                @include('insumos.fields')

                           {!! Form::close() !!}
                       </div>
                   </div>
                   <div class="col-lg-6">

                       @include('insumos.images')

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