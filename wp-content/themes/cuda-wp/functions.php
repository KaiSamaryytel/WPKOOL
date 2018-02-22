<?php
/**
*
* cuda theme functions
* @package cuda-wp
**/

/*==============================
=            define            =
==============================*/

define("CUDA_LANG", get_template_directory_uri() . '/languages/');
define("CUDA_CSS", get_template_directory_uri() . '/css/');
define("CUDA_IMG", get_template_directory_uri() . '/images/');
define("CUDA_JS", get_template_directory_uri() . '/js/');
define("CUDA_INC", get_template_directory() . '/inc/');


/*-----  End of define  ------*/

/*==========  theme option with redux framework  ==========*/

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/framework/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/framework/theme-options.php' ) ) {
	require_once( dirname( __FILE__ ) . '/framework/theme-options.php' );
}


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'cuda_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cuda_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cuda-wp, use a find and replace
	 * to change 'cuda' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cuda', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'blog_menu' => __( 'Blog Menu', 'cuda' )
		) );



	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
		) );

	// Setup the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'cuda_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );



}
endif; // cuda_setup
add_action( 'after_setup_theme', 'cuda_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cuda_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cuda' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );

	register_sidebar( array(
		'name'          => __( 'Get In touch Widget', 'cuda' ),
		'id'            => 'contact',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );


}
add_action( 'widgets_init', 'cuda_widgets_init' );



/*============================================
=            load css and js file            =
============================================*/

add_action('wp_enqueue_scripts', 'ccr_cuda_script');

