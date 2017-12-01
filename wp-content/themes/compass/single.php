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
<div class="clear"></div>
<div class="page_content">
    <div class="heading_container">
        <?php compass_breadcrumbs(); ?>
    </div>
    <div class="grid_17 alpha">
        <div class="content_bar">
            <!-- Start the Loop. -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!--Start post-->
                    <div class="post single">			
                        <h1 class="post_title"><?php the_title(); ?></h1>
                        <ul class="post_meta">
                            <li class="posted_by"><span><i class="fa fa-user hi-icon"></i></span><?php the_author_posts_link(); ?></li>
                            <li class="posted_in"><span><i class="fa fa-bookmark hi-icon"></i></span><?php the_category(', '); ?></li>
                            <li class="post_date"><span><i class="fa fa-clock-o hi-icon"></i></span><?php echo get_the_time('M, d, Y') ?></li>
                            <li class="postc_comment"><span><i class="fa fa-comments hi-icon"></i></span><?php comments_popup_link(NO_CMNT, ONE_CMNT, '% ' . CMNT); ?></li>
                        </ul>
                        <div class="post_content"> 
                            <?php the_content(); ?>
                        </div>				
                        <?php if (has_tag()) { ?>
                            <div class="tags_write">
                                <?php the_tags(POST_TAGGED_WITH, ' ,'); ?>
                            </div>
                        <?php } ?>				
                    </div>
                <?php endwhile;
            else:
                ?>
                <div class="post">
                    <p>
    <?php echo SORRY_NO_POST_MATCHED; ?>
                    </p>
                </div>
<?php endif; ?>
            <!--End post-->
            <!--End Post-->	
            <div class="clear"></div>
            <nav id="nav-single"> <span class="nav-previous">
                    <?php previous_post_link('&laquo; %link'); ?>
                </span> <span class="nav-next">
<?php next_post_link('%link &raquo;'); ?>
                </span> </nav>
            <!--Start Comment box-->
<?php comments_template(); ?>
            <!--End Comment box-->
        </div>
    </div>
    <div class="grid_7 sidebar_grid omega">
        <!--Start Sidebar-->
<?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
<?php get_footer(); ?>