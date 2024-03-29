<?php

/**
 * Geovictoria 2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Geovictoria_2021
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('geovictoria_2021_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function geovictoria_2021_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Geovictoria 2021, use a find and replace
		 * to change 'geovictoria-2021' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('geovictoria-2021', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'geovictoria-2021'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'geovictoria_2021_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'geovictoria_2021_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function geovictoria_2021_content_width()
{
	$GLOBALS['content_width'] = apply_filters('geovictoria_2021_content_width', 640);
}
add_action('after_setup_theme', 'geovictoria_2021_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function geovictoria_2021_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 1', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 2', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 3', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer Sidebar 4', 'geovictoria-2021'),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(array(
		'name'          => esc_html__('Single Post Sidebar', 'geovictoria-2021'),
		'id'            => 'single-post-sidebar',
		'description'   => esc_html__('Add widgets here.', 'geovictoria-2021'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'geovictoria_2021_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function geovictoria_2021_scripts()
{
	wp_enqueue_style('geovictoria-2021-custom-fonts', get_template_directory_uri() . '/dist/fonts/fonts.css', array(), _S_VERSION, false);
	wp_enqueue_style('geovictoria-2021-font-awesome', get_template_directory_uri() . '/dist/fonts/font-awesome.css', [], _S_VERSION, false);
	wp_enqueue_style('geovictoria-2021-style', get_stylesheet_uri());
	wp_enqueue_style('geovictoria-2021-shared-styles', get_template_directory_uri() . '/dist/css/sharedStyles.css', array(), _S_VERSION, false);
	wp_style_add_data('geovictoria-2021-style', 'rtl', 'replace');

	wp_enqueue_script('geovictoria-2021-navigation', get_template_directory_uri() . '/dist/js/navigation.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('geovictoria-2021-modernizr', get_template_directory_uri() . '/dist/js/modernizr-webp.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('geovictoria-2021-anime-js', get_template_directory_uri() . '/dist/js/anime.min.js');
	wp_enqueue_script('geovictoria-2021-bootstrap-bundle-js', get_template_directory_uri() . '/dist/js/bootstrap.bundle.min.js', [], _S_VERSION, true);

	global $template;

	switch (basename($template)) {
		case 'control-de-asistencia.php':
		case 'controle-de-ponto.php':
		case 'attendance-control.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-asistencia-mobile', get_template_directory_uri() . '/dist/js/pages/page-asistencia-mobile.js', array(), '', true);
				wp_enqueue_style('page-asistencia-mobile-css', get_template_directory_uri() . '/dist/css/asistenciaMobile.css', [], '', false);
			} else {
				wp_enqueue_script('page-asistencia', get_template_directory_uri() . '/dist/js/pages/page-asistencia.js', [], '', true);
				wp_enqueue_style('page-asistencia-css', get_template_directory_uri() . '/dist/css/asistencia.css', [], '', false);
			}
			break;

		case 'control-de-acceso.php':
		case 'controle-de-acesso.php':
		case 'access-control.php':

			if (wp_is_mobile()) {
				wp_enqueue_script('page-acceso-mobile', get_template_directory_uri() . '/dist/js/pages/page-acceso-mobile.js', array(), '', true);
				wp_enqueue_style('page-acceso-mobile-css', get_template_directory_uri() . '/dist/css/accesoMobile.css', [], '', false);
			} else {

				wp_enqueue_script('page-acceso', get_template_directory_uri() . '/dist/js/pages/page-acceso.js', [], '', true);
				wp_enqueue_style('page-acceso-css', get_template_directory_uri() . '/dist/css/acceso.css', [], '', false);
			}
			break;

		case 'gestion-de-comedor.php':
		case 'refeitorio.php':
		case 'canteen-management.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-comedor-mobile', get_template_directory_uri() . '/dist/js/pages/page-comedor-mobile.js', array(), '', true);
				wp_enqueue_style('page-comedor-mobile-css', get_template_directory_uri() . '/dist/css/comedorMobile.css', [], '', false);
			} else {
				wp_enqueue_script('page-comedor', get_template_directory_uri() . '/dist/js/pages/page-comedor.js', [], '', true);
				wp_enqueue_style('page-comedor-css', get_template_directory_uri() . '/dist/css/comedor.css', [], '', false);
			}
			break;

		case 'business-intelligence.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-business-intelligence-mobile', get_template_directory_uri() . '/dist/js/pages/page-business-intelligence-mobile.js', array(), '', true);
				wp_enqueue_style('page-business-intelligence-mobile-css', get_template_directory_uri() . '/dist/css/businessIntelligenceMobile.css', [], '', false);
			} else {
				wp_enqueue_script('page-business-intelligence', get_template_directory_uri() . '/dist/js/pages/page-business-intelligence.js', [], '', true);
				wp_enqueue_style('page-business-intelligence-css', get_template_directory_uri() . '/dist/css/businessIntelligence.css', [], '', false);
			}
			break;

		case 'front-page.php':
		case 'home.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('front-page-mobile', get_template_directory_uri() . '/dist/js/pages/front-page-mobile.js', array(), '', true);
				wp_enqueue_style('front-page-css', get_template_directory_uri() . '/dist/css/frontpage.css', [], '', false);
			} else {
				wp_enqueue_script('front-page', get_template_directory_uri() . '/dist/js/pages/front-page.js', array(), '', true);
				wp_enqueue_style('front-page-css', get_template_directory_uri() . '/dist/css/frontpage.css', [], '', false);
			}
			break;

		case 'quienes-somos.php':
		case 'quem-somos.php':
		case 'who-we-are.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('page-nosotros-mobile', get_template_directory_uri() . '/dist/js/pages/page-quienes-somos-mobile.js', array(), '', true);
				wp_enqueue_style('page-nosotros-css', get_template_directory_uri() . '/dist/css/quienesSomos.css', [], '', false);
			} else {
				wp_enqueue_script('page-nosotros', get_template_directory_uri() . '/dist/js/pages/page-quienes-somos.js', array(), '', true);
				wp_enqueue_style('page-nosotros-css', get_template_directory_uri() . '/dist/css/quienesSomos.css', [], '', false);
			}
			break;

		case 'single.php':
			if (wp_is_mobile()) {
				wp_enqueue_script('default-mobile', get_template_directory_uri() . '/dist/js/pages/page-single-mobile.js', array(), '', true);
			} else {
				wp_enqueue_script('page-single', get_template_directory_uri() . '/dist/js/pages/page-single.js', array(), '', true);
			}
			break;

		default:
			if (wp_is_mobile()) {
				wp_enqueue_script('default-mobile', get_template_directory_uri() . '/dist/js/pages/_shared-mobile.js', array(), '', true);
			} else {
				wp_enqueue_script('default', get_template_directory_uri() . '/dist/js/pages/_shared.js', array(), '', true);
			}
	};


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'geovictoria_2021_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Include Custom Post Type: 'Casos de Exito'.

include 'inc/casos-de-exito.php';



/**
 * This filter is for fixing the retrieval of assets via get_template_directory_uri on the multisite installation. Somehow, URLs of SVGS, CSS and JS weren't working because of the "/{country-code}/" subdirectory.
 * This may be because our server is delivering via nGinx static assets so, it can't take the htaccess rewrite instructions.
 * With this function I manage to check if I'm in a subdirectory url, and strip it away.
 *
 */

function get_template_directory_uri_fix_for_multisite($string)
{

	if (get_current_blog_id() != 1) {
		// Checking that I'm not in the root URL folder, which is the main site
		// SIDENOTE:
		// This introduces problems for the Casos de Exito templates. Casos de Exito's templates in different regions
		// create queries for the root blog, because all the Casos de Exito are inside the rooot blog...
		// so... this filter won't work when inside a root blog query on the Caso de Exito template.
		// I did a specific workaround on Casos de Exito in order to retrieve the template_directory BEFORE going inside the root blog loop.

		//Modify the string here
		$array = explode("/", $string);
		array_splice($array, 3, 1);
		$array = implode("/", $array);
		return $array;
	} else {
		return $string;
	}
}

add_filter('template_directory_uri', 'get_template_directory_uri_fix_for_multisite', 10, 2);


/**
 * Force all network uploads to reside in "wp-content/uploads", and by-pass
 * "files" URL rewrite for site-specific directories.
 * 
 * @link    http://wordpress.stackexchange.com/q/147750/1685
 * 
 * @param   array   $dirs
 * @return  array
 */
function wpse_147750_upload_dir($dirs)
{
	$dirs['baseurl'] = network_site_url('/wp-content/uploads');
	$dirs['basedir'] = ABSPATH . 'wp-content/uploads';
	$dirs['path'] = $dirs['basedir'] . $dirs['subdir'];
	$dirs['url'] = $dirs['baseurl'] . $dirs['subdir'];

	return $dirs;
}

add_filter('upload_dir', 'wpse_147750_upload_dir');

/**
 * Register Custom Navigation Walker
 * This is needed to properly use bootstrap on Wordpress native Navigation Menu
 */
function register_navwalker()
{
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
	return 20;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


// 

/**
 * Add filter to enable adding shortcode attributes to Contact Form 7 snippet.
 */
function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
	$my_attr = 'origen_zoho';

	if (isset($atts[$my_attr])) {
		$out[$my_attr] = $atts[$my_attr];
	}

	return $out;
}

add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

/**
 * Displays URL of current page.
 * @return string URL without query string
 */

function getURLWithoutQuery()
{
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
		$link = "https";
	else
		$link = "http";

	// Here append the common URL characters.
	$link .= "://";

	// Append the host(domain name, ip) to the URL.
	$link .= $_SERVER['HTTP_HOST'];

	// Append the requested resource location to the URL, but extracting the string before "?"
	$link .= strtok($_SERVER["REQUEST_URI"], '?');

	return $link;
}



/**
 * getGvSites
 *
 * @return Array
 * With region_code, region_name, flag_url and current_site.
 * Useful for creating a Region Selector.
 */
function getGvSites()
{
	$data[] = ['region_code' => [], 'region_name' => [], 'current_site' => [], 'flag_url' => []];

	$region_table_json = include(get_template_directory() . "/inc/region_table.php");
	$region_table = json_decode($region_table_json);

	// Obtengo idioma actual del sitio para saber en que idioma mostrar el nombre del lenguaje
	switch (substr(get_locale(), 0, 2)) {
		case "en":
			$lang_name = 'en_name';
			break;
		case "es":
			$lang_name = 'es_name';
			break;
		case "pt":
			$lang_name = 'pt_name';
			break;
	}

	for ($i = 0; $i < count(get_sites()); $i++) : // Loopeo por todos los sitios 
?>
		<?php
		$sites = get_sites();
		$region_code = str_replace('/', '', $sites[$i]->path);
		// Si es el sitio actual
		if (get_current_blog_id() == $sites[$i]->blog_id) :
			$data[$i] = ['region_code' => $region_code, 'current_site' => 1];

		// Si no es el sitio actual, agregalo a la lista. De manera que solo figuren los sitios que no son el actual.
		else :
			$data[$i] = ['region_code' => $region_code, 'current_site' => 0];
		endif;

		foreach ($region_table as $region) :
			if ($region->code == $data[$i]['region_code']) {
				$data[$i]['region_name'] = $region->$lang_name;
			}
		endforeach;

		if ($data[$i]['region_code']) {
			$data[$i]['flag_url'] = getFlagUrlByRegionCode($data[$i]['region_code']);
		}
	endfor;

	return $data;
}

/**
 * getFlagUrlByRegionCode
 *
 * @param String $region_code Region code (i.e.: cl, pt-br, etc)
 * @return String Url of the flag.
 * Useful if you only want to retrieve a flag URL.
 */
function getFlagUrlByRegionCode($region_code)
{
	return esc_url(get_template_directory_uri() . '/dist/img/flags/' . $region_code . '.png');
}

function getRegionCodeByRegionName($region_name)
{
	$region_table_json = include(get_template_directory() . "/inc/region_table.php");
	$region_table = json_decode($region_table_json);

	foreach ($region_table as $region) :
		if ($region->es_name == $region_name || $region->pt_name == $region_name || $region->en_name == $region_name) {
			$region_code = $region->code;
		} else {
			eliminar_tildes($region_name);
			if ($region->es_name == $region_name || $region->pt_name == $region_name || $region->en_name == $region_name) {
				$region_code = $region->code;
			}
		}
	endforeach;
	return $region_code;
}