if(!function_exists('ccr_cuda_script')) {
	function ccr_cuda_script(){

		//css include
		wp_enqueue_style('bootstrap', CUDA_CSS .'bootstrap.min.css' );
		wp_enqueue_style( 'cuda-style', get_stylesheet_uri() );
		wp_enqueue_style('fontawesome', CUDA_CSS .'font-awesome.min.css' );

		//js include
		wp_enqueue_script('jquery' );
		wp_enqueue_script('isotop', CUDA_JS . 'jquery.isotope.min.js', array(), '', true );
		wp_enqueue_script('bootstrap', CUDA_JS . 'bootstrap.min.js', array(), '', false  );
		wp_enqueue_script( 'cuda-navigation', CUDA_JS . 'navigation.js', array(), '20120206', true );
		wp_enqueue_script( 'cuda-skip-link-focus-fix', CUDA_JS . 'skip-link-focus-fix.js', array(), '20130115', true );
		wp_enqueue_script('custonjs', CUDA_JS . 'main.js', array(), '', true  );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

/*-----  End of load css and js file  ------*/



/*===========================================
=            include libray file            =
===========================================*/

require CUDA_INC . 'custom-header.php';

//Custom template tags for this theme.
require CUDA_INC . 'template-tags.php';

//Custom functions that act independently of the theme templates.
require CUDA_INC . 'extras.php';

//Customizer additions.
require CUDA_INC . 'customizer.php';

//Load Jetpack compatibility file.
require CUDA_INC . 'jetpack.php';

//Load Jetpack compatibility file.
require CUDA_INC . 'wp_bootstrap_navwalker.php';

//meta box
require CUDA_INC . 'custom_meta_box.php';

//more theme
require CUDA_INC . 'more-theme-fullfree.php';


/*-----  End of include libray file  ------*/


/*===============================
=            menubar            =
===============================*/

function cuda_nav_menu(){
	if (function_exists('wp_nav_menu')) {
		wp_nav_menu( array( 
			'theme_location'  	=> 'blog_menu', 
			'menu_class'    	=> 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
		);
	};
}

/*=========================================
=            excerpt filtering            =
=========================================*/

function custom_excerpt_more( $excerpt ) {
	return str_replace( '[...]', '.', $excerpt );
}
add_filter( 'wp_trim_excerpt', 'custom_excerpt_more' );

//Excerp Length
function ccr_excerpt_length($length) {    
	global $cuda_opt;
	return $cuda_opt['blog_excerpt_length'];
}
add_filter('excerpt_length', 'ccr_excerpt_length');



/*============================================
=            wordpress admin logo            =
============================================*/

// Custom Admin Logo Login
if(!function_exists('ccr_admin_logo_login')){
	function ccr_admin_logo_login(){
		global $cuda_opt;
		if( $cuda_opt['admin_logo']['url'] ){
			?>
			<style type="text/css">
				body.login div#login h1 a {
					background-image: url("<?php echo $cuda_opt['admin_logo']['url'];?>");
					padding: 0;
					margin: 0 auto;
				}
			</style>

			<?php } else { ?>

			<style type="text/css">
				body.login div#login h1 a {
					background-image: url('<?php echo admin_url('/images/wordpress-logo.png');?>');
					padding-bottom: 0px;
				}
			</style>

			<?php }
		}
		add_action( 'login_enqueue_scripts', 'ccr_admin_logo_login' );
	}


// Logo Login URL changed from wordpress.org to Site URL
	if(!function_exists('ccr_logo_login_url')){
		function ccr_logo_login_url(){
			return site_url();
		}
		add_filter( 'login_headerurl', 'ccr_logo_login_url' );
	}



/*================================================
=               sections meta box               =
================================================*/


$service = new Cuda_JW_Post_Type('service', array(

	'menu_icon' => 'dashicons-pressthis'

	));


// team custompost type
$team = new Cuda_JW_Post_Type('team', array(

	'menu_icon' => 'dashicons-format-chat'

	));

$team->add_meta_box('Team settings', array(
	'Designation' => 'text',
	'Facebook' => 'text',
	'Twitter' => 'text',
	'Linkedin' => 'text',
	'Google Plus' => 'text'
	) );


// Testimonila custom post type
$testimonial = new Cuda_JW_Post_Type('Testimonial', array(

	'menu_icon' => 'dashicons-testimonial'

	));

$testimonial->add_meta_box('Testimonial settings', array(
	'Designation' => 'text'
	) );


//portfolio custom post type
$portfolio = new Cuda_JW_Post_Type('portfolio', array(
	'menu_icon' => 'dashicons-analytics',

	'rewrite' => array( 'slug' => 'portfolios', 'with_front' => false ),

	'supports' => array('title', 'thumbnail')

	));

$portfolio->add_taxonomy('Filter', array('portfolio'), array( 

	'hierarchical' => true,  

	'show_ui' => true,  

	'query_var' => true,  

	'rewrite' => true,  

	));


/*-----  End of section meta box  ------*/


/*-------------------------------------------------------
*			Include the TGM Plugin Activation class
*-------------------------------------------------------*/

require_once( CUDA_INC . '/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'ccrcuda_plugins_include');

if(!function_exists('ccrcuda_plugins_include')){

	function ccrcuda_plugins_include()
	{
		$plugins = array(
			
			array(
				'name'      => 'Contact Form 7',
				'slug'      => 'contact-form-7',
				'required'  => true,
				)

			);


	/**
	* Array of configuration settings. Amend each line as needed.
	* If you want the default strings to be available under your own theme domain,
	* leave the strings uncommented.
	* Some of the strings are added into a sprintf, so see the comments at the
	* end of each line for what each argument will be.
	*/
	$config = array(
			'domain'            => 'cuda-wp',           			 // Text domain - likely want to be the same as your theme.
			'default_path'      => '',                           // Default absolute path to pre-packaged plugins
			'parent_menu_slug'  => 'themes.php',         		 // Default parent menu slug
			'parent_url_slug'   => 'themes.php',         		 // Default parent URL slug
			'menu'              => 'install-required-plugins',   // Menu slug
			'has_notices'       => true,                         // Show admin notices or not
			'is_automatic'      => false,            			 // Automatically activate plugins after installation or not
			'message'           => '',               			 // Message to output right before the plugins table
			'strings'           => array(
				'page_title'                                => __( 'Install Required Plugins', 'cuda-wp' ),
				'menu_title'                                => __( 'Install Plugins', 'cuda-wp' ),
						'installing'                                => __( 'Installing Plugin: %s', 'cuda-wp' ), // %1$s = plugin name
						'oops'                                      => __( 'Something went wrong with the plugin API.', 'cuda-wp' ),
						'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
						'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
						'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
						'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
						'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
						'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
						'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
						'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
						'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
						'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
						'return'                                    => __( 'Return to Required Plugins Installer', 'cuda-wp' ),
						'plugin_activated'                          => __( 'Plugin activated successfully.', 'cuda-wp' ),
						'complete'                                  => __( 'All plugins installed and activated successfully. %s', 'cuda-wp' ) // %1$s = dashboard link
						)
);

tgmpa( $plugins, $config );

}
}


/*===================================================
=            contact form 7 field filter            =
===================================================*/


add_filter( 'wpcf7_form_elements', 'ccr_wpcf7_form_elements_filter_p' );
function ccr_wpcf7_form_elements_filter_p( $content ) {
	// global $wpcf7_contact_form;
	
	$ccr_pfind = '/<p>/';
	$ccr_preplace = '<div class="col-sm-6 element_from_left">';
	$content = preg_replace( $ccr_pfind, $ccr_preplace, $content, 2 );
	
	return $content;	
}

add_filter( 'wpcf7_form_elements', 'ccr_wpcf7_form_elements_filter_p_textarea' );
function ccr_wpcf7_form_elements_filter_p_textarea( $content ) {
	// global $wpcf7_contact_form;
	
	$ccr_pfind = '/<p>/';
	$ccr_preplace = '<div class="col-sm-12 element_from_bottom" style="display: inline-block;">';
	$content = preg_replace( $ccr_pfind, $ccr_preplace, $content, 1 );
	
	return $content;	
}

add_filter( 'wpcf7_form_elements', 'ccr_wpcf7_form_elements_filter_p_end' );
function ccr_wpcf7_form_elements_filter_p_end( $content ) {
	// global $wpcf7_contact_form;
	
	$ccr_pfind = '/<\/p>/';
	$ccr_preplace = '</div>';
	$content = preg_replace( $ccr_pfind, $ccr_preplace, $content, 3 );
	
	return $content;	
}


//input field filter

add_filter( 'wpcf7_form_elements', 'ccr_wpcf7_form_elements_filter_input' );
function ccr_wpcf7_form_elements_filter_input( $content ) {
	// global $wpcf7_contact_form;
	
	$ccr_pfind = '/<input/';
	$ccr_preplace = '<input class="form-control"';
	$content = preg_replace( $ccr_pfind, $ccr_preplace, $content, 2 );
	
	return $content;	
}


add_filter( 'wpcf7_form_elements', 'ccr_wpcf7_form_elements_filter_submit' );
function ccr_wpcf7_form_elements_filter_submit( $content ) {
	// global $wpcf7_contact_form;
	
	$ccr_pfind = '/<input type="submit"/';
	$ccr_preplace = '<input type="submit" class="ccr-button btn btn-default"';
	$content = preg_replace( $ccr_pfind, $ccr_preplace, $content, 1 );
	
	return $content;	
}



/*==========  search form filter  ==========*/

//Search Form
add_filter('get_search_form', 'cuda_search_form');

function cuda_search_form($form) {
	$form = '<form role="search" method="get" id="searchform" class="sidebar-search  clearfix" action="' . home_url( '/' ) . '" >
	<input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" required>
	<button class="btn" type="submit"><i class="fa fa-search"></i></button></form>';

return $form;
}


/*-------------------------------------------------------
 *				cuda Comment
 *-------------------------------------------------------*/

if(!function_exists('cuda_comment')):

	function cuda_comment($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
	case 'pingback' :
	case 'trackback' :
			// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

		<p>Pingback: <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'cuda-wp' ), '<span class="edit-link">', '</span>' ); ?></p>
		<?php
		break;
		default :

		global $post;
		?>

		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

			<div id="submited-commnet" class="comment">
				<ol class="commentlist children">

					<li  class="comment">
						<div class="author-hex">
							<div class="author-hex1 author-hex2">
								<div class="author-hex-in1">
									<a href="#">
										<div class="author-hex-in2">
											<?php
											echo get_avatar( $comment, $args['avatar_size'] );
											?>
										</div>
									</a>
								</div>
							</div>
						</div><!-- /.author-hex -->


						<div class="comment-content">
								<p class="comment-meta">
									<?php
									printf( '<span class="comment-author">%1$s</span>',
									get_comment_author_link());
									?><br> 
									On <?php echo get_comment_date() ?> <span class="comment-time"> at <?php echo get_comment_time()?></span>
									<?php edit_comment_link( __( 'Edit', 'cuda-wp' ), '<span class="edit-link">', '</span>' ); ?>
								</p>
								<?php comment_text(); ?>

								<span class="reply custom-btn">
									<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'cuda-wp' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
								</a>
							</span>

							<?php if ( '0' == $comment->comment_approved ) : ?>
								<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'cuda-wp' ); ?></p>
							<?php endif; ?>

						</div>

					</li>

				</ol>
			</div>


			<?php
			break;
			endswitch; 
		}

		endif;


/*==========  excerpt filter  ==========*/
function new_excerpt_more( $more ) {
	return ' ';
}
add_filter('excerpt_more', 'new_excerpt_more');


