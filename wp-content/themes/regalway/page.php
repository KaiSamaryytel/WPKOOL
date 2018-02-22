<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
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
        <h1 class="page_title">
            <?php the_title(); ?>
        </h1>
        <?php if (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'regalway') . '</span>', 'after' => '</div>')); ?>
        <?php endif; ?>
        <?php comments_template(); ?>
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
