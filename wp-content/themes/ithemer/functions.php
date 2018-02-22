<?php
/**
 * iThemer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package iThemer
 */

if ( ! function_exists( 'ithemer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ithemer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on iThemer, use a find and replace
		 * to change 'ithemer' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ithemer', get_template_directory() . '/languages' );

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
		add_image_size( 'ithemer-list-thumb', 1200, 800, true ); 
		add_image_size( 'ithemer-about-thumb', 640, 640, true );
        	add_image_size( 'ithemer-work-thumb', 1500, 1000, true );
        	add_image_size( 'ithemer-client-thumb', 220, 100, true );
        	add_image_size( 'ithemer-grid-thumb', 1200,800,true);
        	add_image_size( 'ithemer-testimonial-thumb', 270,300,true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ithemer' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ithemer_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ithemer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ithemer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ithemer_content_width', 640 );
}
add_action( 'after_setup_theme', 'ithemer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ithemer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ithemer' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact Left', 'ithemer' ),
		'id'            => 'contact-left',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Right', 'ithemer' ),
		'id'            => 'contact-right',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'ithemer' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'ithemer' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'ithemer' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'ithemer' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ithemer_widgets_init' );


if ( ! function_exists( 'ithemer_fonts_url' ) ) :
	/**
	 * Register Google fonts for ithemer
	 *
	 * Create your own ithemer_fonts_url() function to override in a child theme.
	 *
	 * @since ithemer 1.0.3
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function ithemer_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'ithemer' ) ) {
			$fonts[] = 'Open+Sans:400,600,700,800';
		}

		/* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'ithemer' ) ) {
			$fonts[] = 'Playfair Display:400,700,400italic,700italic';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}

		return esc_url( $fonts_url );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function ithemer_scripts() {
	

	//Load Google Font

	wp_enqueue_style( 'google-fonts', ithemer_fonts_url(), array(), null );

	// Load font Animate css
	wp_enqueue_style( 'animate-css', get_template_directory_uri() .'/assets/css/animate.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'ithemer-animate-text', get_template_directory_uri() .'/assets/css/animate-text.css', array(), '1.0.0' );

	// Load Font Awesome css
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '4.7.0' );

	//Fancybox
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() .'/assets/css/jquery.fancybox.min.css', array(), '1.0.0' );

	// Load Slick Navigation css
	wp_enqueue_style( 'slicknav-css', get_template_directory_uri() .'/assets/css/slicknav.min.css', array(), '1.0.0' );
	
	//owl theme
	wp_enqueue_style( 'owl-theme-css', get_template_directory_uri() .'/assets/css/owl.theme.default.css', array(), '1.0.0' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '1.0.0' );


	// Load font bootstrap css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '3.3.7' );

	
	wp_enqueue_style( 'ithemer-style', get_stylesheet_uri() );


	// Load Responsive css
	wp_enqueue_style( 'ithemer-responsive', get_template_directory_uri() .'/assets/css/responsive.css', array(), '1.0.0' );

	
	// Load font Color css
	wp_enqueue_style( 'ithemer-color', get_template_directory_uri() .'/assets/css/color.css', array(), '1.0.0' );



	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'animate-js', get_template_directory_uri() . '/assets/js/animate-text.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'ithemer-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
	

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ithemer_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/breadcrumb.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer-css.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

