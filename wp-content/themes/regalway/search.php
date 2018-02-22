<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * 
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="breadcrums"><?php if (function_exists('regalway_breadcrumbs')) regalway_breadcrumbs(); ?></div>
<div class="eleven columns alpha">
    <!--Start Content wrap-->
    <div class="content_wrap">
        <?php if (have_posts()) : ?>
            <h1 class="page_title"><?php
                printf(__('Search Results for: %s', 'regalway'), '' . get_search_query() . '');
                ?></h1>
            <!--Start Post-->
                <?php
                get_template_part('loop', 'search');
                ?>
            <!--End Post-->
        <?php else : ?>
            <article id="post-0" class="post no-results not-found">
                <header class="entry-header">
                    <h1 class="entry-title">
    <?php
    _e('Nothing Found', 'regalway');
    ?>
                    </h1>
                </header>
                <!-- .entry-header -->
                <div class="entry-content">
                    <p>
    <?php
    _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'regalway');
    ?>
                    </p>
                        <?php get_search_form(); ?>
                </div>
                <!-- .entry-content -->
            </article>
<?php endif; ?>
        <div class="clear"></div>
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