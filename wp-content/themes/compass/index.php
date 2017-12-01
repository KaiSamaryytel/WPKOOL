<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
 get_header(); ?> 
<div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider animated">				
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">							
                <div class="salesdetails">
                    <?php if (compass_get_option('compass_sliderheading1') != '') { ?>
                        <a href="<?php
                        if (compass_get_option('compass_Sliderlink1') != '') {
                            echo compass_get_option('compass_Sliderlink1');
                        } else {
                            echo "#";
                        }
                        ?>"><h1><?php echo compass_get_option('compass_sliderheading1'); ?></h1></a>
                       <?php } else { ?>
                        <a href="#"><h1>
                                <?php _e('Your Site is faster to build.', 'compass'); ?>
                            </h1></a>
                    <?php } 
                    if (compass_get_option('compass_sliderdes1') != '') { ?>
                        <p><?php echo compass_get_option('compass_sliderdes1'); ?></p>
                    <?php } else { ?>
                        <p>
                            <?php _e('Premium WordPress Themes with Single Click Installation, Just a Click and your website is ready for use. Your Site is faster to build, easy to use & Search Engine Optimized.', 'compass'); ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
            <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring1 = compass_get_option('compass_slideimage1');
            $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring1)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
             if ($check_img_ofset == 0 && compass_get_option('compass_slideimage1') != '') { ?>
                <div class="bg-img bg-img-1"><?php echo compass_get_option('compass_slideimage1'); ?></div>
            <?php } else { ?>  
                <div class="bg-img bg-img-1">
                    <?php if (compass_get_option('compass_slideimage1') != '') { ?>
                        <a href="<?php
                        if (compass_get_option('compass_Sliderlink1') != '') {
                            echo compass_get_option('compass_Sliderlink1');
                        }
                        ?>" >
                            <img  src="<?php echo compass_get_option('compass_slideimage1'); ?>" alt="Slide Image 1"/></a>
                    <?php } else { ?>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="Slide Image 1"/>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>	
        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <?php if (compass_get_option('compass_sliderheading2') != '') { ?>
                <div class="sl-slide-inner">							
                    <div class="salesdetails">
                        <?php if (compass_get_option('compass_sliderheading2') != '') { ?>
                            <a href="<?php
                            if (compass_get_option('compass_Sliderlink2') != '') {
                                echo compass_get_option('compass_Sliderlink2');
                            } else {
                                echo "#";
                            }
                            ?>"><h1><?php echo compass_get_option('compass_sliderheading2'); ?></h1></a>
                           <?php } if (compass_get_option('compass_sliderdes2') != '') { ?>
                            <p><?php echo compass_get_option('compass_sliderdes2'); ?></p>
                        <?php } ?>                                
                    </div>
                </div>
                <?php
            }
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring2 = compass_get_option('compass_slideimage2');
            $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring2)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            ?>
            <?php if ($check_img_ofset == 0 && compass_get_option('compass_slideimage2') != '') { ?>
                <div class="bg-img bg-img-2"><?php echo compass_get_option('compass_slideimage2'); ?></div>
            <?php } else { ?>  
                <div class="bg-img bg-img-2">
                    <?php if (compass_get_option('compass_slideimage2') != '') { ?>
                        <a href="<?php
                        if (compass_get_option('compass_Sliderlink2') != '') {
                            echo compass_get_option('compass_Sliderlink2');
                        }
                        ?>" >
                            <img  src="<?php echo compass_get_option('compass_slideimage2'); ?>" alt="Slide Image 2"/></a>
                    <?php } else { ?>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="Slide Image 1"/>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div><!-- /sl-slider -->
    <nav id="nav-dots" class="nav-dots">        
        <span class="nav-dot-current"></span>       
        <span></span>
    </nav>
</div><!-- /slider-wrapper -->
<div class="clear"></div> 
<div class="home_wrapper">	
    <div class="feature-content">
        <div class="grid_8 f_feature alpha">
            <div class="feature-content-inner first animated" style="-webkit-animation-delay: .1s; -moz-animation-delay: .1s; -o-animation-delay: .1s; -ms-animation-delay: .1s;">
                <!-- *** Three column Box 1 *** -->
                <?php if (compass_get_option('compass_font_icon1') != '') { ?>
                    <p class="font_icon"><i class="<?php
                        echo stripslashes(compass_get_option('compass_font_icon1'));
                        ?> fa"></i></p>

                <?php } elseif (compass_get_option('compass_fimg1') != '') { ?>
                    <div class="feature-image first">
                        <a href="<?php echo compass_get_option('compass_feature_link1'); ?>">
                            <img src="<?php echo compass_get_option('compass_fimg1'); ?>" alt="Feature image" /></a>
                    </div>
                <?php } else { ?>

                    <p class="font_icon"><i class="fa-cloud fa"> <?php } ?> </i></p>

                <?php if (compass_get_option('compass_feature_head1') != '') { ?>


                    <a href="<?php
                    if (compass_get_option('compass_feature_link1') != '') {
                        echo stripslashes(compass_get_option('compass_feature_link1'));
                    } else {
                        echo "#";
                    }
                    ?>"><h2><?php echo stripslashes(compass_get_option('compass_feature_head1')); ?></h2></a>
                   <?php } else { ?>
                    <a href="#"><h2><?php _e('Use Font Awesome Icons', 'compass'); ?></h2></a>
                <?php } if (compass_get_option('compass_feature_desc1') != '') { ?>
                    <p><?php echo stripslashes(compass_get_option('compass_feature_desc1')); ?></p>
                <?php } else { ?>
                    <p><?php _e('Go to Font Awesome and pick the icon of your choice. Copy the class of icon and past it in Theme Option Panel.', 'compass'); ?></p>				
                <?php } ?>	
            </div>
        </div>
        <div class="grid_8 f_feature alpha">
            <div class="feature-content-inner second animated" style="-webkit-animation-delay: .5s; -moz-animation-delay: .5s; -o-animation-delay: .5s; -ms-animation-delay: .5s;">
                <!-- *** Three column Box 2 *** -->
                <?php if (compass_get_option('compass_font_icon2') != '') { ?>
                    <p class="font_icon"><i class="<?php
                    echo stripslashes(compass_get_option('compass_font_icon2'));
                    ?> fa"></i></p>

                                        <?php } elseif (compass_get_option('compass_fimg2') != '') { ?>
                    <div class="feature-image second">
                        <a href="<?php echo compass_get_option('compass_feature_link2'); ?>">
                            <img src="<?php echo compass_get_option('compass_fimg2'); ?>" alt="Feature image" /></a>
                    </div>
<?php } else { ?>

                    <p class="font_icon"><i class="fa-rocket fa"> <?php } ?> </i></p>


<?php if (compass_get_option('compass_feature_head2') != '') { ?>
                    <a href="<?php
                    if (compass_get_option('compass_feature_link2') != '') {
                        echo stripslashes(compass_get_option('compass_feature_link2'));
                    } else {
                        echo "#";
                    }
                    ?>"><h2><?php echo stripslashes(compass_get_option('compass_feature_head2')); ?></h2></a>
                <?php } else { ?>
                    <a href="#"><h2><?php _e('Amazing Animation', 'compass'); ?></h2></a>
                   <?php } if (compass_get_option('compass_feature_desc2') != '') { ?>
                    <p><?php echo stripslashes(compass_get_option('compass_feature_desc2')); ?></h2>
                <?php } else { ?>
                    <p><?php _e('Animate is a simple CSS library that saves you from writing a few more lines of CSS to animate elements on your website.', 'compass'); ?></p>				
                    <?php } ?>
            </div>
        </div>
        <div class="grid_8 f_feature alpha">
            <div class="feature-content-inner third animated" style="-webkit-animation-delay: .9s; -moz-animation-delay: .9s; -o-animation-delay: .9s; -ms-animation-delay: .9s;">
                <!-- *** Three column Box 3 *** -->
<?php if (compass_get_option('compass_font_icon3') != '') { ?>
                    <p class="font_icon"><i class="<?php
                    echo stripslashes(compass_get_option('compass_font_icon3'));
                    ?> fa"></i></p>

                    <?php } elseif (compass_get_option('compass_fimg3') != '') { ?>
                    <div class="feature-image third">
                        <a href="<?php echo compass_get_option('compass_feature_link3'); ?>">
                            <img src="<?php echo compass_get_option('compass_fimg3'); ?>" alt="Feature image" /></a>
                    </div>
<?php } else { ?>

                    <p class="font_icon"><i class="fa-wordpress fa"> <?php } ?> </i></p>   



<?php if (compass_get_option('compass_feature_head3') != '') { ?>
                    <a href="<?php
    if (compass_get_option('compass_feature_link3') != '') {
        echo stripslashes(compass_get_option('compass_feature_link3'));
    } else {
        echo "#";
    }
    ?>"><h2><?php echo stripslashes(compass_get_option('compass_feature_head3')); ?></h2></a>
                <?php } else { ?>
                    <a href="#"><h2><?php _e('Completely responsive', 'compass'); ?></h2></a>
                   <?php } if (compass_get_option('compass_feature_desc3') != '') { ?>
                    <p><?php echo stripslashes(compass_get_option('compass_feature_desc3')); ?></h2>
                <?php } else { ?>
                    <p><?php _e('Theme is completely responsive in nature, Mobile Friendly and compatible with all the latest versions of WordPress.', 'compass'); ?></p>
                    <?php } ?>
            </div>
        </div>
    </div>		
    <div class="clear"></div>
    <div class="page_content home">
        <div class="grid_17 alpha">
            <div class="content_bar gallery">
                <!--Start Post-->
				<?php get_template_part('loop', 'index'); ?>
                <!--End Post-->
                <div class="clear"></div>
                <nav id="nav-single"> <span class="nav-previous">
                        <?php next_posts_link(__('&larr; Older posts', 'compass')); ?>
                    </span> <span class="nav-next">
                        <?php previous_posts_link(__('Newer posts &rarr;', 'compass')); ?>
                    </span> </nav> 
            </div>
        </div>
        <div class="grid_7 sidebar_grid omega">
            <!--Start Sidebar-->
			<?php get_sidebar(); ?>
            <!--End Sidebar-->
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php get_footer(); ?>