@extends('web.layout')

@section('content')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-09.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Acceso al Sistema Médico
            </h2>

        </div>
    </section>

    <!-- Content -->
    <section class="bg-0 p-t-95 p-b-40">
        <div class="container">
            <div class="row justify-content-left">

                <div class="size-w-7 m-l-auto m-r-0">
                    <h3 class="t1-m-5 text-uppercase cl-3 p-rl-15 m-b-25">
                        Ingresa en el Sistema
                    </h3>

                    <div class="bg-12 p-t-23 p-b-40 p-rl-22">
                        <div class="flex-wr-s-e m-b-27">
								<span class="size-w-8 t1-s-2 text-uppercase cl-3">
									Matricula:
								</span>

                            <span class="size-w-9 t1-m-2 cl-6">
									<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Su Matricula">
								</span>
                        </div>

                        <div class="flex-wr-s-s m-b-36">
								<span class="size-w-8 t1-s-2 text-uppercase cl-3">
									Contraseña:
								</span>

                            <span class="size-w-9 t1-m-2 cl-6">
									<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="password" name="email" placeholder="Su Password">
								</span>
                        </div>


                        <button class="d-inline-flex flex-c-c size-a-29 bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-10">
                            Ingresar
                        </button>
                    </div>
                </div>





                <div class="col-sm-10 col-md-6 p-b-60">
                    <div class="p-l-30 p-l-0-sr767">
                        <h3 class="t1-m-5 cl-3 m-b-38">
                            Sistema de Liquidaciones
                        </h3>

                        <p class="t1-s-2 cl-6 m-b-9">
                            Como Médico usted podrá ingresar a comprobar sus liquidaciones correspondientes, solo deberá ingresar su Matricula y su Contraseña y automáticamente ingresara al Sistema de Liquidaciones.
                        </p>


                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection