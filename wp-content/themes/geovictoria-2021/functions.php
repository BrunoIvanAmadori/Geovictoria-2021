<?php
/**
 * Geovictoria 2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Geovictoria_2021
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'geovictoria_2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function geovictoria_2021_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Geovictoria 2021, use a find and replace
		 * to change 'geovictoria-2021' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'geovictoria-2021', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'geovictoria-2021' ),
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
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'geovictoria_2021_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function geovictoria_2021_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'geovictoria_2021_content_width', 640 );
}
add_action( 'after_setup_theme', 'geovictoria_2021_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function geovictoria_2021_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 1', 'geovictoria-2021' ),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'geovictoria-2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 2', 'geovictoria-2021' ),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'geovictoria-2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 3', 'geovictoria-2021' ),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'geovictoria-2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 4', 'geovictoria-2021' ),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'geovictoria-2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'geovictoria_2021_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function geovictoria_2021_scripts() {
	wp_enqueue_style( 'geovictoria-2021-style', get_stylesheet_uri());
	wp_enqueue_style( 'geovictoria-2021-custom-style', get_template_directory_uri() . '/css/custom.css', array(), _S_VERSION );
	wp_enqueue_style( 'font-awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
//	wp_enqueue_style( 'custom-fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), _S_VERSION, true );
	
	wp_style_add_data( 'geovictoria-2021-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'geovictoria-2021-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-webp.js', array(), _S_VERSION, true  );
	//wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/fa0ce32386.js');
	wp_enqueue_script( 'anime-js', get_template_directory_uri() . '/js/anime.min.js');
	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'animation', get_template_directory_uri() . '/js/animation.js', array(), '', true  );
	wp_enqueue_script( 'general-timeline', get_template_directory_uri() . '/js/timelines/general.js', array(), '', true  );
	
	
	

	if (!wp_is_mobile()) {
		wp_enqueue_script( 'smooth-scrollbar', get_template_directory_uri() . '/js/smooth-scrollbar.js', array(), '', true );
		wp_enqueue_script( 'sticky-smooth', get_template_directory_uri() . '/js/sticky-smooth.js', array(), '', true );
	} else {
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky.js', array(), '', true );
	};

	global $template;

	switch ( basename( $template ) ) {
		case 'page-asistencia.php':
			if (wp_is_mobile()) {
				wp_enqueue_script( 'page-asistencia-timeline-mobile', get_template_directory_uri() . '/js/timelines/page-asistencia-mobile.js', array(), '', true  );
				wp_enqueue_script( 'page-asistencia-css', get_template_directory_uri() . '/css/page-asistencia-mobile.css', array(), '', true  );
			} else {
				wp_enqueue_script( 'page-asistencia-timeline', get_template_directory_uri() . '/js/timelines/page-asistencia.js', array(), '', true  );
				wp_enqueue_script( 'page-asistencia-css', get_template_directory_uri() . '/css/page-asistencia.css', array(), '', true  );
			}
			break;

		case 'front-page.php':
			wp_enqueue_script( 'front-page-timeline', get_template_directory_uri() . '/js/timelines/front-page.js', array(), '', true  );
			break;




		};

	if ( basename( $template ) === 'page-asistencia.php' ) {
		
	}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'geovictoria_2021_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Force all network uploads to reside in "wp-content/uploads", and by-pass
 * "files" URL rewrite for site-specific directories.
 * 
 * @link    http://wordpress.stackexchange.com/q/147750/1685
 * 
 * @param   array   $dirs
 * @return  array
 */
function wpse_147750_upload_dir( $dirs ) {
    $dirs['baseurl'] = network_site_url( '/wp-content/uploads' );
    $dirs['basedir'] = ABSPATH . 'wp-content/uploads';
    $dirs['path'] = $dirs['basedir'] . $dirs['subdir'];
    $dirs['url'] = $dirs['baseurl'] . $dirs['subdir'];

    return $dirs;
}

add_filter( 'upload_dir', 'wpse_147750_upload_dir' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );