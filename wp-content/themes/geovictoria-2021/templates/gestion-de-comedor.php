<?php

/*
Template Name: Gestion de comedor
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<?php if (!wp_is_mobile()) : ?>
		<div class="icon-scroll"><small class="tip">GIRA LA RUEDA</small></div>
	<?php endif; ?>

	<section class="hero container d-flex flex-column flex-md-row justify-content-around text-center text-md-start">
		<div class="hero__text col-12 col-md-6 mb-3">
			<div class="align-self-center pe-md-3">
				<h1 class="gray mb-3 fw-bold">
					Registra y controla la ración
					de alimentos para el
					comedor de tu empresa
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Evita mermas, desperdicios o incumplimientos
					en la entrega de alimentos de tu comedor.
					Planifica todo en una plataforma 100% online.
				</p>
				<button class="button--bigblue w-100 fw-bold anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white">¡Probar gratis!</span>
				</button>
			</div>
		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/header-comedor.png'>
		</div>
	</section>

	<?php if (wp_is_mobile()) : ?>
		<section class="d-flex container step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ticket">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
					</div>


					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-type">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/entry-type.png'>
						<div class="step-1__entry-selector"></div>
					</div>

					<div class="step-1__box-container">
						<img class="step-1__box" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box.png'>
						<img class="step-1__box-options" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-options.png'>
						<img class="step-1__box-pass" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-pass.png'>
						<div class="step-1__box-code">
							<span>*</span>
							<span>*</span>
							<span>*</span>
							<span>*</span>
							<span>*</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						Gestiona las raciones
					</h2>
					<p class="gray fw-light mb-3">
						Según el método que elijas, tus trabajadores podrán registrar su entrada al comedor y recibir la ración de alimento asignada para el día.
					</p>
				</div>
			</div>
		</section>

		<section class="d-flex container step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						¡Siempre en la nube!
					</h2>
					<p class="gray fw-light mb-3">
						Los datos de las raciones entregadas estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-2 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__ticket--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
					<img class="step-2__ticket--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-2.png'>
					<img class="step-2__ticket--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-3.png'>
					<img class="step-2__ticket--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-4.png'>
					<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>
					<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>

					<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/loading.svg'>
					<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/arrow-up.svg'>
					<div class="step-2__bubble"></div>
					<div class="step-2__check">
						<i class="fas fa-check"></i>
					</div>
				</div>
		</section>

		<section class="d-flex container step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/platform.png'>
					<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-action.png'>
					<div class="step-3__ripple"></div>

					<div class="step-3__graphic-container">
						<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic.png'>
						<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
					</div>

					<div class="step-3__report-container d-flex flex-column">
						<img class="step-3__report" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-individual.png'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
						<div class="step-3__data-3">0</div>
					</div>

					<div class="step-3__rations-container d-flex flex-column">
						<img class="step-3__rations" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/rations.png'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
						<div class="step-3__data-3">0</div>
						<div class="step-3__data-4">0</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						Reportes al instante
					</h2>
					<p class="gray fw-light mb-3">
						Obtén reportes de las personas habilitadas para recibir alimento, la información del lugar y la hora en que validaron su ración asignada.
					</p>
				</div>
			</div>
		</section>

	<?php else : ?>

		<div class="animation-container invisible container">
			<section class="d-flex step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
				<div class="step-1__bg-curve">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
					<div class="bg-tail-gray"></div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference">
					<div class="resizer">
						<div class="step-1__ticket">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
						</div>

						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-type">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/entry-type.png'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__box-container">
							<img class="step-1__box" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box.png'>
							<img class="step-1__box-options" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-options.png'>
							<img class="step-1__box-pass" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-pass.png'>
							<div class="step-1__box-code">
								<span>*</span>
								<span>*</span>
								<span>*</span>
								<span>*</span>
								<span>*</span>
							</div>
						</div>




					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h2 class="gray mb-3 fw-bold">
							Gestiona las raciones
						</h2>
						<p class="gray fw-light mb-3">
							Según el método que elijas, tus trabajadores podrán registrar su entrada al comedor y recibir la ración de alimento asignada para el día.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h2 class="gray mb-3 fw-bold">
							¡Siempre en la nube!
						</h2>
						<p class="gray fw-light mb-3">
							Los datos de las raciones entregadas estarán protegidos en la nube. La información quedará alojada en tiempo real. ¡Disponible cuando la necesites!
						</p>
					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-2 step-2__graphics resizer-reference">
					<div class="scale-fix">
						<div class="resizer">
							<img class="step-2__ticket--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
							<img class="step-2__ticket--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-2.png'>
							<img class="step-2__ticket--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-3.png'>
							<img class="step-2__ticket--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-4.png'>
							<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>
							<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>

							<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/loading.svg'>
							<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/arrow-up.svg'>
							<div class="step-2__bubble"></div>
							<div class="step-2__check">
								<i class="fas fa-check"></i>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/platform.png'>
						<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-action.png'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic.png'>
							<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
						</div>

						<div class="step-3__report-container d-flex flex-column">
							<img class="step-3__report" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-individual.png'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__rations-container d-flex flex-column">
							<img class="step-3__rations" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/rations.png'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
							<div class="step-3__data-3">0</div>
							<div class="step-3__data-4">0</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h2 class="gray mb-3 fw-bold">
							Reportes al instante
						</h2>
						<p class="gray fw-light mb-3">
							Obtén reportes de las personas habilitadas para recibir alimento, la información del lugar y la hora en que validaron su ración asignada.
						</p>
					</div>
				</div>
			</section>
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center fw-bold gray section-title anime-fadein">¿Por qué elegir nuestra gestión de comedor?</h2>
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 col-lg-3  benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/meal.svg" />

						<h5>Asigna raciones según perfiles</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Asigna y distribuye
							las raciones a las
							personas habilitadas.
							Podrás fijar el tipo de
							alimento según hora y
							lugar autorizado.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud-paper.svg" />

						<h5>Encuentra datos en tiempo real</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Conoce los datos de
							fecha, hora y lugar de
							las comidas asignadas.
							¡No malgastes
							raciones por falta
							de información!
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">


						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/jigsaw.svg" />
						<h5>Integrable con acceso y asistencia</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Aprovecha tus módulos
							de asistencia y acceso
							con el control de
							comedor. Así tendrás
							información consolidada
							y a un solo clic.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/print.svg" />

						<h5>Entrega ticket de manera automática</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Otorga tickets
							individuales para el
							correcto control de las
							raciones entregadas.
							¡Es el respaldo para
							tu comedor!
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="container-fluid bg-blue-2 logging-types ">
		<div class="container">
			<div class="row mb-5">
				<h2>Podrás elegir entre diferentes tipos de marcaje</h2>
			</div>
			<div class="row justify-content-between <?php if (!wp_is_mobile()) echo 'anime-fadein-childs' ?>">
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>GeoVictoria Box</h6>
					<small>El método de marcaje por excelencia vía reloj control mediante conexiones LAN, 3G o Wi-Fi.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-face.png" />
					<h6>GeoVictoria Face</h6>
					<small>Detección de temperatura, mascarilla y sin contacto. Así es el marcaje con reconocimiento facial.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-palm.png" />
					<h6>Reconocimiento de Palma</h6>
					<small>Método de marcaje biométrico certero y sin contacto.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-password.png" />
					<h6>Contraseña</h6>
					<small>La ración de tus trabajadores mediante un código de seguridad.
					</small>
				</div>
			</div>
		</div>

	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos más que un control de comedor</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/meal.svg" />
				<h5 class="fw-bold">Tipos de raciones</h5>
				<p>No importa si es desayuno, almuerzo o cena. Con nuestra solución puedes crear hasta seis tipos de raciones. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/papers.svg" />
				<h5 class="fw-bold">Respaldo permanente</h5>
				<p>Sea gestionado por ti o por un externo, siente la tranquilidad de que tus colaboradores obtendrán su ración asignada. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/notebook-check.svg" />
				<h5 class="fw-bold">Planeación inteligente</h5>
				<p>Genera una planificación precisa de la ración. Evita mermas, desperdicios o incumplimientos en la entrega.</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h2 class="white fw-bold mb-3">
					¿Listo para ser parte del cambio?
				</h2>

				<p class="white fw-light mb-3 anime-fadein">
					Miles de empresas ya gestionan su
					comedor desde nuestra plataforma.
					Tú puedes ser el próximo.
				</p>

				<button class="fw-bold button--bigwhite w-100 mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					¡Probar gratis!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>