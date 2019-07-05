@extends('layouts.application_web')
@section('content')
<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Nosotros
							</h1>
							<p class="text-white link-nav"><a href="index.html">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html">Nosotros</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->




			<!-- Start testomial Area -->
			<section class="testomial-area section-gap" id="testimonail">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Quienes Somos</h1>
								<p>En FOOTPRINT todo es hecho con amor y por amor.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="row">
                            <div class="col-md-12">
                                <div class="img-text">
                                    <p><h1><b>Footprint</b></h1> Es un proyecto que tiene como propósito contribuir con la disminución del abandono de animales domésticos en Colombia, mediante el desarrollo de una plataforma tecnológica en dos Idiomas ( Español e Inglés ) que permita a las personas la adopción, apadrinamiento, donaciones, control, seguimiento, y Gestión de búsquedas por pérdida o abandono de mascotas. A su vez el usuario podrá contar con servicios como administración y uso de incentivos de voluntarios independientes, para compra de alimentos, peluquerías y veterinarias.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <p>El desarrollo de la plataforma tecnológica Footprints en materia de adopción y apadrinamiento contará con una lista de animales domésticos (perros y gatos), con los cuales el usuario podrá ingresar, observarlos y con base en estos tomar la decisión de adoptar, apadrinar o realizar donaciones. Para ello es necesario recopilar la información básica de aquellos animales que fueron rescatados y no cuentan con un hogar y están situados en fundaciones y/o Perreras aliadas al proyecto. las funcionalidades mencionadas se manejan de la siguiente manera:</p>
                            </div>
                            <div class="col-lg-12">
                                <p><h4><b>Adopción</b></h4> Si el usuario está interesado en adoptar, este debe diligenciar un formulario el cual será analizado y pre-aprobado por la plataforma tecnológica basado en las políticas de adopción definidas para las fundaciones y/o perreras aliadas al proyecto, al momento de presentarse por la mascota se finaliza el proceso con la verificación de los datos ingresados en la solicitud de registro de adopción. El dueño tendrá la opción de comprar un collar que le permite rastrear a su mascota geográficamente a través de la plataforma en caso de seguimiento, pérdida o robo.Por último el adoptante puede dar una contribución por la adopción (Donación), para el sostenimiento de las fundaciones y perreras que apoyan esta noble causa.</p>
                            </div>
                            <div class="col-md-12  text-center">
                                    <img src="./animalshelter/img/about-us1.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
                                </div>
                            <div class="col-md-12">
                                <div class="img-text">
                                    <p><h4><b>Apadrinamiento</b></h4> Para aquellos usuario que desean apadrinar una mascota, puede seleccionarla en el listado y realizar su contribución, la plataforma contará con diferentes modalidades: mensual, trimestral, semestral, anual y también se contempla una contribución por única vez. la plataforma está diseñada para recibir un contribución mínima de $50.000 pesos en cualquiera de sus modalidades. Para aquellas contribuciones que son periódicas la plataforma contará con un sistema de partidas abiertas, la cual generará correos electrónicos y/o mensajes de texto que envíe alertas a los usuarios con los pagos pendientes por realizar.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <p><h4><b>Donaciones</b></h4> Con respecto a las donaciones el usuario tendrá la posibilidad de dar contribuciones para ayudar a las fundaciones adscritas a esta plataforma y así apoyar esta gran labor para la manutención de los animales domésticos sin hogar.
                                Para todo lo que tiene que ver con contribuciones la plataforma contará con un servicio de pago con tarjeta de crédito o PSE, el cual le permitirá al usuario desde la misma aplicación realizar sus contribuciones.
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p><h4><b>Incentivos</b></h4> La Plataforma contará con un módulo para la administración y uso de incentivos obtenidos por la gestión de adopciones y apadrinamientos que generen los voluntarios independientes.
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p>
                                        <h4><b>Control y seguimiento</b></h4> La plataforma tecnológica Footprints, contará con un sistema de monitoreo para aquellas mascotas que poseen el collar a través de geolocalización, la cual permitirá a fundaciones y dueños encontrar fácilmente mascotas extraviadas, abandonadas  o robadas.
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p>
                                        <h4><b>Mascotas extraviadas</b></h4> El dueño podrá realizar una búsqueda de su mascota a través del collar en caso que lo haya adquirido, ubicándola por medio de la plataforma tecnológica Footprints, en caso de que este mecanismo no sea efectivo o no esta implementado en la mascota, puede hacer uso del botón de pánico y el sistema automáticamente generará correos a usuarios registrados, como también enviará anuncios a redes sociales con la desaparición y recompensa según lo establecido por el dueño de la mascota.
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p>
                                Uno de los valores agregados al presente proyecto es que lo dueños de mascotas sea por adopción o compra, pueden adquirir productos y/o servicios como:
                                <ol><b>
                                <li>Servicios Veterinarios</li>
                                <li>Servicios de peluquería</li>
                                <li>Servicios de adiestramiento</li>
                                <li>Servicios de Guardería</li>
                                <li>Insumos de manutención (alimento, medicinas entre otros).</li>
                                </b></ol>
                                <br>
                                Esto será realizado a través de alianzas que definan acuerdos y servicios que aseguren la efectividad de los servicios prestado en la plataforma.
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

