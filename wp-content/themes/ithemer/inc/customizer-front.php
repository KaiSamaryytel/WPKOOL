<?php

//Panel For Home/Front Option

$wp_customize->add_panel( 'ithemer_front_option', array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Home/Front Page Options', 'ithemer' ),
			'description' => __( 'Front Page Options', 'ithemer' ),
		)
	);	



$wp_customize->add_section( 'ithemer_about_us_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 10,
    'title'                 => __( 'Front About Section', 'ithemer' ),
    'description'           => __( 'Select pages for About section, you can also change the icon per page', 'ithemer' ),
    'panel'				=> 'ithemer_front_option'
) );

//About section enable disable

$wp_customize->add_setting( 'ithemer_about_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_about_section_enable', array(
    'label'                 =>  __( 'Enable About Us', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_about_section_enable',
) );

// about Us page 1 and Icon 1

$wp_customize->add_setting( 'ithemer_about_page_1', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_about_page_1', array(
    'label'                 =>  __( 'Select First Page', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'ithemer_about_page_1',
) );

$wp_customize->add_setting( 'ithemer_about_icon_1', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_about_icon_1', array(
    'label'                 =>  __( 'Icon For first Tab ', 'ithemer' ),
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'ithemer' ), 'fa fa-user','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'text',
    'priority'              => 30,
    'settings' => 'ithemer_about_icon_1',
) );

//about us Second  page

$wp_customize->add_setting( 'ithemer_about_page_2', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_about_page_2', array(
    'label'                 =>  __( 'Select Second Page ', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 40,
    'settings'              => 'ithemer_about_page_2',
) );

$wp_customize->add_setting( 'ithemer_about_icon_2', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_about_icon_2', array(
    'label'                 =>  __( 'Icon For Secont Tab', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon Example fa fa-user', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'text',
    'priority'              => 50,
    'settings' => 'ithemer_about_icon_2',
) );

//about us Third 
$wp_customize->add_setting( 'ithemer_about_page_3', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_about_page_3', array(
    'label'                 =>  __( 'Select Third Page ', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 60,
    'settings'              => 'ithemer_about_page_3',
) );

$wp_customize->add_setting( 'ithemer_about_icon_3', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_about_icon_3', array(
    'label'                 =>  __( 'Icon For Third Tab', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon example fa fa-question', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'text',
    'priority'              => 70,
    'settings' => 'ithemer_about_icon_3',
) );

//about us Forth
$wp_customize->add_setting( 'ithemer_about_page_4', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_about_page_4', array(
    'label'                 =>  __( 'Select Fourth Page ', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 80,
    'settings'              => 'ithemer_about_page_4',
) );

$wp_customize->add_setting( 'ithemer_about_icon_4', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_about_icon_4', array(
    'label'                 =>  __( 'Icon For Fourth Tab', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon example fa fa-rocket', 'ithemer' ),
    'section'               => 'ithemer_about_us_section',
    'type'                  => 'text',
    'priority'              => 90,
    'settings' => 'ithemer_about_icon_4',
) );

//Service Section 

$wp_customize->add_section( 'ithemer_service_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 20,
    'title'                 => __( 'Front Service Section', 'ithemer' ),
    'description'           => __( 'Select pages for Service section, you can also change the icon per page', 'ithemer' ),
    'panel'				=> 'ithemer_front_option'
) );

//service section enable disable

