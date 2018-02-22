<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * 
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="breadcrums">
    <?php if (function_exists('regalway_breadcrumbs')) regalway_breadcrumbs(); ?>
</div>
<div class="eleven columns alpha">
    <!--Start Content wrap-->
    <div class="content_wrap">
        <h1 class="page_title"><?php
            printf(__('Tag Archives: %s',
                            'regalway'),
                    '' . single_cat_title('',
                            false) . '');
            ?></h1>
        <?php if (have_posts()) : the_post(); ?>
    <?php get_template_part('loop',
            'index');
    ?>
            <div class="clear"></div>
            <nav id="nav-single"> <span class="nav-previous">
                    <?php next_posts_link(__('&larr; Older posts',
                                    'regalway'));
                    ?>
                </span> <span class="nav-next">
    <?php previous_posts_link(__('Newer posts &rarr;',
                    'regalway'));
    ?>
                </span> </nav>
    <?php endif; ?>
    </div>
    <!--End Content Wrap-->
</div>
<div class="five columns omega">
    <!--Start Sidebar-->
<?php get_sidebar(); ?>
    <!--End Sidebar-->
</div>
<div class="clear"></div>
</div>
<!--End Main Container-->
<?php get_footer(); ?>
