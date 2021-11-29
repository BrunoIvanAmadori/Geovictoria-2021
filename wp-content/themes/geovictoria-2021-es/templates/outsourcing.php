<?php

/*
Template Name: Outsourcing
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Gestiona tu personal de
						Outsourcing en un solo lugar
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Gestión de operaciones, seguimiento de rutas,
						información de los trabajadores en terreno. Todo
						esto y mucho más desde nuestra plataforma.
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">¡Quiero actualizarme!</span>
					</button>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/header-outsourcing.png'>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container clients col-12 mb-3">
			<h2 class="text-center gray section-title fw-light anime-fadein">Nuestros clientes ya<br><span class="fw-bold">gestionan su personal con nosotros</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ecrgroup-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/grupoexpro-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ugs-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/limchile-logobnw.png'>

			</div>
		</section>
	</div>

	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">La <span class="fw-bold">gestión del personal externo</span> para tus clientes <span class="fw-bold">como nunca antes lo viste</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/graphic-1.png'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Administra, decide, ahorra</h3>
				<p>¿Tienes problemas con el manejo de tu personal de Outsourcing?
					Con GeoVictoria gestiona, asigna horarios y <b>haz trazabilidad de
						tu personal en un sólo clic</b>.</p>
				<p>
					Nuestra solución <b>entrega información certera sobre el personal</b> que
					tienes a cargo en diferentes zonas asignadas. Asegura los contratos
					con tus clientes y evita multas por incumplimiento.</p>
				<p>Podrás tomar las decisiones al instante. <b>¡Todo desde un solo lugar!</b></p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Simple, rápido y amigable</h3>
				<p>Optimiza eficazmente los datos. Con GeoVictoria utiliza la información
					de la asistencia del personal externo <b>para ahorrar tiempo y dinero.</b></p>
				<p>Visualiza el cumplimiento de jornada laboral. Controla horas extras
					efectuadas. <b>Programa alertas por atrasos o ausencias.</b></p>
				<p><b>¡Que el recurso más valioso sea la tranquilidad de tus clientes!</b>
				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/graphic-2.png'>
			</div>
		</div>
	</section>



	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">¿Por qué elegir GeoVictoria?<br></h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear-person.svg" />
				<h6 class="fw-bold">Administra personal</h6>
				<p>Construye perfiles y grupos
					de personal externo adaptados
					al punto de trabajo asignado.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h6 class="fw-bold">Cumplimiento de cobertura</h6>
				<p>Seguimiento de rutas y tareas del
					personal en terreno. Conoce en el
					momento el recorrido de tu personal
					en los puntos asignados.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h6 class="fw-bold">Decisión en tiempo real
				</h6>
				<p>Toma decisiones al instante.
					Programa alertas y notificaciones.
					Evita multas por incumplimiento
					de contrato con tus clientes.</p>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<section class="d-flex flex-column container justify-content-between">
			<div class="row gx-5 anime-fadein">
				<h2 class="text-center mb-5">El mejor respaldo, <b>son nuestros clientes</b></h2>
				<div class="col-lg-8 pe-lg-5 align-self-center">
					<div class="testimonial__video--small text-center">
						<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/tboiucsfGPc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
					<h3 class="fw-bold">Caso de éxito: Grupo Expro</h3>
					<img class="testimonial__logo--small" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/grupoexpro-logobnw.png" />
					<p>
						<!-- <img class="arrow-quote--left" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
						<i>“Nos decidimos por la cercanía, la relación comercial, la flexibilidad, la respuesta oportuna, la alta disponibilidad en tratar inquietudes” </i>
						<!-- <img class="arrow-quote--right" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
					</p>
					<div class="row justify-content-center justify-content-lg-start">
						<span>
							<span class="fw-bold">Cristián Carvajal</span></br>
							<small>Gerente General</small>
						</span>

					</div>
				</div>
			</div>
		</section>
	</div>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein-childs">
				<h2 class="white fw-bold mb-3">
					Mantén a tus clientes felices
					¡Ahorra tiempo y dinero en la
					gestión de tu Outsourcing!
				</h2>

				<p>
					Sabemos que toda transformación es
					un desafío. Miles de empresas ya gestionan
					su personal externo con nosotros.
				</p>

				<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					¡Quiero actualizarme!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>

</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'contacto') ?>;