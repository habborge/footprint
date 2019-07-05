@extends('layouts.application_web')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="text-uppercase">
                    Adopta una Mascota <br>
                    Alguien te Necesita!!
                </h1>
                <p class="text-white sub-head">
                    El propósito de FOOTPRINT es aumentar la adopción y apadrinamiento de animales domésticos abandonados.
                </p>
                <a href="/pets" class="primary-btn header-btn text-uppercase">Encuentra a tu mascota</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start image-carusel Area -->
<section class="image-carusel-area">
    <div class="container">
        <div class="row">
            <div class="active-image-carusel">
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c1.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c2.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c3.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c4.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c1.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c2.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c3.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c4.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c1.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c2.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c3.jpg" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="./animalshelter/img/c4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End image-carusel Area -->


<!-- Start callto-top Area -->
<section class="callto-top-area section-gap">
    <div class="container">
        <div class="row justify-content-between callto-top-wrap pt-40 pb-40">
            <div class="col-lg-8 callto-top-left">
                <h1>Apadrina tu mascota favorita </h1>
            </div>
            <div class="col-lg-4 callto-top-right">
                <a href="/pets" class="primary-btn">Escoje una</a>
            </div>
        </div>
    </div>
</section>
<!-- End callto-top Area -->


<!-- Start home-about Area -->
<section class="home-about-area section-gap2 relative">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left">
                <img src="./animalshelter/img/about-img.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <h1 class="text-white">
                    Conectados con nuestro equipo
                </h1>
                <h5 class="text-white">Escuchamos los comenatrios de aquellos que han adoptado</h5>
                <p class="text-white">
                        Dolly y yo nos hemos hecho grandes amigas y estoy encantada con ella. Aun tiene que ganar más peso, pero se la ve con muchísima más vitalidad (y genio!), lo que me llena de alegría, y hasta me parece verla sonreir official website. Juzgar vosotros!
                </p>
                <a href="#" class="primary-btn header-btn  text-uppercase">Leer Más</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


<!-- Start video Area -->
<section class="video-area section-gap">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8">
                <div class="about-video-right justify-content-center align-items-center d-flex relative">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="./animalshelter/img/play-btn.png" alt=""></a>
                </div>
                <div class="description">
                    <h4>Video promocional</h4>
                    <p class="text-justify">
                            Solo en el año 2020, contar con el apoyo económico de 1000 personas, y con la colaboración en “tiempo” de más de 2000 voluntarios independientes, cuyas tareas van desde la socialización de perros y gatos, la búsqueda de nuevos hogares para los animales que tutelamos, hasta la colaboración en campañas de concienciación, eventos, visitas a centros escolares y el apoyo en terapias asistidas por animales. No podemos tampoco olvidarnos de nuestros trabajadores, personas altamente cualificadas en cada uno de sus ámbitos de actuación, que ponen todo su interés en cuidar de los animales que llegan a nosotros.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End video Area -->


<!-- Start process Area -->
<section class="process-area section-gap">
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Proceso para adoptar una Mascota</h1>
                    <p>Condiciones para adquirir una Mascota</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-thumbs-up"></span>
                    <a href="#">
                        <h4>
                            Selecciona tu mascota
                        </h4>
                    </a>
                    <p>
                            Selecciona la amscota que deseas adoptar. <br><br><b>Recuerda:</b> No damos en adopción animales a menores de edad, los adoptantes serán sus padres o tutores
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-user"></span>
                    <a href="#">
                        <h4>
                            Ingresos aceptables
                        </h4>
                    </a>
                    <p>
                        No damos en adopción animales a mayores de edad sin independencia económica, se requiere la autorización de sus padres o tutores.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-license"></span>
                    <a href="#">
                        <h4>
                           Contrato de adopción
                        </h4>
                    </a>
                    <p>
                            Debes firmar un acta que te compromete a cuidar de tu mascota y mantenerla en unas condiciones óptimas de espacio, tiempo, alimentación, ejercicio, asi como dotarle de los cuidados veterinarios que necesite.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-magic-wand"></span>
                    <a href="#">
                        <h4>
                            Entrega a la nueva familia
                        </h4>
                    </a>
                    <p>
                        las mascotas serán entregadas conContrato de adopción y seguimiento, Con las vacunas al día y Desparasitados interna y externamente.
                        <br><br>
    <b>OBS:</b>A los gatos, además, se les realiza el test de Leucemia e Inmunodeficiencia felina.


                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End process Area -->


<!-- Start testomial Area -->
<section class="testomial-area section-gap" id="testimonail">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Testimonios de nuestros Voluntarios</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial-carusel">
                <div class="single-testimonial item">
                    <img class="mx-auto" src="./animalshelter/img/t1.png" alt="">
                    <p class="desc">
                        Fiti vino a vernos hoy a la Felguera! Está genial y aprovechó para equiparse con un chubasquero, que el invierno aquí es crudo jiji. Sus caras lo dicen todo
                    </p>
                    <h4>FITI</h4>
                    <p>
                        Siberiano criollo
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="./animalshelter/img/t2.png" alt="">
                    <p class="desc">
                            Cuando Lloris llegó a Serín estaba tan nervioso que pensamos que iba a ser difícil encontrarle una buena familia. Hasta que llego ésta, que se enamoró de Lloris, le dieron el cariño que necesitaba y así está de contento.
                    </p>
                    <h4>LLORIS</h4>
                    <p>
                        Pointer Aleman
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="./animalshelter/img/t3.png" alt="">
                    <p class="desc">
                            Después de 3 años en el Albergue y con una historia muy triste detrás, Lupita viajó durante casi dos días hasta llegar a su nueva casa en Gales (Reino Unido). Y así está de relajada y feliz.
                    </p>
                    <h4>LUPITA</h4>
                    <p>
                        Mezclada
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End testomial Area -->

<!-- Start calltoaction Area -->
<section class="calltoaction-area section-gap relative">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row align-items-center justify-content-center">
                <h1 class="text-white">¿Quieres Ayudar? Se un Voluntario</h1>
                <p class="text-white">
                        En FOOTPRINT Puedes llegar a ser un Voluntario Independiente en donde podrás recibir subsidios e incentivos por apoyar la causa de adopción y apadrinamiento haciendo que las demás personas nuevas participen activamente en dichas actividades.
                </p>
                <div class="buttons d-flex flex-row">
                    <a href="/voluntary" class="primary-btn text-uppercase">Registrate ahora</a>
                    <a href="/incentive-plan" class="primary-btn text-uppercase">Conoce plan de Incentivos</a>
                </div>
            </div>
        </div>
    </section>
<!-- End calltoaction Area -->
@endsection

