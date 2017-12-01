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
 get_header(); ?>
<div class="clear"></div>
<div class="page_content">
    <div class="heading_container">
        <?php compass_breadcrumbs(); ?>
    </div>
    <div class="grid_17 alpha">
        <div class="content_bar gallery">
            <?php if (have_posts()): ?>
                <h1 class="page_title single-heading">
                    <?php if (is_day()) : 
                        printf(DAILY_ARCHIVES, get_the_date()); 
                    elseif (is_month()) : 
                        printf(MONTHLY_ARCHIVES, get_the_date('F Y')); 
                    elseif (is_year()) : 
                        printf(YEARLY_ARCHIVES, get_the_date('Y')); 
                    else : 
                        echo BLOG_ARCHIVES; 
                    endif; ?>
                </h1>
                <?php
                /* Since we called the_post() above, we need to
                 * rewind the loop back to the beginning that way
                 * we can run the loop properly, in full.
                 */
                rewind_posts();
                /* Run the loop for the archives page to output the posts.
                 * If you want to overload this in a child theme then include a file
                 * called loop-archives.php and that will be used instead.
                 */
                get_template_part('loop', 'archive');
                ?>
                <div class="clear"></div>
                <nav id="nav-single"> <span class="nav-previous">
                        <?php next_posts_link(__('&larr; Older posts', 'compass')); ?>
                    </span> <span class="nav-next">
                        <?php previous_posts_link(__('Newer posts &rarr;', 'compass')); ?>
                    </span> </nav>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid_7 sidebar_grid omega">
        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
<?php get_footer(); ?>