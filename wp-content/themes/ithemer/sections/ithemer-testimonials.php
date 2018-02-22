<?php if(get_theme_mod('ithemer_testimonial_section_enable')): ?>
		<!-- Start Testimonials -->
		<section id="testimonials" class="section" data-stellar-background-ratio="0.3">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<?php
								$testimonial_title = get_theme_mod('ithemer_testimonial_page_title');
								$testimonial_icon = get_theme_mod('ithemer_testimonial_icon_title');
								$queried_post = get_post($testimonial_title);
							?>
							<h1><?php echo esc_html($queried_post->post_title); ?><i class="<?php echo esc_attr($testimonial_icon); ?>"></i></h1>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="testimonial-carousel">

							<?php
                  							$i=1;
						                  $testimonial[1] = get_theme_mod('ithemer_testimonial_page_1');
						                  $testimonial[2] = get_theme_mod('ithemer_testimonial_page_2');
						                  $testimonial[3] = get_theme_mod('ithemer_testimonial_page_3');
						                  $testimonial[4] = get_theme_mod('ithemer_testimonial_page_4');
						                  $testimonialposition[1] = get_theme_mod('ithemer_testimonial_position_1');
						                  $testimonialposition[2] = get_theme_mod('ithemer_testimonial_position_2');
						                  $testimonialposition[3] = get_theme_mod('ithemer_testimonial_position_3');
						                  $testimonialposition[4] = get_theme_mod('ithemer_testimonial_position_4');

              
					                      $args = array (
					                          'post_type' => 'page',
					                          'posts_per_page' => 4,
					                          'post__in'      => $testimonial,
					                          'orderby'        =>'post__in',
					                        );

					                      $testimonialloop = new WP_Query($args);

					                      
					                      if ($testimonialloop->have_posts()) :  while ($testimonialloop->have_posts()) : $testimonialloop->the_post(); ?>
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<div class="testimonial-content">
									<i class="fa fa-quote-left"></i>
									<p><?php the_content(); ?></p>
								</div>
								
								<div class="testimonial-info">
									<?php if(has_post_thumbnail()): ?>
									<?php the_post_thumbnail('ithemer-testimonial-thumb', array('class' => 'img-circle')); ?> 
								<?php endif; ?>
									<h6><?php the_title(); ?><span><?php echo esc_html($testimonialposition[$i]); ?></span></h6>
								</div>			
							</div>
							<!--/ End Single Testimonial -->
						          <?php $i=$i+1; endwhile;
						              wp_reset_postdata();  
						            endif; ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
<?php endif; ?>