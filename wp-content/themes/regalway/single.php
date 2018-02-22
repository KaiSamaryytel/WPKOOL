<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 */
get_header();
?>
<div class="clear"></div>
<div class="clear"></div>
<div class="breadcrums">
    <?php if (function_exists('regalway_breadcrumbs')) regalway_breadcrumbs(); ?>
</div>
<div class="eleven columns alpha">
    <!--Start Content wrap-->
    <div class="content_wrap">
        <!--Start Post-->
        <!-- Start the Loop. -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!--Start Post-->
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!--Start Post Data-->
                    <div class="post_data">
                        <div class="post_date"> <span class="month"> <?php echo get_the_time('M') ?></span> <span class="date"><?php echo get_the_time('d') ?></span> </div>
                        <div class="post_meta">
                            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                </a></h1>
                            <ul class="p_meta">
                                <li class="posted_by">By&nbsp;<a href="#">
                                        <?php the_author_posts_link(); ?>
                                    </a>&nbsp;&nbsp;&nbsp; <?php
                                    $archive_year = get_the_time('Y');
                                    $archive_month = get_the_time('m');
                                    $archive_day = get_the_time('d');
                                    ?>
                                    <a href="<?php
                                    echo get_day_link($archive_year, $archive_month, $archive_day);
                                    ?>"><?php echo get_the_time('m, d, Y') ?></a></li>
                                <li class="post_comment"><a href="#">
                                        <?php
                                        comments_popup_link('No Comments.', '1 Comment.', '% Comments.');
                                        ?>
                                    </a></li>
                                <li class="post_category">
                                    <?php the_category(', '); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Post data-->
                    <!--Start Post content-->
                    <div class="post_content">
                        <?php the_content(); ?>
                        <div class="clear"></div>
                        <?php if (has_tag()) { ?>
                            <div class="tag">
                                <?php
                                the_tags(__('Post Tagged with ','regalway'), ', ', '');
                                ?>
                            </div>
                        <?php } ?>
                        <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'regalway') . '</span>', 'after' => '</div>')); ?>
                    </div>
                    <!--End Post content-->
                </div>
                <!--End Post-->
                <?php
            endwhile;
        endif;
        ?>
        <!--End Post-->
        <div class="clear"></div>
        <nav id="nav-single"> <span class="nav-previous">
                <?php
                previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous Post', 'regalway'));
                ?>
            </span> <span class="nav-next">
                <?php
                next_post_link('%link', __('Next Post <span class="meta-nav">&rarr;</span>', 'regalway'));
                ?>
            </span> </nav>
        <!--Start Comment box-->
        <?php comments_template(); ?>
        <!--End Comment box-->
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
