<?php if(get_theme_mod('ithemer_work_section_enable')): ?>		
	<!-- Start portfolio -->
		<section id="portfolio" class="section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<?php
								$work_title = get_theme_mod('ithemer_work_page_title');
								$work_icon = get_theme_mod('ithemer_work_icon_title');
								$queried_post = get_post($work_title);
							?>
							<h1><?php echo esc_html($queried_post->post_title); ?><i class="<?php echo esc_attr($work_icon); ?>"></i></h1>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>

						
				<div class="portfolio-inner">
					<div class="row stylex">	
						<div class="isotop-active">

							 <?php
	                                $work_catId = get_theme_mod( 'ithemer_work_category_id','1' );
	                                $work_catLink = get_category_link($work_catId);
	                                $work_CatName = get_category($work_catId);
	                                $args = array(
	                                'post_type' => 'post',
	                                'posts_per_page' => 3,
	                                'post_status' => 'publish',
	                                'paged' => 1,
	                                'cat' => $work_catId,
	                               
	                            );
	                            $workloop = new WP_Query($args);
	                            if ( $workloop->have_posts() ) :
	                                while ($workloop->have_posts()) : $workloop->the_post(); ?>
							<!-- Single portfolio -->
							<div class="mix development html5 col-md-4 col-sm-6 col-xs-12 col-fix ">

								<div class="portfolio-single">
									<?php if(has_post_thumbnail()): ?>
									<div class="portfolio-head">
										<?php the_post_thumbnail('ithemer_work_thumb'); ?>
									</div>
								<?php endif; ?>
									<div class="portfolio-hover">
										<h4><span><?php the_category(); ?></span><a href="#"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
										<div class="button">
											<?php $portfolio_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
											<a data-fancybox="gallery" href="<?php echo esc_url($portfolio_img_url); ?>"><i class="fa fa-search"></i></a>
											<a href="<?php the_permalink(); ?>" class="primary"><i class="fa fa-link"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!--/ End portfolio -->					
							
						<?php endwhile;
                            wp_reset_postdata();
                            endif;
                            ?>
							
						
							
							
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Button -->
					<div class="button">
						<a href="<?php echo esc_url($work_catLink); ?>" class="btn"><?php esc_html_e('More work','ithemer'); ?><i class="fa fa-angle-double-right"></i></a>
					</div>
					<!-- End Button -->
				</div>
			</div>
		</section>
		<!--/ End portfolio -->

<?php endif; ?>