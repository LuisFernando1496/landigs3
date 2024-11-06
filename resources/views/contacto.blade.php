@extends('layouts.app')
@section('content')
<div class="rainbow-contact-area rainbow-section-gap">
    <div class="container container-section">
        <div class="row">
            <div class="col-lg-12 mb--40">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                    data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Contáctanos</span></h4>
                    <h2 class="title w-600 mb--20">Nuestra dirección de contacto aquí.</h2>
                </div>
            </div>
        </div>
        <div class="row row--15">
            <div class="col-lg-12">
                <div class="rainbow-contact-address mt_dec--30">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rainbow-address">
                                <div class="icon">
                                    <i class="feather-map-pin"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Dirección</h4>
                                    <strong>Tuxtla</strong>
                                    <p>Uruguay #207, Colonia El Retiro, interior B. C.P. 29040.</p>
                                    <hr>
                                    <strong>Tapachula</strong>
                                    <p>11 avenida Norte #83, colonia centro, plaza Ikal. C.P. 30700.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rainbow-address">
                                <div class="icon">
                                    <i class="feather-headphones"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Número de teléfono de contacto</h4>
                                    <p><a href="#"><strong>Tuxtla: </strong>+52 961 346 5189</a></p>
                                    <p><a href="#"><strong>Tapachula: </strong>+52 962 688 7091</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rainbow-address">
                                <div class="icon">
                                    <i class="feather-mail"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Correo</h4>
                                    <p><a href="mailto:avisosycontratos@seguridadprivadas3.com"><strong>Tuxtla:
                                            </strong><br>avisosycontratos@ <br> seguridadprivadas3.com</a></p>
                                    <p><a href="mailto:avisosycontratos@seguridadprivadas3.com"><strong>Tapachula:
                                            </strong><br>avisosycontratos@ <br> seguridadprivadas3.com</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt--40 row--15">
            <div class="col-lg-7">
            <form action="{{ route('contact.send') }}" method="POST">
            @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="contact-name"
                            placeholder="Ingresa tu nombre completo">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_number" id="contact-phone"
                            placeholder="Numero teléfono">
                    </div>
                    <div class="form-group">
                        <input type="email" id="contact-email" name="email"
                            placeholder="Tu correo electrónico">
                    </div>

                    <!-- <div class="form-group">
                                <input type="text" id="subject" name="subject" placeholder="Your Subject">
                            </div> -->

                    <div class="form-group">
                        <textarea name="message" id="contact-message"
                            placeholder="Escribir mensaje"></textarea>
                    </div>

                    <div class="form-group">
                        <button name="submit" type="submit" id="submit"
                            class="btn-default btn-large rainbow-btn">
                            <span>Enviar</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 mt_md--30 mt_sm--30">
                <div class="google-map-style-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1092.9519038495791!2d-93.08788475770972!3d16.74859414105862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8f6260df08f%3A0x95f9a95d2ae254f4!2sServicios%20De%20Seguridad%20Privada%20y%20Control%20Del%20Sureste%20S3!5e0!3m2!1ses-419!2smx!4v1730753430015!5m2!1ses-419!2smx"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