$wp_customize->add_setting( 'ithemer_service_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_service_section_enable', array(
    'label'                 =>  __( 'Enable Service Section', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_service_section_enable',
) );

//service Title
$wp_customize->add_setting( 'ithemer_service_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_service_page_title', array(
    'label'                 =>  __( 'Select Page for Service Title and Description', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 10,
    'settings'              => 'ithemer_service_page_title',
) );

$wp_customize->add_setting( 'ithemer_service_icon_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_service_icon_title', array(
    'label'                 =>  __( 'Icon For Service Heading', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon for Title eg fa fa-question', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings' => 'ithemer_service_icon_title',
) );
// service Us page 1 and Icon 1

$wp_customize->add_setting( 'ithemer_service_page_1', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_service_page_1', array(
    'label'                 =>  __( 'Select First Page for Service Section', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 30,
    'settings'              => 'ithemer_service_page_1',
) );

$wp_customize->add_setting( 'ithemer_service_icon_1', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_service_icon_1', array(
    'label'                 =>  __( 'Icon For Service 1', 'ithemer' ),
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'ithemer' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'text',
    'priority'              => 40,
    'settings' => 'ithemer_service_icon_1',
) );

//service us Second 
$wp_customize->add_setting( 'ithemer_service_page_2', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_service_page_2', array(
    'label'                 =>  __( 'Select Second Page for Service Section', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 50,
    'settings'              => 'ithemer_service_page_2',
) );

$wp_customize->add_setting( 'ithemer_service_icon_2', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_service_icon_2', array(
    'label'                 =>  __( 'Icon For Service 2', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon 2 eg fa fa-question', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'text',
    'priority'              => 60,
    'settings' => 'ithemer_service_icon_2',
) );

//service us Third 
$wp_customize->add_setting( 'ithemer_service_page_3', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_service_page_3', array(
    'label'                 =>  __( 'Select Third Page for Service Section', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 70,
    'settings'              => 'ithemer_service_page_3',
) );

$wp_customize->add_setting( 'ithemer_service_icon_3', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_service_icon_3', array(
    'label'                 =>  __( 'Icon For Service 3', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon 3 eg fa fa-question' , 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'text',
    'priority'              => 80,
    'settings' => 'ithemer_service_icon_3',
) );

//service us Forth
$wp_customize->add_setting( 'ithemer_service_page_4', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_service_page_4', array(
    'label'                 =>  __( 'Select Fourth Page for Service Section', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 80,
    'settings'              => 'ithemer_service_page_4',
) );

$wp_customize->add_setting( 'ithemer_service_icon_4', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_service_icon_4', array(
    'label'                 =>  __( 'Icon For Service 4', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon 4', 'ithemer' ),
    'section'               => 'ithemer_service_section',
    'type'                  => 'text',
    'priority'              => 90,
    'settings' => 'ithemer_service_icon_4',
) );



//Work Section 

$wp_customize->add_section( 'ithemer_work_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 30,
    'title'                 => __( 'Front Work Section', 'ithemer' ),
    'description'           => __( 'Select pages for Work section, you can also change the icon per page', 'ithemer' ),
    'panel'				=> 'ithemer_front_option'
) );

//work section enable disable

$wp_customize->add_setting( 'ithemer_work_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_work_section_enable', array(
    'label'                 =>  __( 'Enable Work Us', 'ithemer' ),
    'section'               => 'ithemer_work_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_work_section_enable',
) );

//work Title
$wp_customize->add_setting( 'ithemer_work_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_work_page_title', array(
    'label'                 =>  __( 'Select Page for Work Title', 'ithemer' ),
    'section'               => 'ithemer_work_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'ithemer_work_page_title',
) );

$wp_customize->add_setting( 'ithemer_work_icon_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_work_icon_title', array(
    'label'                 =>  __( 'Icon For Work title', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon for eg fa fa-question', 'ithemer' ),
    'section'               => 'ithemer_work_section',
    'type'                  => 'text',
    'priority'              => 30,
    'settings' => 'ithemer_work_icon_title',
) );

$wp_customize->add_setting('ithemer_work_category_id',array(
	                        'sanitize_callback' => 'ithemer_sanitize_category',
	                        'default' =>  '1',
	                           )
	                       );
	
$wp_customize->add_control(new Ithemer_Customize_Dropdown_Taxonomies_Control($wp_customize,'ithemer_work_category_id',
                                                                                    
                array(
	                       'label' => __('Select Category for Portolio','ithemer'),
	                        'section' => 'ithemer_work_section',
	                        'settings' => 'ithemer_work_category_id',
	                        'type'=> 'dropdown-taxonomies',
                            'priority'              => 40,
	                )
	        ));


//Counter


$wp_customize->add_section( 'ithemer_counter_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 40,
    'title'                 => __( 'Front Counter Section', 'ithemer' ),
    'description'           => __( 'Fill the Value for Counter Section', 'ithemer' ),
    'panel'				=> 'ithemer_front_option'
) );

//work section enable disable

$wp_customize->add_setting( 'ithemer_counter_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_counter_section_enable', array(
    'label'                 =>  __( 'Enable Counter Section', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_counter_section_enable',
) );

//Counters

$wp_customize->add_setting( 'ithemer_counter_icon_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_icon_1', array(
    'label'                 =>  __( 'Counter Icon 1', 'ithemer' ),
    'description'           =>  __( 'Input the Counter Icon From fontawesome eg fa fa-user', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings' => 'ithemer_counter_icon_1',
) );

$wp_customize->add_setting( 'ithemer_counter_count_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_count_1', array(
    'label'                 =>  __( 'Counter count 1', 'ithemer' ),
    'description'           =>  __( 'Input the Number', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings' => 'ithemer_counter_count_1',
) );

$wp_customize->add_setting( 'ithemer_counter_field_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_field_1', array(
    'label'                 =>  __( 'Counter Field 1', 'ithemer' ),
    'description'           =>  __( 'Input Value', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 30,
    'settings' => 'ithemer_counter_field_1',
) );

$wp_customize->add_setting( 'ithemer_counter_icon_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_icon_2', array(
    'label'                 =>  __( 'Counter Icon 2', 'ithemer' ),
    'description'           =>  __( 'Input the Counter Icon From fontawesome', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 40,
    'settings' => 'ithemer_counter_icon_2',
) );

$wp_customize->add_setting( 'ithemer_counter_count_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_count_2', array(
    'label'                 =>  __( 'Counter count 2', 'ithemer' ),
    'description'           =>  __( 'Input the Number', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 50,
    'settings' => 'ithemer_counter_count_2',
) );

$wp_customize->add_setting( 'ithemer_counter_field_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_field_2', array(
    'label'                 =>  __( 'Counter Field 2', 'ithemer' ),
    'description'           =>  __( 'Input Value', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 60,
    'settings' => 'ithemer_counter_field_2',
) );

$wp_customize->add_setting( 'ithemer_counter_icon_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_icon_3', array(
    'label'                 =>  __( 'Counter Icon 3', 'ithemer' ),
    'description'           =>  __( 'Input the Counter Icon From fontawesome', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 70,
    'settings' => 'ithemer_counter_icon_3',
) );

$wp_customize->add_setting( 'ithemer_counter_count_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_count_3', array(
    'label'                 =>  __( 'Counter count 3', 'ithemer' ),
    'description'           =>  __( 'Input the Number', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 80,
    'settings' => 'ithemer_counter_count_3',
) );

$wp_customize->add_setting( 'ithemer_counter_field_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_field_3', array(
    'label'                 =>  __( 'Counter Field 3', 'ithemer' ),
    'description'           =>  __( 'Input Value', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 90,
    'settings' => 'ithemer_counter_field_3',
) );

$wp_customize->add_setting( 'ithemer_counter_icon_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_icon_4', array(
    'label'                 =>  __( 'Counter Icon 4', 'ithemer' ),
    'description'           =>  __( 'Input the Counter Icon From fontawesome', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 100,
    'settings' => 'ithemer_counter_icon_4',
) );

$wp_customize->add_setting( 'ithemer_counter_count_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_count_4', array(
    'label'                 =>  __( 'Counter count 4', 'ithemer' ),
    'description'           =>  __( 'Input the Number', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 110,
    'settings' => 'ithemer_counter_count_4',
) );

$wp_customize->add_setting( 'ithemer_counter_field_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_counter_field_4', array(
    'label'                 =>  __( 'Counter Field 4', 'ithemer' ),
    'description'           =>  __( 'Input Value', 'ithemer' ),
    'section'               => 'ithemer_counter_section',
    'type'                  => 'text',
    'priority'              => 120,
    'settings' => 'ithemer_counter_field_4',
) );

//Education & Experience 
$wp_customize->add_section( 'ithemer_exp_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 50,
    'title'                 => __( 'Front Experience Section', 'ithemer' ),
    'description'           => __( 'Select pages for Experience section, you can also change the icon per page', 'ithemer' ),
    'panel'             => 'ithemer_front_option'
) );

//Eudcation section enable disable

$wp_customize->add_setting( 'ithemer_exp_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_exp_section_enable', array(
    'label'                 =>  __( 'Enable Experience Us', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_exp_section_enable',
) );

//service Title
$wp_customize->add_setting( 'ithemer_exp_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_exp_page_title', array(
    'label'                 =>  __( 'Select Page for Experience Title', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 10,
    'settings'              => 'ithemer_exp_page_title',
) );

$wp_customize->add_setting( 'ithemer_exp_icon_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_exp_icon_title', array(
    'label'                 =>  __( 'Icon For Experience title', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon for Title', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings' => 'ithemer_exp_icon_title',
) );
// service Us page 1 and Icon 1

$wp_customize->add_setting( 'ithemer_exp_page_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_exp_page_1', array(
    'label'                 =>  __( 'Select First Page for Experience Section', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 30,
    'settings'              => 'ithemer_exp_page_1',
) );

$wp_customize->add_setting( 'ithemer_exp_date_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_exp_date_1', array(
    'label'                 =>  __( 'Date For Experience 1', 'ithemer' ),
    'description'           => __( 'Date like 1986', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'text',
    'priority'              => 40,
    'settings' => 'ithemer_exp_date_1',
) );

//service us Second 
$wp_customize->add_setting( 'ithemer_exp_page_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_exp_page_2', array(
    'label'                 =>  __( 'Select Second Page for Experience Section', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 50,
    'settings'              => 'ithemer_exp_page_2',
) );

$wp_customize->add_setting( 'ithemer_exp_date_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_exp_icon_2', array(
    'label'                 =>  __( 'Date For Experience 2', 'ithemer' ),
    'description'           =>  __( 'Date or Year for Experience 2', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'text',
    'priority'              => 60,
    'settings' => 'ithemer_exp_date_2',
) );

//service us Third 
$wp_customize->add_setting( 'ithemer_exp_page_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_exp_page_3', array(
    'label'                 =>  __( 'Select Third Page for Experience Section', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 70,
    'settings'              => 'ithemer_exp_page_3',
) );

$wp_customize->add_setting( 'ithemer_exp_date_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_exp_date_3', array(
    'label'                 =>  __( 'Date For Experience 3', 'ithemer' ),
    'description'           =>  __( 'Date or Year 3', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'text',
    'priority'              => 80,
    'settings' => 'ithemer_exp_date_3',
) );

//service us Forth
$wp_customize->add_setting( 'ithemer_exp_page_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_exp_page_4', array(
    'label'                 =>  __( 'Select Fourth Page for Experience Section', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 80,
    'settings'              => 'ithemer_exp_page_4',
) );

$wp_customize->add_setting( 'ithemer_exp_date_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_exp_date_4', array(
    'label'                 =>  __( 'Date For Experience 4', 'ithemer' ),
    'description'           =>  __( 'Date of Experience 4', 'ithemer' ),
    'section'               => 'ithemer_exp_section',
    'type'                  => 'text',
    'priority'              => 90,
    'settings' => 'ithemer_exp_date_4',
) );


//Testimonial Section 

$wp_customize->add_section( 'ithemer_testimonial_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 60,
    'title'                 => __( 'Front Testimonial Section', 'ithemer' ),
    'description'           => __( 'Select pages for Testimonial section, you can also change the icon per page', 'ithemer' ),
    'panel'             => 'ithemer_front_option'
) );

//Testimonial section enable disable

$wp_customize->add_setting( 'ithemer_testimonial_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_testimonial_section_enable', array(
    'label'                 =>  __( 'Enable Testimonial Us', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_testimonial_section_enable',
) );

//Testimonial Title
$wp_customize->add_setting( 'ithemer_testimonial_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_testimonial_page_title', array(
    'label'                 =>  __( 'Select Page for Testimonial Title', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 10,
    'settings'              => 'ithemer_testimonial_page_title',
) );

$wp_customize->add_setting( 'ithemer_testimonial_icon_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_testimonial_icon_title', array(
    'label'                 =>  __( 'Icon For Testimonial title', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon for Title', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings' => 'ithemer_testimonial_icon_title',
) );
// Testimonial Us page 1 and Icon 1

$wp_customize->add_setting( 'ithemer_testimonial_page_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_testimonial_page_1', array(
    'label'                 =>  __( 'Select First Page for Testimonial Section', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 30,
    'settings'              => 'ithemer_testimonial_page_1',
) );

$wp_customize->add_setting( 'ithemer_testimonial_position_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_testimonial_position_1', array(
    'label'                 =>  __( 'Postion for  Testimonial 1', 'ithemer' ),
    'description'           =>  __( 'Position like Developer, CEO MD', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'text',
    'priority'              => 40,
    'settings' => 'ithemer_testimonial_position_1',
) );

//Testimonial us Second 
$wp_customize->add_setting( 'ithemer_testimonial_page_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_testimonial_page_2', array(
    'label'                 =>  __( 'Select Second Page for Testimonial Section', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 50,
    'settings'              => 'ithemer_testimonial_page_2',
) );

$wp_customize->add_setting( 'ithemer_testimonial_position_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_testimonial_position_2', array(
   'label'                 =>  __( 'Postion for  Testimonial 2', 'ithemer' ),
    'description'           =>  __( 'Position like Developer, CEO MD', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'text',
    'priority'              => 60,
    'settings' => 'ithemer_testimonial_position_2',
) );

//Testimonial us Third 
$wp_customize->add_setting( 'ithemer_testimonial_page_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_testimonial_page_3', array(
    'label'                 =>  __( 'Select Third Page for Testimonial Section', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 70,
    'settings'              => 'ithemer_testimonial_page_3',
) );

$wp_customize->add_setting( 'ithemer_testimonial_position_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_testimonial_position_3', array(
    'label'                 =>  __( 'Postion for  Testimonial 3', 'ithemer' ),
    'description'           =>  __( 'Position like Developer, CEO MD', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'text',
    'priority'              => 80,
    'settings' => 'ithemer_testimonial_position_3',
) );

//Testimonial us Forth
$wp_customize->add_setting( 'ithemer_testimonial_page_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_testimonial_page_4', array(
    'label'                 =>  __( 'Select Fourth Page for Testimonial Section', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 80,
    'settings'              => 'ithemer_testimonial_page_4',
) );

$wp_customize->add_setting( 'ithemer_testimonial_position_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_testimonial_position_4', array(
    'label'                 =>  __( 'Postion for  Testimonial 4', 'ithemer' ),
    'description'           =>  __( 'Position like Developer, CEO MD', 'ithemer' ),
    'section'               => 'ithemer_testimonial_section',
    'type'                  => 'text',
    'priority'              => 90,
    'settings' => 'ithemer_testimonial_position_4',
) );

 //Blog Section 

$wp_customize->add_section( 'ithemer_blog_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 70,
    'title'                 => __( 'Front Blog Section', 'ithemer' ),
    'description'           => __( 'Select pages for Blog section, you can also change the icon per page', 'ithemer' ),
    'panel'             => 'ithemer_front_option'
) );

//work section enable disable

$wp_customize->add_setting( 'ithemer_blog_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_blog_section_enable', array(
    'label'                 =>  __( 'Enable Blog Us', 'ithemer' ),
    'section'               => 'ithemer_blog_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_blog_section_enable',
) );

//work Title
$wp_customize->add_setting( 'ithemer_blog_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_blog_page_title', array(
    'label'                 =>  __( 'Select Page for Blog Title', 'ithemer' ),
    'section'               => 'ithemer_blog_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'ithemer_blog_page_title',
) );

$wp_customize->add_setting( 'ithemer_blog_icon_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => 'fa-question',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_blog_icon_title', array(
    'label'                 =>  __( 'Icon For Blog title', 'ithemer' ),
    'description'           =>  __( 'Font awesome Icon for Title', 'ithemer' ),
    'section'               => 'ithemer_blog_section',
    'type'                  => 'text',
    'priority'              => 30,
    'settings' => 'ithemer_blog_icon_title',
) );
$wp_customize->add_setting('ithemer_blog_category_id',array(
                            'sanitize_callback' => 'ithemer_sanitize_category',
                            'default' =>  '1',
                               )
                           );
    
$wp_customize->add_control(new Ithemer_Customize_Dropdown_Taxonomies_Control($wp_customize,'ithemer_blog_category_id',
                                                                                    
                array(
                           'label' => __('Select Category for Blog','ithemer'),
                            'section' => 'ithemer_blog_section',
                            'settings' => 'ithemer_blog_category_id',
                            'type'=> 'dropdown-taxonomies',
                            'priority'              => 40,
                    )
            ));

//Call to action

$wp_customize->add_section( 'ithemer_callto_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 80,
    'title'                 => __( 'Front Call To Action Section', 'ithemer' ),
    'description'           => __( 'Select pages for Call to section, you can also change the icon per page', 'ithemer' ),
    'panel'             => 'ithemer_front_option'
) );

//call to  section enable disable

$wp_customize->add_setting( 'ithemer_callto_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_callto_section_enable', array(
    'label'                 =>  __( 'Enable Call to Action', 'ithemer' ),
    'section'               => 'ithemer_callto_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_callto_section_enable',
) );

// Call to action

$wp_customize->add_setting( 'ithemer_callto_page_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_callto_page_1', array(
    'label'                 =>  __( 'Select Page for Call to Section', 'ithemer' ),
    'section'               => 'ithemer_callto_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'ithemer_callto_page_1',
) );

$wp_customize->add_setting('ithemer_callto_button_text_1',array(
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '',
        )
    );

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'ithemer_callto_button_text_1',array(
            'label' => __('Call to Action button Text','ithemer'),
            'type' => 'text',
            'priority' => 30,
            'section' => 'ithemer_callto_section',
            'settings' => 'ithemer_callto_button_text_1',
        )
    ));
 $wp_customize->add_setting('ithemer_callto_button_url_1',array(
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'ithemer_sanitize_url',
            'default' =>'',
        )
    );

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'ithemer_callto_button_url_1',array(
            'label' => __('Call to Action Button URL','ithemer'),
            'type' => 'text',
            'priority'  => 40,
            'section' => 'ithemer_callto_section',
            'settings' => 'ithemer_callto_button_url_1',
        )
    ));

//Contact to action

$wp_customize->add_section( 'ithemer_contact_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 90,
    'title'                 => __( 'Front Contact Section', 'ithemer' ),
    'description'           => __( 'This Section is also control by widget , go to Widget Contact Left and Contact Right', 'ithemer' ),
    'panel'             => 'ithemer_front_option'
) );

//Contact section enable disable

$wp_customize->add_setting( 'ithemer_contact_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_contact_section_enable', array(
    'label'                 =>  __( 'Enable Contact Section', 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_contact_section_enable',
) );

// Contact Page Title and Description

$wp_customize->add_setting( 'ithemer_contact_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'ithemer_contact_page_title', array(
    'label'                 =>  __( 'Select First Page for Call to Section', 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'ithemer_contact_page_title',
) );

$wp_customize->add_setting( 'ithemer_contact_icon_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_icon_title', array(
    'label'                 =>  __( 'Contact Icon', 'ithemer' ),
    'description'           =>  __( 'Input the Counter Icon From fontawesome eg fa fa-envelope', 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 40,
    'settings' => 'ithemer_contact_icon_title',
) );

$wp_customize->add_setting( 'ithemer_contact_form_code', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_form_code', array(
    'label'                 =>  __( 'Left Contact Section Use Shortcode', 'ithemer' ),
    'description'           =>  __( 'eg [contact-form-7 id="108" title="Contact form 1"]', 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 50,
    'settings' => 'ithemer_contact_form_code',
) );

$wp_customize->add_setting( 'ithemer_contact_phone_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_phone_title', array(
    'label'                 =>  __( 'My Phone Title ', 'ithemer' ),
    'description'           =>  __( 'eg Contact Number ,Cell Etc' , 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 60,
    'settings' => 'ithemer_contact_phone_title',
) );

$wp_customize->add_setting( 'ithemer_contact_phone_numbers', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_phone_numbers', array(
    'label'                 =>  __( 'Phone Numbers ', 'ithemer' ),
    'description'           =>  __( 'Phone Numbers ' , 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 70,
    'settings' => 'ithemer_contact_phone_numbers',
) );

$wp_customize->add_setting( 'ithemer_contact_email_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_email_title', array(
    'label'                 =>  __( 'My Email Title ', 'ithemer' ),
    'description'           =>  __( 'eg Our Email Address' , 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 80,
    'settings' => 'ithemer_contact_email_title',
) );

$wp_customize->add_setting( 'ithemer_contact_email_address', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_email_address', array(
    'label'                 =>  __( 'Email Addresss ', 'ithemer' ),
    'description'           =>  __( 'Email Addresss  ' , 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 90,
    'settings' => 'ithemer_contact_email_address',
) );
$wp_customize->add_setting( 'ithemer_contact_location_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_location_title', array(
    'label'                 =>  __( 'My Location Title ', 'ithemer' ),
    'description'           =>  __( 'eg Our Address' , 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 100,
    'settings' => 'ithemer_contact_location_title',
) );

$wp_customize->add_setting( 'ithemer_contact_location_address', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'ithemer_contact_location_address', array(
    'label'                 =>  __( 'Location Addresss ', 'ithemer' ),
    'description'           =>  __( 'eg Newyork, USA' , 'ithemer' ),
    'section'               => 'ithemer_contact_section',
    'type'                  => 'text',
    'priority'              => 100,
    'settings' => 'ithemer_contact_location_address',
) );



//Blog Section 

$wp_customize->add_section( 'ithemer_clients_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 100,
    'title'                 => __( 'Front Client Section', 'ithemer' ),
    'description'           => __( 'Select Category for Client Section', 'ithemer' ),
    'panel'             => 'ithemer_front_option'
) );

//work section enable disable

$wp_customize->add_setting( 'ithemer_clients_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'ithemer_clients_section_enable', array(
    'label'                 =>  __( 'Enable Client Section', 'ithemer' ),
    'section'               => 'ithemer_clients_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'ithemer_clients_section_enable',
) );

$wp_customize->add_setting('ithemer_clients_category_id',array(
                            'capability'        => 'edit_theme_options',
                            'sanitize_callback' => 'ithemer_sanitize_category',
                            'default' =>  '1',
                               )
                           );
    
$wp_customize->add_control(new Ithemer_Customize_Dropdown_Taxonomies_Control($wp_customize,'ithemer_clients_category_id',
                                                                                    
                array(
                           'label' => __('Select Category for Clients','ithemer'),
                            'section' => 'ithemer_clients_section',
                            'settings' => 'ithemer_clients_category_id',
                            'type'=> 'dropdown-taxonomies',
                            'priority'              => 40,
                    )
            ));



