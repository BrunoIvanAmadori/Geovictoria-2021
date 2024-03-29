<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geovictoria_2021
 */

?>
<?php
$contacto_ventas_1 = get_theme_mod('geovictoria-2021_info_contacto_ventas_1');
$contacto_ventas_1_sanitized = preg_replace('/\D/', '', $contacto_ventas_1);

$contacto_email_ventas = get_theme_mod('geovictoria-2021_info_contacto_email_ventas');
$contacto_email_ventas_sanitized = esc_html($contacto_email_ventas);
?>

<footer id="colophon" class="site-footer container-fluid">
	<div class="container d-flex justify-content-between flex-column flex-md-row flex-wrap px-4">
		<div class="col-12 col-md-12 col-lg-3">
			<div class="site-branding mb-3">
				<?php the_custom_logo(); ?>
			</div>
			<?php dynamic_sidebar('footer-sidebar-1'); ?>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<?php dynamic_sidebar('footer-sidebar-2'); ?>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<?php dynamic_sidebar('footer-sidebar-3'); ?>
		</div>
		<div class="col-12 col-md-12 col-lg-3">
			<?php dynamic_sidebar('footer-sidebar-4'); ?>
			<div class='d-flex flex-column mb-3'>
				<div class="social-icon__container d-flex flex-row mb-4">
					<?php if (get_theme_mod('geovictoria-2021_redes_sociales_facebook')) : ?>
						<a href="<?php echo get_theme_mod('geovictoria-2021_redes_sociales_facebook') ?>">
							<div class="social-icon d-flex justify-content-center align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/dist/img/icons/facebook-f-brands.svg">
							</div>
						</a>
					<?php endif; ?>

					<?php if (get_theme_mod('geovictoria-2021_redes_sociales_instagram')) : ?>
						<a href="<?php echo get_theme_mod('geovictoria-2021_redes_sociales_instagram') ?>">
							<div class="social-icon d-flex justify-content-center align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/dist/img/icons/instagram-brands.svg">
							</div>
						</a>
					<?php endif; ?>

					<?php if (get_theme_mod('geovictoria-2021_redes_sociales_linkedin')) : ?>
						<a href="<?php echo get_theme_mod('geovictoria-2021_redes_sociales_linkedin') ?>">
							<div class="social-icon d-flex justify-content-center align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/dist/img/icons/linkedin-in-brands.svg">
							</div>
						</a>
					<?php endif; ?>

					<?php if (get_theme_mod('geovictoria-2021_redes_sociales_twitter')) : ?>
						<a href="<?php echo get_theme_mod('geovictoria-2021_redes_sociales_twitter') ?>">
							<div class="social-icon d-flex justify-content-center align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/dist/img/icons/twitter-brands.svg">
							</div>
						</a>
					<?php endif; ?>
				</div>
				<?php if (get_theme_mod('geovictoria-2021_info_contacto_ventas_1')) : ?>
					<div class="contact-phone pe-3">
						<i class="far fa-phone-alt blue"></i>
						<a class="underline" href="tel:<?php echo $contacto_ventas_1_sanitized; ?>"><small><?php echo $contacto_ventas_1; ?></small></a>
					</div>
				<?php endif; ?>

				<?php if (get_theme_mod('geovictoria-2021_info_contacto_email_ventas')) : ?>
					<div class="contact-email">
						<i class="far fa-envelope blue"></i>
						<a class="underline" href="mailto:<?php echo $contacto_email_ventas_sanitized; ?>"><small><?php echo $contacto_email_ventas_sanitized; ?></small></a>
					</div>
				<?php endif; ?>
			</div>

		</div>

		<?php

		?>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
<?php if (!wp_is_mobile()) : ?>
	</div> <!-- scroll content -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>