<?php
/**
 * iThemer Theme Custom CSS
 *
 * @package Newspaper_Magazine
 */
if( !function_exists( 'ithemer_custom_css' ) ) :
	/*
	 * Function For Custom CSS
	 *
	 *
	 */
	function ithemer_custom_css() { ?>
					
						<style type="text/css">	
						<?php if(has_header_image()): ?>
						#personal-area {
				    					background-image: url(<?php echo esc_url(get_header_image()); ?>);
				    					}		

						<?php else: ?>
									#personal-area {
							    		background-image: url('<?php echo get_template_directory_uri();?>/assets/images/header-background.jpg');	}
				    	<?php endif; ?>		
				    	<?php if(get_theme_mod('banner_main_title')): ?>
				    				#personal-area , #personal-area .personal-text{
				    							height: 680px !important;
				    							}
				    	<?php else: ?>
				    			#personal-area , #personal-area .personal-text{
				    							height: 320px !important;
				    							}
				    	<?php endif;?>
						</style>
		<?php }
endif;
add_action( 'wp_head', 'ithemer_custom_css' );


