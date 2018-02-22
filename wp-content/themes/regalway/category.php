<?php
/**
 * The template for displaying Category pages.
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
        <?php if (have_posts()) : ?>
            <h1 class="page_title"><?php
                printf(__('Category Archives: %s',
                                'regalway'),
                        '' . single_cat_title('',
                                false) . '');
                ?></h1>
            <?php
            $category_description = category_description();
            if (!empty($category_description))
                echo '' . $category_description . '';
            /* Run the loop for the category page to output the posts.
             * If you want to overload this in a child theme then include a file
             * called loop-category.php and that will be used instead.
             */
            ?>
    <?php get_template_part('loop',
            'category');
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
