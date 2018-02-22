<!--Start Sidebar Wrap-->
<div class="sidebar_wrap">
    <?php if (!dynamic_sidebar('primary-widget-area')) : ?>
        <div class="sidebar">
            <?php get_search_form(); ?>
            <h4>
                <?php _e('Categories',
                        'regalway');
                ?>
            </h4>
            <ul>
    <?php wp_list_categories('title_li'); ?>
            </ul>
        </div>
        <div class="sidebar">
            <h4>
                <?php _e('Archives',
                        'regalway');
                ?>
            </h4>
            <ul>
    <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>

    <?php endif; // end primary widget area ?>
    <?php
// A second sidebar for widgets, just because.
    if (is_active_sidebar('secondary-widget-area')) :
        ?>
        <?php dynamic_sidebar('secondary-widget-area'); ?>

<?php endif; ?>
</div>
<!--End Sidebar wrap-->
