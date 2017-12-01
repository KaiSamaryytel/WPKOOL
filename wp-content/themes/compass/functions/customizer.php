<?php
class Compass_Customizer {
    public static function Compass_Register($wp_customize) {
        self::Compass_Sections($wp_customize);
        self::Compass_Controls($wp_customize);
    }
    public static function Compass_Sections($wp_customize) {
        /**
         * General Section
         */
        $wp_customize->add_section('general_setting_section', array(
            'title' => __('General Settings', 'compass'),
            'description' => __('Allows you to customize header logo, favicon, background etc settings for compass Theme.', 'compass'), //Descriptive tooltip
            'panel' => '',
            'priority' => '10',
            'capability' => 'edit_theme_options'
            )
        );
        /**
         * Home Page Top Feature Area
         */
        $wp_customize->add_panel('slider_panel', array(
            'title' => __('Home Page Slider Section', 'compass'),
            'description' => __('Allows you to setup home page slider section for compass Theme.', 'compass'),
            'priority' => '11',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page slider area 1
         */
        $wp_customize->add_section('home_first_slider_section', array(
            'title' => __('First Slider Area', 'compass'),
            'description' => __('Allows you to setup first slider area section for compass Theme.', 'compass'),
            'panel' => 'slider_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page slider area 2
         */
        $wp_customize->add_section('home_second_slider_section', array(
            'title' => __('Second Slider Area', 'compass'),
            'description' => __('Allows you to setup second slider area section for compass Theme.', 'compass'),
            'panel' => 'slider_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Add panel for home page feature area
         */
        $wp_customize->add_panel('home_page_feature_area_panel', array(
            'title' => __('Home Page Feature Area', 'compass'),
            'description' => __('Allows you to setup home page feature area section for compass Theme.', 'compass'),
            'priority' => '12',
            'capability' => 'edit_theme_options'
        ));
        /**
         * Home Page feature area 1
         */
        $wp_customize->add_section('home_feature_area_section1', array(
            'title' => __('First Feature Area', 'compass'),
            'description' => __('Allows you to setup first feature area section for compass Theme.', 'compass'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page feature area 2
         */
        $wp_customize->add_section('home_feature_area_section2', array(
            'title' => __('Second Feature Area', 'compass'),
            'description' => __('Allows you to setup second feature area section for compass Theme.', 'compass'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page feature area 3
         */
        $wp_customize->add_section('home_feature_area_section3', array(
            'title' => __('Third Feature Area', 'compass'),
            'description' => __('Allows you to setup third feature area section for compass Theme.', 'compass'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Social Icon Section
         */
        $wp_customize->add_section('social_icon_section', array(
            'title' => __('Social Icons', 'compass'),
            'description' => __('Allows you to setup social site link for Compass Theme.', 'compass'),
            'panel' => '',
            'priority' => '13',
            'capability' => 'edit_theme_options'
            )
        );
   }
    public static function Compass_Section_Content() {
        $section_content = array(
            'general_setting_section' => array(
                'compass_logo',
                'compass_favicon'
            ),
            'home_first_slider_section' => array(
                'compass_slideimage1',
                'compass_sliderheading1',
                'compass_Sliderlink1',
                'compass_sliderdes1',
            ),
            'home_second_slider_section' => array(
                'compass_slideimage2',
                'compass_sliderheading2',
                'compass_Sliderlink2',
                'compass_sliderdes2'
            ),
            'home_feature_area_section1' => array(
                'compass_font_icon1',
                'compass_fimg1',
                'compass_feature_head1',
                'compass_feature_link1',
                'compass_feature_desc1'
            ),
            'home_feature_area_section2' => array(
                'compass_font_icon2',
                'compass_fimg2',
                'compass_feature_head2',
                'compass_feature_link2',
                'compass_feature_desc2'
            ),
            'home_feature_area_section3' => array(
                'compass_font_icon3',
                'compass_fimg3',
                'compass_feature_head3',
                'compass_feature_link3',
                'compass_feature_desc3'
            ),
             'social_icon_section' => array(
                'compass_linkedin',
                'compass_rss',
                'compass_pinterest',
            ),
        );
        return $section_content;
    }
    public static function Compass_Settings() {
        $compass_settings = array(
            'compass_logo' => array(
                'id' => 'compass_options[compass_logo]',
                'label' => __('Custom Logo', 'compass'),
                'description' => __('Upload a logo for your Website.', 'compass'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'compass_favicon' => array(
                'id' => 'compass_options[compass_favicon]',
                'label' => __('Custom Favicon', 'compass'),
                'description' => __('Here you can upload a Favicon for your Website. Specified size is 16px x 16px.', 'compass'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
             // First Slider Section
           'compass_slideimage1' => array(
            'id' => 'compass_options[compass_slideimage1]',
            'label' => __('First Slider Image', 'compass'),
            'description' => __('The optimal size of the first image is 1250 px wide x 520 px height, but it can be varied as per your requirement.', 'compass'),
            'type' => 'option',
            'setting_type' => 'image',
            'default' => get_template_directory_uri() . '/images/1.jpg'
            ),
            'compass_sliderheading1' => array(
                'id' => 'compass_options[compass_sliderheading1]',
                'label' => __('First Slider Heading', 'compass'),
                'description' => __('Mention the heading for the First slider.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Your Site is faster to build.', 'compass')
            ),
            'compass_Sliderlink1' => array(
                'id' => 'compass_options[compass_Sliderlink1]',
                'label' => __('Link for First slider', 'compass'),
                'description' => __('Mention the URL for first image.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'compass_sliderdes1' => array(
                'id' => 'compass_options[compass_sliderdes1]',
                'label' => __('First Slider Description', 'compass'),
                'description' => __('Here mention a short description for the First slider heading.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Premium WordPress Themes with Single Click Installation, Just a Click and your website is ready for use. Your Site is faster to build, easy to use & Search Engine Optimized.', 'compass')
            ),       
             // Second Slider Section
            'compass_slideimage2' => array(
            'id' => 'compass_options[compass_slideimage2]',
            'label' => __('Second Slider Image', 'compass'),
            'description' => __('The optimal size of the second image is 1250 px wide x 520 px height, but it can be varied as per your requirement.', 'compass'),
            'type' => 'option',
            'setting_type' => 'image',
            'default' => get_template_directory_uri() . '/images/2.jpg'
            ),
            'compass_sliderheading2' => array(
                'id' => 'compass_options[compass_sliderheading2]',
                'label' => __('Second Slider Heading', 'compass'),
                'description' => __('Mention the heading for the Second slider.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('', 'compass')
            ),
            'compass_Sliderlink2' => array(
                'id' => 'compass_options[compass_Sliderlink2]',
                'label' => __('Link for Second slider', 'compass'),
                'description' => __('Mention the URL for Second image.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'compass_sliderdes2' => array(
                'id' => 'compass_options[compass_sliderdes2]',
                'label' => __('Second Slider Description', 'compass'),
                'description' => __('Here mention a short description for the Second slider heading.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('', 'compass')
            ),
            // First Feature Section
            'compass_feature_head1' => array(
                'id' => 'compass_options[compass_feature_head1]',
                'label' => __('First Feature Heading', 'compass'),
                'description' => __('Mention the heading for First column that will showcase your business services.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Font Awesome Icons', 'compass')
            ),
            'compass_font_icon1' => array(
                'id' => 'compass_options[compass_font_icon1]',
                'label' => __('First Feature Icon', 'compass'),
                'description' => __('Enter the  CSS class fa-cloud  of the icons you want to use on your first column feature. Font Awesome gives you scalable vector icons that can instantly be customized. You can find a list of icon classes here :fortawesome.github.io/Font-Awesome/icons e.g fa-book', 'compass'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'fa-microphone'
            ),
            'compass_fimg1' => array(
            'id' => 'compass_options[compass_fimg1]',
            'label' => __('First Feature Image', 'compass'),
            'description' => __('Choose image for your first Feature area. Optimal size 352px x 200px<br/>(Leave this blank if you want feature icon)', 'compass'),
            'type' => 'option',
            'setting_type' => 'image',
            'default' => ''
            ),
            'compass_feature_desc1' => array(
                'id' => 'compass_options[compass_feature_desc1]',
                'label' => __('First Feature Description', 'compass'),
                'description' => __('Write short description for your First heading.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('compass is a unique responsive WordPress theme. The theme design is fabulous enough giving your visitors the absolute reason to stay on your site.', 'compass')
            ),
            'compass_feature_link1' => array(
                'id' => 'compass_options[compass_feature_link1]',
                'label' => __('First feature Link', 'compass'),
                'description' => __('Enter your text for First feature Link.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            // Second Feature Section
            'compass_feature_head2' => array(
                'id' => 'compass_options[compass_feature_head2]',
                'description' => __('Mention the heading for Second column that will showcase your business services.', 'compass'),
                'label' => __('Second Feature Heading', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('your embed videos', 'compass')
            ),
            'compass_font_icon2' => array(
                'id' => 'compass_options[compass_font_icon2]',
                'label' => __('Second Feature Icon', 'compass'),
                'description' => __('Enter the  CSS class fa-cloud  of the icons you want to use on your second column feature. Font Awesome gives you scalable vector icons that can instantly be customized. You can find a list of icon classes here :fortawesome.github.io/Font-Awesome/icons e.g fa-book', 'compass'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'fa-rocket'
            ),
            'compass_fimg2' => array(
            'id' => 'compass_options[compass_fimg2]',
            'label' => __('Second Feature Image', 'compass'),
            'description' => __('Choose image for your Second Feature area. Optimal size 352px x 200px<br/>(Leave this blank if you want feature icon)', 'compass'),
            'type' => 'option',
            'setting_type' => 'image',
            'default' => ''
            ),
            'compass_feature_desc2' => array(
                'id' => 'compass_options[compass_feature_desc2]',
                'label' => __('Second Feature Description', 'compass'),
                'description' => __('Write short description for your Second heading.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('There are a lot of ways that you can look at people and a lot of characteristics that you can choose to expect people to have.', 'compass')
            ),
            'compass_feature_link2' => array(
                'id' => 'compass_options[compass_feature_link2]',
                'label' => __('Second feature Link', 'compass'),
                'description' => __('Enter your text for Second feature Link.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            // Third Feature Section
            'compass_feature_head3' => array(
                'id' => 'compass_options[compass_feature_head3]',
                'label' => __('Third Feature Heading', 'compass'),
                'description' => __('Mention the heading for Third column that will showcase your business services.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Completely responsive', 'compass')
            ),
            'compass_font_icon3' => array(
                'id' => 'compass_options[compass_font_icon3]',
                'label' => __('Third Feature Icon', 'compass'),
                'description' => __('Enter the  CSS class fa-cloud  of the icons you want to use on your third column feature. Font Awesome gives you scalable vector icons that can instantly be customized. You can find a list of icon classes here :fortawesome.github.io/Font-Awesome/icons e.g fa-book', 'compass'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => 'fa-signal'
            ),
            'compass_fimg3' => array(
            'id' => 'compass_options[compass_fimg3]',
            'label' => __('Third Feature Image', 'compass'),
            'description' => __('Choose image for your Second Feature area. Optimal size 352px x 200px<br/>(Leave this blank if you want feature icon)', 'compass'),
            'type' => 'option',
            'setting_type' => 'image',
            'default' => ''
            ),
            'compass_feature_desc3' => array(
                'id' => 'compass_options[compass_feature_desc3]',
                'label' => __('Third Feature Description', 'compass'),
                'description' => __('Write short description for your third heading.', 'compass'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('There are a lot of ways that you can look at people and a lot of characteristics that you can choose to expect people to have.', 'compass')
            ),
            'compass_feature_link3' => array(
                'id' => 'compass_options[compass_feature_link3]',
                'label' => __('Third feature Link', 'compass'),
                'description' => __('Enter your text for third feature Link.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'compass_linkedin' => array(
                'id' => 'compass_options[compass_linkedin]',
                'label' => __('LinkedIn URL', 'compass'),
                'description' => __('Mention the URL of your LinkedIn here.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'compass_rss' => array(
                'id' => 'compass_options[compass_rss]',
                'label' => __('Rss URL', 'compass'),
                'description' => __('Mention the URL of your Rss Feed here.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'compass_pinterest' => array(
                'id' => 'compass_options[compass_pinterest]',
                'label' => __('Pinterest URL', 'compass'),
                'description' => __('Mention the URL of your Pinterest here.', 'compass'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            )
        );
        return $compass_settings;
    }
    public static function Compass_Controls($wp_customize) {
        $sections = self::Compass_Section_Content();
        $settings = self::Compass_Settings();
        foreach ($sections as $section_id => $section_content) {
            foreach ($section_content as $section_content_id) {
                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'compass_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;
                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'compass_sanitize_text');
                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;
                    case 'textarea':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'compass_sanitize_textarea');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;
                    case 'link':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'compass_sanitize_url');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));

                        break;
                    default:
                        break;
                }
            }
        }
    }
    public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array('Compass_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }
    /**
     * adds sanitization callback funtion : textarea
     * @package compass
     */
    public static function compass_sanitize_textarea($value) {
        $value = esc_html($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : url
     * @package compass
     */
    public static function compass_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : text
     * @package compass
     */
    public static function compass_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : email
     * @package compass
     */
    public static function compass_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package compass
     */
    public static function compass_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }

}
// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('Compass_Customizer', 'Compass_Register'));
function inkthemes_registers() {
          wp_register_script( 'inkthemes_jquery_ui', '//code.jquery.com/ui/1.11.0/jquery-ui.js', array("jquery"), true  );
	wp_register_script( 'inkthemes_customizer_script', get_template_directory_uri() . '/js/inkthemes_customizer.js', array("jquery","inkthemes_jquery_ui"), true  );
	wp_enqueue_script( 'inkthemes_customizer_script' );
	wp_localize_script( 'inkthemes_customizer_script', 'ink_advert', array(
		'pro' => __('View PRO version','compass'),
		'url' => esc_url('http://www.inkthemes.com/compass-wordpress-business-theme-previews/'),
		'support_text' => __('Need Help!','compass'),
		'support_url' => esc_url('http://www.inkthemes.com/lets-connect/')
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'inkthemes_registers' );
