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
                        Recuerde que en Farmacia Osvaldini estamos siempre prestos a atenderlo con amabilidad y respeto. Si requiere de servicio de inyectología, perfumería, medicamentos y más, no dude en hacer uso de todos los canales de comunicación que tenemos dispuestos para que usted pueda llamarnos o escribirnos.
                    </p>
                    <div>
                        <div id="message-contact"></div>
                        {!! Form::open(['method' => 'post', 'url' => route('web.post.contacto'), 'class' => 'form', 'id' => 'contactform']) !!}

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control styled" id="name_contact" name="name_contact" placeholder="Jhon">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Apellido:</label>
                                        <input type="text" class="form-control styled" id="lastname_contact" name="lastname_contact" placeholder="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" id="email_contact" name="email_contact" class="form-control styled" placeholder="jhon@email.com">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Teléfono:</label>
                                        <input type="text" id="phone_contact" name="phone_contact" class="form-control styled" placeholder="00 44 5435435">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mensaje:</label>
                                        <textarea rows="5" id="message_contact" name="message_contact" class="form-control styled" style="height:100px;" placeholder="Hello world!"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Es usted Humano? 3 + 1 =</label>
                                        <input type="text" id="verify_contact" class=" form-control styled" placeholder=" 3 + 1 =">
                                    </div>
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