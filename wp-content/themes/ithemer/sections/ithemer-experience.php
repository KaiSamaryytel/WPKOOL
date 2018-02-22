<?php if(get_theme_mod('ithemer_exp_section_enable')): ?>
		
		<!-- Start Timeline-->
		<section id="my-timeline" class="section clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<?php
								$exp_title = get_theme_mod('ithemer_exp_page_title');
								$exp_icon = get_theme_mod('ithemer_exp_icon_title');
								$queried_post = get_post($exp_title);
							?>
							<h1><?php echo esc_html($queried_post->post_title); ?><i class="<?php echo esc_attr($exp_icon); ?>"></i></h1>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="timeline">
							<div class="timeline-inner">
								<?php
                  						$i=1;
                  						
						                  $exp[1] = get_theme_mod('ithemer_exp_page_1');
						                  $exp[2] = get_theme_mod('ithemer_exp_page_2');
						                  $exp[3] = get_theme_mod('ithemer_exp_page_3');
						                  $exp[4] = get_theme_mod('ithemer_exp_page_4');
						                  $expdate[1] = esc_attr(get_theme_mod('ithemer_exp_date_1'));
						                  $expdate[2] = esc_attr(get_theme_mod('ithemer_exp_date_2'));
						                  $expdate[3] = esc_attr(get_theme_mod('ithemer_exp_date_3'));
						                  $expdate[4] = esc_attr(get_theme_mod('ithemer_exp_date_4'));

              
					                      $args = array (
					                          'post_type' => 'page',
					                          'posts_per_page' => 4,
					                          'post__in'      => $exp,
					                          'orderby'        =>'post__in',
					                        );

					                      $exploop = new WP_Query($args);

					                      
					                      if ($exploop->have_posts()) :  while ($exploop->have_posts()) : $exploop->the_post(); ?>
								<!-- Single Timeline -->

								<div class="single-main wow <?php if($i==1){echo 'fadeInLeft';} else {echo 'fadeInRight';} ?>" data-wow-delay="<?php echo esc_attr($i*0.2); ?>s">
									<div class="single-timeline">
										<div class="single-content">
											<div class="date">
												<p><?php echo esc_attr($expdate[$i]); ?></p>
											</div>
											<h2><?php the_title(); ?></h2>
											<p><?php the_content();?><p>
										</div>
									</div>
								</div>
								<!--/ End Single Timeline -->
								
									<?php $i=$i+1;?> 
						          <?php  endwhile; 
						           wp_reset_postdata();
						            endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Timeline -->
<?php endif; ?>	