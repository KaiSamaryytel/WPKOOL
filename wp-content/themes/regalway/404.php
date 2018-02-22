<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
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
        <header class="entry-header">
            <h1 class="entry-title">
                <?php _e('This is somewhat embarrassing, isn&rsquo;t it?',
                        'regalway');
                ?>
            </h1>
        </header>
        <p>
            <?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.',
                    'regalway');
            ?>
        </p>
        <?php get_search_form(); ?>
        <?php
        the_widget('WP_Widget_Recent_Posts',
                array(
            'number' => 10),
                array(
            'widget_id' => '404'));
        ?>
        <div class="widget">
            <h2 class="widgettitle">
                <?php _e('Most Used Categories',
                        'regalway');
                ?>
            </h2>
            <ul>
                <?php
                wp_list_categories(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'show_count' => 1,
                    'title_li' => '',
                    'number' => 10));
                ?>
            </ul>
        </div>
        <?php
        /* translators: %1$s: smilie */
        $archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s',
                                'regalway'),
                        convert_smilies(':)')) . '</p>';
        the_widget('WP_Widget_Archives',
                array(
            'count' => 0,
            'dropdown' => 1),
                array(
            'after_title' => '</h2>' . $archive_content));
        ?>
<?php the_widget('WP_Widget_Tag_Cloud'); ?>
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
