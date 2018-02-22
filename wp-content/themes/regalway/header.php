<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />            <?php
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?> id="regalway_body">
        <!--Start Container-->
        <div class="container">
            <div class="sixteen columns">
                <!--Start Main Container-->
                <div class="main_container">
                    <!--Start Header-->
                    <div class="header">
                        <div class="six columns alpha">
                            <!--Start Logo-->
                            <div class="logo"><?php if (regalway_get_option('regalway_logo') != '') { ?>
                                    <a href="<?php echo esc_url(home_url()); ?>">
                                        <img src="<?php echo regalway_get_option('regalway_logo'); ?>" alt="<?php bloginfo('name'); ?>" />
                                    </a>
                                <?php } else { ?>
                                    <h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
                                    <p><?php bloginfo('description'); ?></p>
                                <?php } ?></div>
                            <!--End Logo-->
                        </div>
                        <div class="ten columns omega">
                            <!--Start Menu_Wrapper-->
                            <div class="menu_wrapper">
                                <div id="MainNav">
                                    <a href="#" class="mobile_nav closed">Pages Navigation Menu<span></span></a>
                                    <?php regalway_nav(); ?>
                                </div>
                            </div>
                            <!--End Menu Wrapper-->
                        </div>
                    </div>
                    <!--End Header-->
                    <div class="clear"></div>
