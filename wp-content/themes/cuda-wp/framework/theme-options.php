<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: https://docs.reduxframework.com
     * */

    if ( ! class_exists( 'Cuda_FrameWord_Redux' ) ) {

        class Cuda_FrameWord_Redux {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Just for demo purposes. Not needed per say.
                $this->theme = wp_get_theme();

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            /**
             * This is a test function that will let you see when the compiler hook occurs.
             * It only runs if a field    set with compiler=>true is changed.
             * */


            /**
             * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
             * Simply include this function in the child themes functions.php file.
             * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
             * so you must use get_template_directory_uri() if you want to use any of the built in icons
             * */
            function dynamic_section( $sections ) {
                //$sections = array();
                $sections[] = array(
                    'title'  => __( 'Section via hook', 'cuda' ),
                    'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'cuda' ),
                    'icon'   => 'el-icon-paper-clip',
                    // Leave this as a blank section, no options just some intro text set above.
                    'fields' => array()
                    );

                return $sections;
            }

            /**
             * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
             * */
            function change_arguments( $args ) {
                //$args['dev_mode'] = true;

                return $args;
            }

            /**
             * Filter hook for filtering the default value of any given field. Very useful in development mode.
             * */
            function change_defaults( $defaults ) {
                $defaults['str_replace'] = 'Testing filter hook!';

                return $defaults;
            }

            // Remove the demo link and the notice of integrated demo from the redux-framework plugin
            function remove_demo() {

                // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
                if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                    remove_filter( 'plugin_row_meta', array(
                        ReduxFrameworkPlugin::instance(),
                        'plugin_metalinks'
                        ), null, 2 );

                    // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                    remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
                }
            }

            public function setSections() {


                ob_start();

                $ct          = wp_get_theme();
                $this->theme = $ct;
                $item_name   = $this->theme->get( 'Name' );
                $tags        = $this->theme->Tags;
                $screenshot  = $this->theme->get_screenshot();
                $class       = $screenshot ? 'has-screenshot' : '';

                $customize_title = sprintf( __( 'Customize &#8220;%s&#8221;', 'cuda' ), $this->theme->display( 'Name' ) );

                ?>
                <div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
                    <?php if ( $screenshot ) : ?>
                        <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                            <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize"
                             title="<?php echo esc_attr( $customize_title ); ?>">
                             <img src="<?php echo esc_url( $screenshot ); ?>"
                             alt="<?php esc_attr_e( 'Current theme preview', 'cuda' ); ?>"/>
                         </a>
                     <?php endif; ?>
                     <img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>"
                     alt="<?php esc_attr_e( 'Current theme preview', 'cuda' ); ?>"/>
                 <?php endif; ?>

                 <h4><?php echo $this->theme->display( 'Name' ); ?></h4>

                 <div>
                    <ul class="theme-info">
                        <li><?php printf( __( 'By %s', 'cuda' ), $this->theme->display( 'Author' ) ); ?></li>
                        <li><?php printf( __( 'Version %s', 'cuda' ), $this->theme->display( 'Version' ) ); ?></li>
                        <li><?php echo '<strong>' . __( 'Tags', 'cuda' ) . ':</strong> '; ?><?php printf( $this->theme->display( 'Tags' ) ); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo $this->theme->display( 'Description' ); ?></p>
                    <?php
                    if ( $this->theme->parent() ) {
                        printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'cuda' ) . '</p>', __( 'http://codex.wordpress.org/Child_Themes', 'cuda' ), $this->theme->parent()->display( 'Name' ) );
                    }
                    ?>

                </div>
            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();

            $sampleHTML = '';
            if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
                Redux_Functions::initWpFilesystem();

                global $wp_filesystem;

                $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
            }

            // ACTUAL DECLARATION OF SECTIONS
            $this->sections[] = array(
                'title'  => __( 'Global Settings', 'cuda' ),
                'icon'   => 'el-icon-globe',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields' => array(

                   array(
                    'id'       => 'cuda_logo_on_off',
                    'type'     => 'switch',
                    'title'    => __( 'Logo Section', 'cuda' ),
                    'subtitle' => __( 'Upload your logo', 'cuda' ),
                    'default'  => 1,
                    'on'       => 'ON',
                    'off'      => 'OFF',
                    ),

                   array(
                    'id'       => 'cuda_logo',
                    'type'     => 'media',
                    'url'      => true,
                    'indent'   => false, // Indent all options below until the next 'section' option is set.
                    'required' => array( 'cuda_logo_on_off', "=", 1 ),
                    'default'  => array( 'url' => CUDA_IMG .'logo.png' ),
                    ),

                   array(
                    'id' => 'cuda_favicon_icon',
                    'type' => 'media',
                    'title' => __('Favicon Icon', 'cuda'),
                    'default' => array("url" => get_template_directory_uri() . "/favicon.png"),
                    'preview' => true,
                    "url" => true
                    ),

                   array(
                    'id' => 'admin_logo',
                    'type' => 'media',
                    'title' => __('Admin Logo', 'cuda'),
                    'default' => array("url" => get_template_directory_uri() . "/images/logo.png"),
                    'preview' => true,
                    "url" => true
                    ),

                   array(
                    'id' => 'cuda_main_body_fonts',
                    'type' => 'typography',
                    'title' => __('Google Font', 'cuda'),
                    'google'      => true,
                    'color' => false,
                    'word-spacing'=>false,
                    'text-align'=>false,
                    'update-weekly'=>false,
                    'line-height'=>false,
                    'subsets'=>false,
                    'letter-spacing'=>false,
                    'font-style'=>false,
                    'font-backup' => false,
                    'font-size'=>false,
                    'font-weight'=>true,
                    'output'      => array('body'),
                    'units'       =>'px',
                    'default'     => array(
                        'font-family' => 'Titillium Web',
                        'google'      => true,
                        ),
                    ),

                   )
        ); //global

