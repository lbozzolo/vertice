@extends('web.layout')


@section('content')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url({{ asset('template-web/images/bg-05.jpg') }});">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Contactanos
            </h2>

        </div>
    </section>

    <!-- Contact -->
    <section class="bg-0 p-t-95 p-b-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6 p-b-60">
                    <h3 class="t1-m-5 cl-3 m-b-44">
                        Envianos un Mensaje
                    </h3>

                    <form id="contact-form" class="validate-form" method="post" action="{{ route('web.post.contacto') }}" name="contact">
                        {!! csrf_field() !!}
                        <div class="m-b-15 validate-input" data-validate = "Nombre es Requerido">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Nombre">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Debes ingresar un mail Valido: ex@abc.xyz">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Email">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Teléfono es Requerido">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Teléfono">
                        </div>

                        <div class="m-b-30 validate-input" data-validate = "Mensaje es Requerido">
                            <textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="Mensaje"></textarea>
                        </div>

                        <button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
                            Envianos un Email
                        </button>
                    </form>
                </div>

                <div class="col-sm-10 col-md-6 p-b-60">
                    <div class="p-l-30 p-l-0-sr767">
                        <h3 class="t1-m-5 cl-3 m-b-38">
                            Información de Contacto
                        </h3>

                        <p class="t1-s-2 cl-6 m-b-9">
                            Ingresa tus datos y ponte en contacto con la Agremiación, pronto nos pondremos en contacto para poder brindarte una mejor atención.
                        </p>

                        <ul class="p-t-11">
                            <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									Av. 51 Numero 1725 e/29 y 30 - La Plata
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									contacto@amghi.com.ar
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									0221-457-5000
								</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <div id="mapid" style="width: 100%; height: 50%;"></div>


@endsection


@section('js')

    <script>

        var mymap = L.map('mapid').setView([-34.9361623, -57.9723648], 15);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mymap);

        L.marker([-34.9361623, -57.9723648]).addTo(mymap)
            .bindPopup("<b>AMGHI</b><br />Av. 51 Numero 1725 e/29 y 30").openPopup();

        L.circle([51.508, -0.11], 500, {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5
        }).addTo(mymap).bindPopup("I am a circle.");

        L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(mymap).bindPopup("I am a polygon.");


        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(mymap);
        }

        mymap.on('click', onMapClick);

    </script>

@endsection