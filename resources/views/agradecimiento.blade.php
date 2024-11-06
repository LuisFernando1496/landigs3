@extends('layouts.app')
@section('content')
<div class="rainbow-contact-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb--40">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle"><span class="theme-gradient">Gracias por contactarnos</span></h4>
                    <h2 class="title w-600 mb--20">Nos pondremos en contacto contigo pronto.</h2>
                    <p class="description b1">Agradecemos tu interés en nuestros servicios de seguridad. Nuestro equipo revisará tu mensaje y te responderá a la brevedad posible.</p>
                </div>
            </div>
        </div>

        <div class="row row--15">

            <div class="col-lg-12 col-md-6 col-12 mt--10" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="rainbow-address">
                    <div class="icon">
                        <i class="feather-phone-call"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Nuestro Equipo</h4>
                        <p>Un miembro de nuestro equipo se pondrá en contacto contigo en breve para brindarte la información que necesites.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt--40 row--15">
            <div class="col-lg-12 text-center">
                <a href="{{ url('/') }}" class="btn-default btn-large rainbow-btn">
                    <span>Volver al Inicio</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