$this->sections[] = array(
    'title'  => __( 'Slider Settings', 'cuda' ),
    'icon'   => 'el-icon-slideshare',
    'fields' => array(

       array(
        'id' => 'section_slider_display',
        'type' => 'switch',
        'title' => __('Display Slider Section', 'cuda'),
        'default' => '0',
        'on'       => 'ON',
        'off'      => 'OFF',
        ),
       array(
        'id'       => 'cuda_slider_section_bg',
        'type'     => 'background',
        'output'   => array( '#ccr-slider' ),
        'title'    => __( 'Slider Background', 'cuda' ),
        'subtitle' => __( 'Slider background with image, color, etc.', 'cuda' ),
        'default'   => array(
            'background-color' => '#87509c'),
        'required' => array('section_slider_display', '=', '0')
        ),

       array(
        'id' => 'cuda_slider_off_text',
        'type' => 'editor',
        'title' => __('Description', 'cuda'),
        'description' => 'Write the slider slug. You can write html code also',
        'default'   => "<h1>HI THERE! WE ARE THE NEW KIDS ON THE BLOCK AND WE BUILD AWESOME WEBSITES AND MOBILE APPS.</h1>",
        'required' => array('section_slider_display', '=', '0')
        ),

       array(
        'id' => 'cuda_slider_off_link_text',
        'type' => 'text',
        'title' => __('Work with US Title', 'cuda'),
        'description' => 'Write the link',
        'default'   => "Work with US",
        'required' => array('section_slider_display', '=', '0')
        ),

       array(
        'id' => 'cuda_slider_off_link',
        'type' => 'text',
        'title' => __('Work with US Link', 'cuda'),
        'description' => 'Write the link',
        'default'   => "",
        'required' => array('section_slider_display', '=', '0')
        ),

       array(
        'id'          => 'cuda-slides',
        'type'        => 'slides',
        'title'       => __( 'Slides Options', 'cuda' ),
        'subtitle'    => __( 'Unlimited slides with drag and drop sortings. Please use same size of image', 'cuda' ),
        // 'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'cuda' ),
        'placeholder' => array(
            'title'       => __( 'Slider No.', 'cuda' ),
            'description' => __( 'Description Here', 'cuda' ),
            'url'         => __( 'Button link', 'cuda' ),
            ),
        'required' => array('section_slider_display', '=', '1')
        ),


       )
);

/*==========  service section  ==========*/

