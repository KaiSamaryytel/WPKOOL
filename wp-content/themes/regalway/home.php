<?php get_header(); ?>
<div class="slider">
    <!--Start Slider-->

    <div id="slides">
        <div class="slide slides_container">
            <div class="slides_control">
                <?php if (regalway_get_option('regalway_slideimage1') != '') { ?>
                    <img src="<?php echo regalway_get_option('regalway_slideimage1'); ?>" alt="">
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="">
                <?php } ?>
            </div>
        </div>
    </div>
    <!--End Slider-->    
</div>
<div class="clear"></div>
<!--Start Content-->
<div class="content">
    <div class="content_wrap">
        <?php get_template_part('loop'); ?>
        <nav id="nav-single"> <span class="nav-previous">
                <?php
                next_posts_link(__('&larr; Older posts', 'regalway'));
                ?>
            </span> <span class="nav-next">
                <?php
                previous_posts_link(__('Newer posts &rarr;', 'regalway'));
                ?>
            </span> </nav>
    </div>
</div>
<!--End Content-->
</div>
<!--End Main Container-->
<?php get_footer(); ?>
