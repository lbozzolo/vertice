@extends('web.layout')


@section('content')

    <section class="parallax_window_in short" data-parallax="scroll" data-image-src="{{ asset('template-web/assets/img/subheader_in_5.jpg') }}" data-natural-width="1400" data-natural-height="400">
        <div id="sub_content_in">
            <div class="container">
                <h1>Contactanos</h1>
                <p></p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">

        </div>
    </div><!-- End position -->

    <main>
        <div class="container margin_60_35">
            <div class="row">

                <div class="col-md-9">
                    <h3>Contactanos</h3>
                    <p>
                        Recordá que en Farmacia Osvaldini estamos siempre prestos a atenderte con amabilidad y respeto.<br>
                        Si necesitás servicio de inyectología, perfumería, medicamentos y más,
                        no dudes en hacer uso de todos los canales <br>de comunicación que tenemos dispuestos para que puedas llamarnos o escribirnos.
                    </p>
                    <div>
                        <div id="message-contact"></div>
                        {!! Form::open(['method' => 'post', 'url' => route('web.post.contacto'), 'class' => 'form', ]) !!}
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control styled" id="name_contact" name="name_contact" placeholder="Juan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Apellido:</label>
                                        <input type="text" class="form-control styled" id="lastname_contact" name="lastname_contact" placeholder="Perez">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" id="email_contact" name="email_contact" class="form-control styled" placeholder="jperezn@email.com">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Teléfono:</label>
                                        <input type="text" id="phone_contact" name="phone_contact" class="form-control styled" placeholder="(02254) 44 4444">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mensaje:</label>
                                        <textarea rows="5" id="message_contact" name="message_contact" class="form-control styled" style="height:100px;" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    {{--<div class="form-group">--}}
                                        {{--<label>¿Es usted Humano? 3 + 1 =</label>--}}
                                        {{--<input name="verify_contact" type="text" id="verify_contact" class=" form-control styled" placeholder="Indique aquí el resultado de la suma 3 + 1 =">--}}
                                    {{--</div>--}}
                                    <p><input type="submit" value="Enviar" class="btn_1" id="submit-contact"></p>
                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
                <!-- End col lg 9 -->
                <aside class="col-md-3">
                    <div class="box_style_2">
                        <h4>Información de Contacto</h4>
                        <p>
                            Av. Shaw 658
                            Entre del Pejerrey y de la Trucha
                            Pinamar
                            <br> (02254) 48 2867
                            <br>
                            <a href="mailto:info@farmaciaosvaldini.com">info@farmaciaosvaldini.com</a>
                        </p>

                        <hr class="styled">
                        <h4>Otros Datos</h4>
                        <ul class="contacts_info">
                            <li>Horario de atención
                                <br>
                                <a href="#">Durante Enero y Febrero abierto todos los días.</a>
                                <br>
                                <br>

                            </li>
                            <li>Formas de Pago
                                <br>
                                <a href="#">Efectivo, Tarjetas de Crédito y Débito.</a>
                                <br>
                                <br>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!--End aside -->

            </div>
            <!-- End row -->
        </div>
        <!-- End container -->

@endsection