$this->sections[] = array(
    'icon'   => 'el-icon-bullhorn',
    'title'  => __( 'Service Settings', 'cuda' ),
    'fields' => array(
       array(
        'id'       => 'opt-color-service',
        'type'     => 'background',
        'output'   => array('.ccr-service-bg'),
        'title'    => __( 'Service Section Background Color', 'cuda' ),
        'subtitle' => __( 'Pick a background color (default: #17c2a4).', 'cuda' ),
        'default'  => '#17c2a4',
        'validate' => 'color',
        ),
       array(
        'id' => 'cuda_service_menu',
        'type' => 'text',
        'title' => __('Service menu ', 'cuda'),
        'description' => 'Write the title, it will display in menubar *',
        'default'   => "Service"
        ),
       array(
        'id' => 'cuda_service_title',
        'type' => 'text',
        'title' => __('Service Section Title ', 'cuda'),
        'description' => 'Write the title, it will display in service section *',
        'default'   => "SERVICES WE PROVIDE"
        ),
       array(
        'id' => 'cuda_service_des',
        'type' => 'editor',
        'title' => __('Service Section Description ', 'cuda'),
        'description' => 'Write the Description, it will display in service section *',
        'default'   => "We are working with both individuals and businesses from all over the globe 
        to create awesome websites and applications."
        ),
       array(
        'id'     => 'opt-info-normal',
        'type'   => 'info',
        'notice' => true,
        'title'  => __( 'Add Your Service <a href="'.home_url().'/wp-admin/post-new.php?post_type=service">Click here</a>', 'cuda' ),
        'desc'   => __( '', 'cuda' )
        ),


       )
);

/*==========  team section  ==========*/

$this->sections[] = array(
    'icon'   => 'el-icon-myspace',
    'title'  => __( 'Team Settings', 'cuda' ),
    'fields' => array(
        array(
            'id'       => 'opt-color-team',
            'type'     => 'background',
            'output'   => array('.ccr-team-bg'),
            'title'    => __( 'Team Section Background Color', 'cuda' ),
            'subtitle' => __( 'Pick a background color (default: #17c2a4).', 'cuda' ),
            'default'  => '#17c2a4',
            'validate' => 'color',
            ),
        array(
            'id' => 'cuda_team_menu',
            'type' => 'text',
            'title' => __('Team menu ', 'cuda'),
            'description' => 'Write the title, it will display in menubar *',
            'default'   => "Team"
            ),
        array(
            'id' => 'cuda_team_title',
            'type' => 'text',
            'title' => __('Team Section Title ', 'cuda'),
            'description' => 'Write the title, it will display in team section *',
            'default'   => "MEET OUR BEAUTIFUL TEAM"
            ),
        array(
            'id' => 'cuda_team_des',
            'type' => 'editor',
            'title' => __('Team Section Description ', 'cuda'),
            'description' => 'Write the Description, it will display in team section *',
            'default'   => "We are a small team of designers and developers, who help brands with big ideas."
            ),
        array(
            'id'     => 'opt-info-normal',
            'type'   => 'info',
            'notice' => true,
            'title'  => __( 'Add Your team member<a href="'.home_url().'/wp-admin/post-new.php?post_type=team">Click here</a>', 'cuda' ),
            'desc'   => __( '', 'cuda' )
            ),


        )
);

/*==========  skill section  ==========*/

