<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iThemer
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<div class="col-md-4 col-sm-12 col-xs-12">
						<!-- Sidebar  -->
						<div class="blog-sidebar">
							
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
						<!--/ End  Sidebar -->
					</div>
				
