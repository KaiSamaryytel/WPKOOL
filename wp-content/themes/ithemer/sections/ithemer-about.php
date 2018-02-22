<?php if(get_theme_mod('ithemer_about_section_enable')): ?>

<!-- Start About Me -->
		<section id="about-me" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 fix">
						<!-- About Tab -->
						<div class="tabs-main">
							<!-- Tab Menu -->
							<ul class="nav nav-tabs" role="tablist">
								<?php
                  						$i=1;
                  						$j=1;
                  						
						                  $about[1] = get_theme_mod('ithemer_about_page_1');
						                  $about[2] = get_theme_mod('ithemer_about_page_2');
						                  $about[3] = get_theme_mod('ithemer_about_page_3');
						                  $about[4] = get_theme_mod('ithemer_about_page_4');
						                  $abouticon[1] = get_theme_mod('ithemer_about_icon_1');
						                  $abouticon[2] = get_theme_mod('ithemer_about_icon_2');
						                  $abouticon[3] = get_theme_mod('ithemer_about_icon_3');
						                  $abouticon[4] = get_theme_mod('ithemer_about_icon_4');

              
					                      $args = array (
					                          'post_type' => 'page',
					                          'post_per_page' => 4,
					                          'post__in'         => $about,
					                          'orderby'           =>'post__in',
					                        );

					                      $aboutloop = new WP_Query($args);

					                      
					                      if ($aboutloop->have_posts()) :  while ($aboutloop->have_posts()) : $aboutloop->the_post(); ?>								
								<li role="presentation" <?php if($i==1): echo 'class="active"'; ?><?php endif; ?>><span class="tooltips"><?php the_title(); ?></span><a href="#tab_<?php echo esc_attr($i); ?>" role="tab" data-toggle="tab"><i class="<?php echo esc_attr($abouticon[$i]); ?>"></i></a></li>
								<?php $i=$i+1;?> 
						          <?php  endwhile; 
						            endif; ?>
							</ul>
							<!--/ End Tab Menu -->
							<div class="tab-content">
							<?php if($aboutloop->have_posts()) :  while ($aboutloop->have_posts()) : $aboutloop->the_post(); ?>
							
								<!-- Single Tab -->
								<div role="tabpanel" class="tab-pane fade in <?php if($j==1): echo 'active'; ?><?php endif; ?>" id="tab_<?php echo esc_attr($j); ?>">
									<div class="about-text">
										<h2 class="tab-title"><?php the_title(); ?></h2>
										<div class="row">
											<?php if(has_post_thumbnail()): ?>
											<div class="col-md-4 col-sm-4 col-xs-12">
												<!-- About Image -->
												<div class="single-image">
													<?php the_post_thumbnail('ithemer_about_thumb'); ?>
												</div>
											</div>
										 <?php endif;?>
											<!-- End About Image -->
											<?php if(has_post_thumbnail()): ?>
											<div class="col-md-8 col-sm-12 col-xs-12">
											<?php else: ?>
											<div class="col-md-12 col-sm-12 col-xs-12">
											<?php endif;?>
												<div class="content">
													<?php the_content(); ?>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<?php $j=$j+1;?> 
						          <?php  endwhile;
						              wp_reset_postdata();  
						            endif; ?>
							
							</div>
						</div>
						<!--/ End About Tab -->
					</div>
				</div>
			</div>
		</section>		
		<!--/ End About Me -->	


<?php endif; ?>
		