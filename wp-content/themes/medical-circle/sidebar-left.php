<?php
/**
 * The left sidebar containing the main widget area.
 */
if ( ! is_active_sidebar( 'medical-circle-sidebar' ) ) {
    return;
}
$sidebar_layout = medical_circle_sidebar_selection();
if( $sidebar_layout == "left-sidebar" ) : ?>
    <div id="secondary-left" class="at-fixed-width widget-area sidebar secondary-sidebar" role="complementary">
        <div id="sidebar-section-top" class="widget-area sidebar init-animate clearfix">
            <?php dynamic_sidebar( 'medical-circle-sidebar' ); ?>
        </div>
    </div>
<?php endif;