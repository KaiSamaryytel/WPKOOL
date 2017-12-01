<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('compass_theme'); ?>>
        <div class="container_24">
            <div class="grid_24">
                <div class="page_content_wrapper">
                    <div class="header">
                        <div class="grid_8 alpha">
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>"><img src="<?php if (compass_get_option('compass_logo') != '') { ?><?php echo compass_get_option('compass_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?> logo"/></a>
                            </div> 
                        </div>
                        <div class="grid_16 omega">            
                            <div class="menu_wrapper">
                                <div id="MainNav">
                                    <?php compass_nav(); ?>                       
                                </div>
                            </div>
                        </div>       
                        <div class="clear"></div>		  
                    </div>