$this->sections[] = array(
    'icon'   => 'el-icon-fire',
    'title'  => __( 'Skill Settings', 'cuda' ),
    'fields' => array(
        array(
            'id'       => 'opt-color-skill',
            'type'     => 'background',
            'output'   => array('.ccr-skill-bg'),
            'title'    => __( 'Skill Section Background Color', 'cuda' ),
            'subtitle' => __( 'Pick a background color (default: #fff).', 'cuda' ),
            'default'  => '#fff',
            'validate' => 'color',
            ),
        array(
            'id' => 'cuda_skill_menu',
            'type' => 'text',
            'title' => __('Skill menu ', 'cuda'),
            'description' => 'Write the title, it will display in menubar *',
            'default'   => "Skill"
            ),
        array(
            'id' => 'cuda_skill_title',
            'type' => 'text',
            'title' => __('Skill Section Title ', 'cuda'),
            'description' => 'Write the title, it will display in skill section *',
            'default'   => "WE GOT SKILLS"
            ),
        array(
            'id' => 'cuda_skill_des',
            'type' => 'editor',
            'title' => __('skill Section Description ', 'cuda'),
            'description' => 'Write the Description, it will display in skill section *',
            'default'   => "We provide best. Our developers are highly skilled"
            ),

        array(
            'id'        => 'cuda_skill_one',
            'type'      => 'slider',
            'title'     => __('Skill One', 'cuda'),
            'subtitle'  => __('This slider displays the value as a label.', 'cuda'),
            'desc'      => __('', 'cuda'),
            "default"   => 90,
            "min"       => 1,
            "step"      => 1,
            "max"       => 100,
            'display_value' => 'label'
            ),
        array(
            'id' => 'cuda_skill_one_title',
            'type' => 'text',
            'title' => __('skill one title ', 'cuda'),
            'description' => '',
            'default'   => "PHP Expert"
            ),
        array(
            'id'        => 'cuda_skill_two',
            'type'      => 'slider',
            'title'     => __('Skill two', 'cuda'),
            'subtitle'  => __('This slider displays the value as a label.', 'cuda'),
            'desc'      => __('', 'cuda'),
            "default"   => 61,
            "min"       => 1,
            "step"      => 1,
            "max"       => 100,
            'display_value' => 'label'
            ),
        array(
            'id' => 'cuda_skill_two_title',
            'type' => 'text',
            'title' => __('skill two title ', 'cuda'),
            'description' => '',
            'default'   => "HTML Expert"
            ),

        array(
            'id'        => 'cuda_skill_three',
            'type'      => 'slider',
            'title'     => __('Skill three', 'cuda'),
            'subtitle'  => __('This slider displays the value as a label.', 'cuda'),
            'desc'      => __('', 'cuda'),
            "default"   => 75,
            "min"       => 1,
            "step"      => 1,
            "max"       => 100,
            'display_value' => 'label'
            ),
        array(
            'id' => 'cuda_skill_three_title',
            'type' => 'text',
            'title' => __('skill three title ', 'cuda'),
            'description' => '',
            'default'   => "WordPress Expert"
            ),
        array(
            'id'        => 'cuda_skill_four',
            'type'      => 'slider',
            'title'     => __('Skill four', 'cuda'),
            'subtitle'  => __('This slider displays the value as a label.', 'cuda'),
            'desc'      => __('', 'cuda'),
            "default"   => 85,
            "min"       => 1,
            "step"      => 1,
            "max"       => 100,
            'display_value' => 'label'
            ),
        array(
            'id' => 'cuda_skill_four_title',
            'type' => 'text',
            'title' => __('skill four title ', 'cuda'),
            'description' => '',
            'default'   => "CSS3 Expert"
            ),



        )
);

/*==========  portfolio section  ==========*/

$this->sections[] = array(
    'icon'   => 'el-icon-filter',
    'title'  => __( 'Portfolio Settings', 'cuda' ),
    'fields' => array(
        array(
            'id'       => 'opt-color-portfolio',
            'type'     => 'background',
            'output'   => array('.ccr-portfolio-bg'),
            'title'    => __( 'Portfolio Section Background Color', 'cuda' ),
            'subtitle' => __( 'Pick a background color (default: #ffdd99).', 'cuda' ),
            'default'  => '#ffdd99',
            'validate' => 'color',
            ),
        array(
            'id' => 'cuda_portfolio_menu',
            'type' => 'text',
            'title' => __('Portfolio menu ', 'cuda'),
            'description' => 'Write the title, it will display in menubar *',
            'default'   => "Portfolio"
            ),
        array(
            'id' => 'cuda_portfolio_title',
            'type' => 'text',
            'title' => __('Portfolio Section Title ', 'cuda'),
            'description' => 'Write the title, it will display in portfolio section *',
            'default'   => "OUR PORTFOLIO"
            ),
        array(
            'id' => 'cuda_portfolio_des',
            'type' => 'editor',
            'title' => __('Portfolio Section Description ', 'cuda'),
            'description' => 'Write the Description, it will display in portfolio section *',
            'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, animi similique doloribus doloremque quibusdam quaerat
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, alias."
            ),

        )
);

/*==========  about section  ==========*/

$this->sections[] = array(
    'icon'   => 'el-icon-adult',
    'title'  => __( 'About Settings', 'cuda' ),
    'fields' => array(
     array(
        'id'       => 'opt-color-about',
        'type'     => 'background',
        'output'   => array('.ccr-about-us-bg'),
        'title'    => __( 'About Section Background Color', 'cuda' ),
        'subtitle' => __( 'Pick a background color (default: #d74680).', 'cuda' ),
        'default'  => '#d74680',
        'validate' => 'color',
        ),
     array(
        'id' => 'cuda_about_menu',
        'type' => 'text',
        'title' => __('About menu ', 'cuda'),
        'description' => 'Write the title, it will display in menubar *',
        'default'   => "About Us"
        ),
     array(
        'id' => 'cuda_about_title',
        'type' => 'text',
        'title' => __('About Section Title ', 'cuda'),
        'description' => 'Write the title, it will display in about section *',
        'default'   => "WHAT POEPLE SAY ABOUT US"
        ),
     array(
        'id' => 'cuda_about_des',
        'type' => 'editor',
        'title' => __('About Section Description ', 'cuda'),
        'description' => 'Write the Description, it will display in about section *',
        'default'   => "Our clients love us!"
        ),
     array(
        'id'     => 'opt-info-normal',
        'type'   => 'info',
        'notice' => true,
        'title'  => __( 'Add Your Testimonial <a href="'.home_url().'/wp-admin/post-new.php?post_type=testimonial">Click here</a>', 'cuda' ),
        'desc'   => __( '', 'cuda' )
        ),

     )
);


