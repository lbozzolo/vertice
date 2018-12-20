<div id="newsletter_container">
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Subscribete a nuestro newletter y recibiras nuestras novedades.</h3>
                <div id="message-newsletter_2"></div>

                {!! Form::open(['url' => route('web.suscribe.newsletter'), 'method' => 'post', 'name' => 'newsletter_2', 'class' => 'form-inline']) !!}
                {!! Form::email('email_newsletter_2', null, ['class' => 'form-control', 'id' => 'email_newsletter_2', 'placeholder' => 'Tu email']) !!}
                {!! Form::submit('Suscribite', ['class' => 'button', 'id' => 'submit-newsletter_2']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div><!-- End newsletter_container -->

<footer>
    <div class="container margin_60_35">
        <div class="row ">
            <div class="col-md-4 col-sm-6">
                <img src="{{ asset('template-web/assets/img/logo-footer.png') }}" width="190" height="48" alt="Farmacia Osvaldini" data-retina="true" id="logo_footer">
                <p>En Farmacia Osvaldini contamos con más de 30 años de reconocida trayectoria en el sector. Ofrecemos productos de perfumería, higiene y más. </p>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-3">

            </div>
            <div class="col-md-4 col-sm-3" id="contact_bg">
                <h3>Contacto</h3>
                <ul id="contact_details_footer">
                    <li id="address_footer">Av. Shaw 658 - Entre del Pejerrey y de la Trucha - Pinamar - BUENOS AIRES 7167</li>
                    <li id="phone_footer"><a href="tel://(02254) 48 2867">(02254) 48 2867</a></li>
                    <li id="email_footer"><a href="mailto:info@farmaciaosvaldini.com">info@farmaciaosvaldini.com</a></li>
                </ul>
            </div>
        </div><!-- End row -->
        <div id="social_footer">
            <ul>
                <li><a href="https://www.facebook.com/pg/Osvaldini-Farmacia-y-Perfumería-645094478857713" target="_new"><i class="icon-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/farmaciaosvaldini" target="_new"><i class="icon-instagram"></i></a></li>
                {{--<li><a href="{{ route('admin') }}" title="Panel de control">admin </a></li>--}}
            </ul>
        </div>
    </div><!-- End container -->
    <div id="copy">
        <div class="container">
            © Farmaciaosvaldini.com 2018 - Dominio Reservado.
        </div>
    </div><!-- End copy -->
</footer><!-- End footer -->