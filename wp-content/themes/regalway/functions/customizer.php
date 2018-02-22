<?php
class RegalWay_Customizer {
    public static function RegalWay_Register($wp_customize) {
        self::RegalWay_Sections($wp_customize);
        self::RegalWay_Controls($wp_customize);
    }
    public static function RegalWay_Sections($wp_customize) {
        /**
         * General Section
         */
        $wp_customize->add_section('general_setting_section', array(
            'title' => __('General Settings', 'regalway'),
            'description' => __('Allows you to Contact Info, Menu Text etc settings for RegalWay Theme.', 'regalway'), //Descriptive tooltip
            'panel' => '',
            'priority' => '10',
            'capability' => 'edit_theme_options'
            )
        );
        /**
         * Home Page Top Feature Area
         */
        $wp_customize->add_section('home_top_feature_area', array(
            'title' => __('Top Feature Area', 'regalway'),
            'description' => __('Allows you to setup Top feature area section for RegalWay Theme.', 'regalway'), //Descriptive tooltip
            'panel' => '',
            'priority' => '11',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Style Section
         */
        $wp_customize->add_section('style_section', array(
            'title' => __('Style Setting', 'regalway'),
            'description' => __('Allows you to setup Top Footer Section Text for RegalWay Theme.', 'regalway'),
            'panel' => '',
            'priority' => '12',
            'capability' => 'edit_theme_options'
                )
        );
         $wp_customize->remove_section("colors");
    }
    public static function RegalWay_Section_Content() {
        $section_content = array(
            'general_setting_section' => array(
                'regalway_logo',
                'regalway_favicon'
            ),
            'home_top_feature_area' => array(
                'regalway_slideimage1'
            ),          
             'style_section' => array(
                'regalway_customcss'
            )
        );
        return $section_content;
    }

    public static function RegalWay_Settings() {
        $regalway_settings = array(
            'regalway_logo' => array(
                'id' => 'regalway_options[regalway_logo]',
                'label' => __('Custom Logo', 'regalway'),
                'description' => __('Choose your own logo. Optimal Size: 221px Wide by 84px Height.', 'regalway'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/logo.png'
            ),
            'regalway_favicon' => array(
                'id' => 'regalway_options[regalway_favicon]',
                'label' => __('Custom Favicon', 'regalway'),
                'description' => __('Specify a 16px x 16px image that will represent your websites favicon.', 'regalway'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'regalway_slideimage1' => array(
                'id' => 'regalway_options[regalway_slideimage1]',
                'label' => __('Top Feature Image', 'regalway'),
                'description' => __('Choose your image for the featured image section on homepage. Optimal size is 950px wide and 450px height.', 'regalway'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/slide1.jpg'
            ),
            'regalway_customcss' => array(
                'id' => 'regalway_options[regalway_customcss]',
                'label' => __('Custom CSS', 'regalway'),
                'description' => __('Quickly add your custom CSS code to your theme by writing the code in this block.', 'regalway'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),            
         );
        return $regalway_settings;
    }
    public static function RegalWay_Controls($wp_customize) {
        $sections = self::RegalWay_Section_Content();
        $settings = self::RegalWay_Settings();
        foreach ($sections as $section_id => $section_content) {
            foreach ($section_content as $section_content_id) {
                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'regalway_sanitize_url');
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
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'regalway_sanitize_text');
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
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'regalway_sanitize_textarea');

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

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'regalway_sanitize_url');

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
            'sanitize_callback' => array('RegalWay_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }
    /**
     * adds sanitization callback funtion : textarea
     * @package RegalWay
     */
    public static function regalway_sanitize_textarea($value) {
        $value = esc_html($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : url
     * @package RegalWay
     */
    public static function regalway_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : text
     * @package RegalWay
     */
    public static function regalway_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : email
     * @package RegalWay
     */
    public static function regalway_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : number
     * @package RegalWay
     */
    public static function regalway_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }
}
// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('RegalWay_Customizer', 'RegalWay_Register'));
function inkthemes_registers() {
          wp_register_script( 'inkthemes_jquery_ui', '//code.jquery.com/ui/1.11.0/jquery-ui.js', array("jquery"), true  );
	wp_register_script( 'inkthemes_customizer_script', get_template_directory_uri() . '/js/inkthemes_customizer.js', array("jquery","inkthemes_jquery_ui"), true  );
	wp_enqueue_script( 'inkthemes_customizer_script' );
	wp_localize_script( 'inkthemes_customizer_script', 'ink_advert', array(
            'pro' => __('View PRO version','regalway'),
            'url' => esc_url('http://www.inkthemes.com/wp-themes/frame-wordpress-theme/'),
			'support_text' => __('Need Help!','regalway'),
			'support_url' => esc_url('http://www.inkthemes.com/lets-connect/')
            )
            );
}
add_action( 'customize_controls_enqueue_scripts', 'inkthemes_registers' );
