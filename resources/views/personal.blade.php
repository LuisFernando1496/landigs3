@extends('layouts.app')
@section('content')
<!-- Start Team Area  -->
<div class="rainbow-team-area rainbow-section-gap">
    <div class="container container-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle"><span class="theme-gradient">Nuestros Expertos</span></h4>
                    <h2 class="title w-600 mb--20">Equipo de Seguridad</h2>
                    <p class="description b1">Contamos con un equipo altamente capacitado en protección, vigilancia y servicios de seguridad, ideal para cualquier tipo de establecimiento.</p>
                </div>
            </div>
        </div>
        <div class="row row--15">
            <!-- Guardia Básico -->
            <div class="col-lg-4 col-md-6 col-12 mt--10" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="rainbow-team team-style-default style-two">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="{{asset('doob/images/portafolio/guardia_jr.jpg')}}" alt="Guardia Básico">
                        </div>
                        <div class="content">
                            <h2 class="title">Guardia Básico</h2>
                            <h6 class="subtitle theme-gradient"><i class="feather-eye"></i> DESARMADO</h6>
                            <ul class="features-list">
                                <li> Control de accesos</li>
                                <li> Rondines de vigilancia y evacuación</li>
                                <li> Detección de farderismo e inspección corporal</li>
                                <li> Inducción a políticas empresariales y ética laboral</li>
                                <li> Uso de radiocomunicador (Opcional), fornitura, P-R24, gas pimienta</li>
                            </ul>
                            <!-- <ul class="social-icon social-default icon-naked mt--20">
                                <li><a href="https://www.facebook.com/"><i class="feather-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com"><i class="feather-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="feather-instagram"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guardia Intermedio -->
            <div class="col-lg-4 col-md-6 col-12 mt--10" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="rainbow-team team-style-default style-two">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="{{asset('doob/images/portafolio/guardia_md.png')}}" alt="Guardia Intermedio">
                        </div>
                        <div class="content">
                            <h2 class="title">Guardia Intermedio</h2>
                            <h6 class="subtitle theme-gradient"><i class="feather-zap"></i> BASTÓN RETRÁCTIL</h6>
                            <ul class="features-list">
                                <li> Altura mínima de 1.70, chaleco y botas tácticas</li>
                                <li> Radiocomunicación y defensa personal</li>
                                <li> Conocimiento en derechos humanos y ética laboral</li>
                                <li> Control de accesos y protección a funcionarios</li>
                                <li> Custodia y traslado de valores</li>
                                <li> Prevención de incendios y rondines de seguridad</li>
                            </ul>
                            <!-- <ul class="social-icon social-default icon-naked mt--20">
                                <li><a href="https://www.facebook.com/"><i class="feather-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com"><i class="feather-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="feather-instagram"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guardia Avanzado -->
            <div class="col-lg-4 col-md-6 col-12 mt--10" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="rainbow-team team-style-default style-two">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="{{asset('doob/images/portafolio/guardia_sr.png')}}" alt="Guardia Avanzado">
                        </div>
                        <div class="content">
                            <h2 class="title">Guardia Avanzado</h2>
                            <h6 class="subtitle theme-gradient"><i class="feather-lock"></i> ARMADO</h6>
                            <ul class="features-list">
                                <li> Altura mínima de 1.70, chaleco y botas tácticas</li>
                                <li>Arma Walther ppq .43 (u similar).</li>
                                <li> Capacitación en primeros auxilios y prevención de riesgos</li>
                                <li> Custodia de personal ejecutivo y patrullaje de perímetro</li>
                                <li> Protocolos de emergencia y evacuación</li>
                                <li> Prevención y control de incendios</li>
                                <li> Defensa personal y uso racional de la fuerza</li>
                            </ul>
                            <!-- <ul class="social-icon social-default icon-naked mt--20">
                                <li><a href="https://www.facebook.com/"><i class="feather-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com"><i class="feather-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="feather-instagram"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start Team Area  -->


@endsection