/*==========  contact section  ==========*/

$this->sections[] = array(
    'icon'   => 'el-icon-compass',
    'title'  => __( 'Contact Settings', 'cuda' ),
    'fields' => array(
     array(
        'id'       => 'opt-color-contact',
        'type'     => 'background',
        'output'   => array('.ccr-touch-bg'),
        'title'    => __( 'Contact Section Background Color', 'cuda' ),
        'subtitle' => __( 'Pick a background color (default: #3c5499).', 'cuda' ),
        'default'  => '#3c5499',
        'validate' => 'color',
        ),
     array(
        'id' => 'cuda_contact_menu',
        'type' => 'text',
        'title' => __('Contact menu ', 'cuda'),
        'description' => 'Write the title, it will display in menubar *',
        'default'   => "Contact"
        ),
     array(
        'id' => 'cuda_contact_title',
        'type' => 'text',
        'title' => __('Contact Section Title ', 'cuda'),
        'description' => 'Write the title, it will display in contact section *',
        'default'   => "GET IN TOUCH"
        ),
     array(
        'id' => 'cuda_contact_des',
        'type' => 'editor',
        'title' => __('Contact Section Description ', 'cuda'),
        'description' => 'Write the Description, it will display in contact section *',
        'default'   => "1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111"
        ),

     array(
        'id'     => 'opt-info-normal',
        'type'   => 'info',
        'notice' => true,
        'title'  => __( 'Add <a target="_blank" href="'.home_url().'/wp-admin/admin.php?page=wpcf7">Contact Form 7</a> Shortcode in <a target="_blank" href="'.home_url().'/wp-admin/widgets.php"><b>Get In touch Widget</b></a> ', 'cuda' ),
        'desc'   => __( '', 'cuda' )
        ),


     )
);

$this->sections[] = array(
    'icon'   => 'el-icon-group',
    'title'  => __( 'Social Settings', 'cuda' ),
    'fields' => array(
     array(
        'id'       => 'cuda_facebook',
        'type'     => 'text',
        'title'    => __( 'Facebook', 'cuda' ),
        'subtitle' => __( 'Please write your id', 'cuda' ),
        ),

     array(
        'id'       => 'cuda_twitter',
        'type'     => 'text',
        'title'    => __( 'Twitter', 'cuda' ),
        'subtitle' => __( 'Please write your id', 'cuda' ),
        ),

     array(
        'id'       => 'cuda_google_plus',
        'type'     => 'text',
        'title'    => __( 'Google Plus', 'cuda' ),
        'subtitle' => __( 'Please write your id', 'cuda' ),
        ),

     array(
        'id'       => 'cuda_linkedin',
        'type'     => 'text',
        'title'    => __( 'Linkedin', 'cuda' ),
        'subtitle' => __( 'Please write your id', 'cuda' ),
        ),
     array(
        'id'       => 'cuda_behance',
        'type'     => 'text',
        'title'    => __( 'Behance', 'cuda' ),
        'subtitle' => __( 'Please write your id', 'cuda' ),
        ),
     array(
        'id'       => 'cuda_dribbble',
        'type'     => 'text',
        'title'    => __( 'Dribbble', 'cuda' ),
        'subtitle' => __( 'Please write your id', 'cuda' ),
        ),


     )
);
/*==========  Advance settings  ==========*/

