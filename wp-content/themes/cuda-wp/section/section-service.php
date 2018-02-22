<?php 
global $cuda_opt;
$service_menu = $cuda_opt['cuda_service_menu']; 
$service_id= strtolower(str_replace(' ', '_', $service_menu));
?>
<section id="<?php echo $service_id; ?>">

	<div id="ccr-service" >
		<div class="ccr-service-bg">
			<div class="container">
				<div class="ccr-title element_from_right">
					<h1 class="element_from_top"><?php echo $cuda_opt['cuda_service_title'] ?></h1>
					<div class="ccr-line"></div>
					<!-- /.ccr-line -->
					<div class="ccr-service-slug make-it-appear-left animated fadeInLeft">
						<?php if($cuda_opt['cuda_service_des']) {echo $cuda_opt['cuda_service_des'];} ?>	
						
					</div>
				</div>
				<!-- /.ccr-title -->
				<!-- /.ccr-service-slug -->
				<div class="ccr-item">
				<?php 
				query_posts('post_type=service' );
				if(have_posts()) : while(have_posts()) : the_post(); ?> 
				<div class="col-sm-3 element_from_left">
						<div class="ccr-first-item">
							<?php the_post_thumbnail(); ?>
							<h3><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
						<!-- /.ccr-first-item -->
					</div>
				<?php endwhile;endif; wp_reset_query(); ?>
						
				</div>
				<!-- /.ccr-item -->
			</div>
		</div>
		<!-- /.ccr-service-bg -->
	</div>
	<!-- /#ccr-service -->
</section>
