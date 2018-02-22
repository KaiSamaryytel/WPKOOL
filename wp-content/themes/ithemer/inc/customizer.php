<?php
/**
 * iThemer Theme Customizer
 *
 * @package iThemer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ithemer_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Sanitization Callback
	require_once trailingslashit( get_template_directory() ) . '/inc/sanitize.php'; 

	// Sanitization Callback
	require_once trailingslashit( get_template_directory() ) . '/inc/customizer-front.php'; 

	// Load Upgrade to Pro control.
	require_once trailingslashit( get_template_directory() ) . '/inc/upgrade-to-pro/control.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'ithemer_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new ithemer_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Upgrade to Pro', 'ithemer' ),
				'pro_text' => esc_html__( 'Buy Themer Pro', 'ithemer' ),
				'pro_url'  => 'https://ithemer.com/themes/ithemer-pro-wordpress-theme/',
				'priority' => 1,
			)
		)
	);


	$wp_customize->add_panel( 'ithemer_main_option', array(
			'priority' => 10,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Header Options', 'ithemer' ),
			'description' => __( 'Header Options', 'ithemer' ),
		)
	);	
    
    //Social Links

    $wp_customize->add_section('top_social_option',array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __('Social Links','ithemer'),
			'description' => __('Social Links','ithemer'),
			'panel' => 'ithemer_main_option',
		)
	);
    
    	$wp_customize->add_setting('ithemer_facebook_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ithemer_sanitize_url',
			'default' =>  __( '', 'ithemer' )
		)
	);

    //About section enable disable

	$wp_customize->add_setting( 'ithemer_social_button_enable', array(
	    'capability'		    => 'edit_theme_options',
	    'default'			    => 0,
	    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
	) );

	$wp_customize->add_control( 'ithemer_social_button_enable', array(
	    'label'                 =>  __( 'Enable Social Button in Header', 'ithemer' ),
	    'section'               => 'top_social_option',
	    'type'                  => 'checkbox',
	    'priority'              => 0,
	    'settings'              => 'ithemer_social_button_enable',
	) );

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'ithemer_facebook_url',array(
			'label' => __('Facebook URL','ithemer'),
			'type' => 'url',
			'section' => 'top_social_option',
			'settings' => 'ithemer_facebook_url',
		)
	));
    
    	$wp_customize->add_setting('ithemer_twitter_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ithemer_sanitize_url',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'ithemer_twitter_url',array(
			'label' => __('Twitter URL','ithemer'),
			'type' => 'url',
			'section' => 'top_social_option',
			'settings' => 'ithemer_twitter_url',
		)
	));
    
    	$wp_customize->add_setting('ithemer_linkedin_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ithemer_sanitize_url',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'ithemer_linkedin_url',array(
			'label' => __('Linkedin URL','ithemer'),
			'type' => 'url',
			'section' => 'top_social_option',
			'settings' => 'ithemer_linkedin_url',
		)
	));
    
    $wp_customize->add_setting('ithemer_pinterest_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'ithemer_sanitize_url',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'ithemer_pinterest_url',array(
			'label' => __('Pinterest URL','ithemer'),
			'type' => 'url',
			'section' => 'top_social_option',
			'settings' => 'ithemer_pinterest_url',
		)
	));
     $wp_customize->add_setting('ithemer_youtube_url',array(
            'capability'     => 'edit_theme_options',  
			'sanitize_callback' => 'ithemer_sanitize_url',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'ithemer_youtube_url',array(
			'label' => __('Youtube URL','ithemer'),
			'type' => 'url',
			'section' => 'top_social_option',
			'settings' => 'ithemer_youtube_url',
		)
	));
    
    //Main Banner
    
	$wp_customize->add_section('main_banner_option',array(
			'priority' => 20,
			'title' => __('Main Banner Option','ithemer'),
			'description' => __('Configure Banner Text','ithemer'),
			'panel' => 'ithemer_main_option',
		)
	);

	$wp_customize->add_setting('banner_main_title',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_main_title',array(
			'label' => __('Banner Main Title','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'banner_main_title',
		)
	));
	$wp_customize->add_setting('banner_pro_title',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_pro_title',array(
			'label' => __('Banner Starting Subtitle','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'banner_pro_title',
		)
	));

	$wp_customize->add_setting('banner_career_title1',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_career_title1',array(
			'label' => __('Banner Career Title 1','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'banner_career_title1',
		)
	));

	$wp_customize->add_setting('banner_career_title2',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default' =>  __( 'SEO Specialist', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_career_title2',array(
			'label' => __('Banner Career Title 2','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'banner_career_title2',
		)
	));
	$wp_customize->add_setting('banner_career_title3',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_career_title3',array(
			'label' => __('Banner Career Title 3','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'banner_career_title3',
		)
	));

	$wp_customize->add_setting('button_text_1',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'button_text_1',array(
			'label' => __('First Button Text','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'button_text_1',
		)
	));
	$wp_customize->add_setting('button_url_1',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'ithemer_sanitize_url',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'button_url_1',array(
			'label' => __('First Button URL','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'button_url_1',
		)
	));

		$wp_customize->add_setting('button_text_2',array(
			'capability'            => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default' =>  __( 'My Work', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'button_text_2',array(
			'label' => __('Second Button Text','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'button_text_2',
		)
	));
	$wp_customize->add_setting('button_url_2',array(
			'sanitize_callback' => 'ithemer_sanitize_url',
			'default' =>  __( '', 'ithemer' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'button_url_2',array(
			'label' => __('Second Button URL','ithemer'),
			'type' => 'text',
			'section' => 'main_banner_option',
			'settings' => 'button_url_2',
		)
	));




	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ithemer_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ithemer_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'ithemer_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ithemer_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ithemer_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ithemer_customize_preview_js() {
	wp_enqueue_script( 'ithemer-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ithemer_customize_preview_js' );

function ithemer_customizer_control_scripts() {

	wp_enqueue_script( 'ithemer-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'ithemer-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.css' );

}

add_action( 'customize_controls_enqueue_scripts', 'ithemer_customizer_control_scripts', 0 );