$this->sections[] = array(
    'icon'   => 'el-icon-cogs',
    'title'  => __( 'Advance Settings', 'cuda' ),
    'fields' => array(
     array(
        'id' => 'cuda_preloader',
        'type' => 'switch',
        'title' => __('Preloader On/Off', 'cuda'),
        'default' => '1',
        'on'       => 'ON',
        'off'      => 'OFF',
        ),
     array(
        'id' => 'cuda_blog_page',
        'type' => 'background',
        'output' => array('.ccr-headarea'),
        'transparent' => false,
        'background-repeat' => false,
        'background-attachment' => false,
        'background-image' => false,
        'background-size' => false,
        'background-position' => false,
        'title' => __('Blog Page Header Background', 'cuda'),
        'desc' =>  __('You can change blogpage header background', 'cuda'),
        'default' => array(
            'background-color' => '#87509c',
            )
        ),
     
      array(
        'id' => 'cuda_footer',
        'type' => 'background',
        'output' => array('.ccr-footer-bg'),
        'transparent' => false,
        'background-repeat' => false,
        'background-attachment' => false,
        'background-image' => false,
        'background-size' => false,
        'background-position' => false,
        'title' => __('Footer Background', 'cuda'),
        'desc' =>  __('You can change footer background color', 'cuda'),
        'default' => array(
            'background-color' => '#344b8e',
            )
        ),
     array(
        'id'       => 'cuda_menu_link_color',
        'type'     => 'link_color',
        'title'    => __( 'Link Color', 'cuda' ),
        'output'    => array('a'),
        'subtitle' => __( 'Only color validation can be done on this field type', 'cuda' ),
        'desc'     => __( 'This is the description field, again good for additional info.', 'cuda' ),
            // 'regular'   => true, // Disable Regular Color
            // 'hover'     => true, // Disable Hover Color
            // 'active'    => true, // Disable Active Color
        'default'  => array(
            'regular' => '#87509c',
            'hover'   => '#111',
            'active'  => '#ccc',
            )           

        ),



     array(
        'id'       => 'cuda_seciton_sorter',
        'type'     => 'sorter',
        'title'    => 'Section Sorting',
        'subtitle' => 'You can sort section and also enable or disabled',
        'compiler' => 'true',
        'options'  => array(
            'Enabled'  => array(
                'service'   => 'Service',
                'team'      => 'Team',
                'skill'     => 'Skill',
                'portfolio' => 'Portfolio',
                'about'     => 'About us', 
                'contact'   => 'Contact' 
                ),
            'Disabled' => array(),
            ),
        ),
     array(
        'id' => 'blog_excerpt_length',
        'type' => 'text',
        'title' => __('Excerpt Length', 'cuda'),
        'default' => 20
        ),
     array(
        'id' => 'cuda_custom_css',
        'type' => 'ace_editor',
        'title' => __('Custom CSS', 'cuda'),
        'description' => 'Write your custom CSS code inside &lt;style> &lt;/style> block'
        ),

     array(
        'id' => 'cuda_custom_ga',
        'type' => 'ace_editor',
        'title' => __('Google Analytics Code', 'cuda'),
        'description' => 'Write your custom google analytics code inside &lt;script> &lt;/script> block'

        ),
     )
);



$this->sections[] = array(
    'type' => 'divide',
    );

if ( file_exists( trailingslashit( dirname( __FILE__ ) ) . 'README.html' ) ) {
    $tabs['docs'] = array(
        'icon'    => 'el-icon-book',
        'title'   => __( 'Documentation', 'cuda' ),
        'content' => nl2br( file_get_contents( trailingslashit( dirname( __FILE__ ) ) . 'README.html' ) )
        );
}
}

public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
    $this->args['help_tabs'][] = array(
        'id'      => 'redux-help-tab-1',
        'title'   => __( 'Theme Information 1', 'cuda' ),
        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'cuda' )
        );

    $this->args['help_tabs'][] = array(
        'id'      => 'redux-help-tab-2',
        'title'   => __( 'Theme Information 2', 'cuda' ),
        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'cuda' )
        );

                // Set the help sidebar
    $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'cuda' );
}

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'             => 'cuda_opt',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'         => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'      => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'            => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'       => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'           => __( 'CUDA Options', 'cuda' ),
                    'page_title'           => __( 'CUDA Options', 'cuda' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'       => 'AIzaSyASx0fO5qLJxb3BXlZbec1CVVZomgPQ37s',
                    // Set it you want google fonts to update weekly. A google_api_key value is required.
                    'google_update_weekly' => false,
                    // Must be defined to add google fonts to the typography module
                    'async_typography'     => true,
                    // Use a asynchronous font on the front end or font string
                    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                    'admin_bar'            => true,
                    // Show the panel pages on the admin bar
                    'admin_bar_icon'     => 'dashicons-portfolio',
                    // Choose an icon for the admin bar menu
                    'admin_bar_priority' => 50,
                    // Choose an priority for the admin bar menu
                    'global_variable'      => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'             => false,
                    // Show the time the page took to load, etc
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'            => 'cuda_options',
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'         => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'         => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export'   => true,

                    );


}

}

global $reduxConfig;
$reduxConfig = new Cuda_FrameWord_Redux();
} 