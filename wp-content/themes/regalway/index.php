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
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="breadcrums">
    <?php if (function_exists('regalway_breadcrumbs')) regalway_breadcrumbs(); ?>
</div>
<div class="eleven columns alpha">
    <!--Start Content wrap-->
    <div class="content_wrap">
        <!--Start Post-->
        <?php get_template_part('loop',
                'index');
        ?>
        <!--End Post-->
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
