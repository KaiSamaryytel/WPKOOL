<?php 
global $cuda_opt;
$team_menu = $cuda_opt['cuda_team_menu']; 
$team_id= strtolower(str_replace(' ', '_', $team_menu));
?>
<section id="<?php echo $team_id; ?>">
	<div id="ccr-team">
		<div class="ccr-team-bg">
			<div class="container">
				<div class="ccr-team-title element_fade_in">
					<h1><?php echo $cuda_opt['cuda_team_title'] ?></h1>
					<div class="ccr-line"></div>
					<!-- /.ccr-line -->
					<div class="ccr-team-slug">
						<?php echo $cuda_opt['cuda_team_des'] ?>
					</div><!-- /.ccr-team-slug -->
				</div><!-- /.ccr-team-title -->
				<div class="ccr-team-item element_from_top">
					<?php 
					query_posts('post_type=team' );
					if(have_posts()) : while(have_posts()) : the_post(); ?> 
						<div class="col-xs-12 col-sm-3 ccr-first-team element_from_left">
						<?php the_post_thumbnail(array(80,83), false); ?>
							<h3><?php the_title(); ?></h3>
							<p class="designation"><?php echo get_post_meta( $post->ID, 'team_settings_designation', true ); ?></p>
							<p><?php the_content(); ?></p>
							<div class="ccr-social">
								<a href="<?php echo get_post_meta( $post->ID, 'team_settings_facebook', true ); ?>"><i class="fa fa-facebook"></i></a>
								<a href="<?php echo get_post_meta( $post->ID, 'team_settings_twitter', true ); ?>"><i class="fa fa-twitter"></i></a>
								<a href="<?php echo get_post_meta( $post->ID, 'team_settings_linkedin', true ); ?>"><i class="fa fa-linkedin"></i></a>
								<a href="<?php echo get_post_meta( $post->ID, 'team_settings_google_plus', true ); ?>"><i class="fa fa-envelope"></i></a>
							</div>
							<!-- /.ccr-social -->
						</div>
					<?php endwhile;endif; wp_reset_query(); ?>

				</div>
				<!-- /.ccr-team-item -->
			</div>
		</div>	<!-- /.ccr-item-bg -->
	</div>	<!-- /.ccr-item -->
</section>