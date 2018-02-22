<?php if(get_theme_mod('ithemer_clients_section_enable')): ?>
		<!-- Start Clients -->
		<div id="clients" class="section" data-stellar-background-ratio="0.3">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="clients-slider">
							<!-- Single Clients -->
							<?php
	                                $clients_catId = get_theme_mod( 'ithemer_clients_category_id','1' );
	                  
	                                $args = array(
	                                'post_type' => 'post',
	                                'posts_per_page' => 5,
	                                'post_status' => 'publish',
	                                'paged' => 1,
	                                'cat' => $clients_catId,
	                               
	                            );
	                            $clientsloop = new WP_Query($args);
	                            if ( $clientsloop->have_posts() ) :
	                                while ($clientsloop->have_posts()) : $clientsloop->the_post(); 
	                                	$clients_img_url = get_the_post_thumbnail_url($post->ID, 'full');?>
	                          <?php if(has_post_thumbnail()): ?>
							<div class="single-clients">
								<a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail('ithemer-client-thumb'); ?></a>
							</div>
						<?php endif; ?>
							<!--/ End Single Clients -->
							<?php endwhile;
                            wp_reset_postdata();
                            endif;
                            ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Clients -->

<?php endif; ?>
