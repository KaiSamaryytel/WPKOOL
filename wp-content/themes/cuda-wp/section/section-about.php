<?php
global $cuda_opt;
$about_menu = $cuda_opt['cuda_about_menu']; 
$about_id = strtolower(str_replace(' ', '_', $about_menu));
?>
<section id="<?php echo $about_id; ?>">
	<div id="ccr-about-us">
		<div class="ccr-about-us-bg">
			<div class="container">
				<div class="ccr-about-us-title element_from_right">
					<h1><?php echo $cuda_opt['cuda_about_title'] ?></h1>
					<div class="ccr-line"></div>
					<!-- /.ccr-line -->
				</div>
				<!-- /.ccr-about-us-title -->
				<div class="ccr-about-us-slug element_from_left">
					<p><?php echo $cuda_opt['cuda_about_des'] ?></p>
				</div>
				<!-- /.ccr-about-us-slug -->
				<div class="ccr-us-item">
				<?php query_posts('post_type=testimonial' ); if(have_posts()) : while(have_posts()) : the_post(); ?> 
				<div class="col-xs-12 col-sm-6 ccr-us-first-item element_from_left">
						<?php the_post_thumbnail(array(80,80), false ); ?>
						<span><q><?php the_content(); ?></q></span>
						<div class="ccr-designation">
							<h3><?php the_title(); ?></h3>
							<p><?php echo get_post_meta( $post->ID, 'testimonial_settings_designation', true ); ?>/p>
						</div>
						<!-- /.ccr-designation -->
					</div>
				<?php endwhile;endif; wp_reset_query(); ?>
	
				</div>
				<!-- /.ccr-us-item -->	
			</div>	
		</div>
		<!-- /#ccr-about-us -->
	</div>
</section>