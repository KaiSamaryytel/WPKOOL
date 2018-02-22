<?php if(get_theme_mod('ithemer_blog_section_enable')): ?>
		<!-- Start Blog -->
		<section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<?php
								$blog_title = get_theme_mod('ithemer_blog_page_title');
								$blog_icon = get_theme_mod('ithemer_blog_icon_title');
								$queried_post = get_post($blog_title);
							?>
							<h1><?php echo esc_html($queried_post->post_title); ?><i class="<?php echo esc_attr($blog_icon); ?>"></i></h1>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="blog-carousel">		
							<!-- Single Blog -->
							<?php
	                                $blog_catId = esc_attr(get_theme_mod( 'ithemer_blog_category_id'));
	                                $blog_catLink = get_category_link($blog_catId);
	                                $blog_CatName = get_category($blog_catId);
	                                $args = array(
	                                'post_type' => 'post',
	                                'posts_per_page' => 3,
	                                'post_status' => 'publish',
	                                'cat' => $blog_catId,
	                               
	                            					);

	                            $blogloop = new WP_Query($args);
	                            
	                                while ($blogloop->have_posts()) : 
	                                	$blogloop->the_post(); 
	                                	?>
	                                	

							<div class="single-blog">
								<div class="blog-head">
									<?php if(has_post_thumbnail()): ?>
									<?php 	$blog_img_url = get_the_post_thumbnail_url($post->ID, 'ithemer-grid-blog');  ?>
									<img src="<?php echo esc_url($blog_img_url); ?>" class='img-responsive'/>
									<?php endif; ?> 
									<div class="blog-link">
										<a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<div class="blog-info">
									<div class="date">
										<div class="day"><span><?php echo get_the_date('j'); ?></span><?php echo get_the_date( 'M'); ?></div>
										<div class="year"><?php echo get_the_date( 'Y'); ?></div>
									</div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="meta">
										<?php ithemer_posted_by(); ?>
										<?php ithemer_entry_footer(); ?>
									</div>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="btn"><?php esc_html_e('Read More','ithemer'); ?><i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>						
							<?php endwhile;
                            wp_reset_postdata();
                            ?>
							
						</div>						
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog -->	
<?php endif; ?>