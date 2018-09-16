@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Empresa / Editar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                    <div class="col-lg-6">
                        <div class="row">
                            {!! Form::model($empresa, ['route' => ['empresas.update', $empresa->id], 'method' => 'patch']) !!}

                            @include('empresas.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-lg-6">

                        @include('empresas.images')

                    </div>
               </div>
           </div>
       </div>
   </div>
@endsection