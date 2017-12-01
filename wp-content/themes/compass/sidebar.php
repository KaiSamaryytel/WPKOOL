<div class="sidebar">
    <?php if (!dynamic_sidebar('primary-widget-area')) : ?>
        <div class="sidebar_widget">
            <h3><span class="line"></span>Search</h3>
            <?php get_search_form(); ?>
        </div>
        <div class="sidebar_widget">
            <h3><span class="line"></span>
                <?php echo CATEGORIES; ?>
            </h3>
            <ul>
                <?php wp_list_categories('title_li'); ?>
            </ul>
        </div>
        <div class="sidebar_widget">
            <h3><span class="line"></span>
                <?php echo ARCHIVES; ?>
            </h3>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul> 
        </div>	
    <?php endif; // end primary widget area 
// A second sidebar for widgets, just because.
    if (is_active_sidebar('secondary-widget-area')) :
        dynamic_sidebar('secondary-widget-area'); 
        endif; ?>      
</div>