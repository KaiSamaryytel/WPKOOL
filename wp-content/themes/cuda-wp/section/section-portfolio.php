<?php 
global $cuda_opt;
$portfolio_menu = $cuda_opt['cuda_portfolio_menu']; 
$portfolio_id= strtolower(str_replace(' ', '_', $portfolio_menu));
?>
<section id="<?php echo $portfolio_id; ?>">
	<div id="ccr-portfolio">
		<div class="ccr-portfolio-bg">
			<div class="container">
				<div class="ccr-portfolio-title element_from_top">
					<h1><?php echo $cuda_opt['cuda_portfolio_title'] ?></h1>
					<div class="ccr-line"></div>
					<!-- /.ccr-line -->
				</div>
				<!-- /.ccr-portfolio-title -->
				<div class="ccr-portfolio-slug element_from_left">
					<?php echo $cuda_opt['cuda_portfolio_des'] ?>
				</div> <!-- /.ccr-skill-slug -->	

				<div class="ccr-portfolio-isotop-menu element_fade_in">
					<div class="filter">
						<ul class="ccr-menu">
							<li><button class="selected" data-filter="all">All</button></li>
							<?php
							$filters = get_terms( 'filter' );

							foreach ($filters as $filter) {
								echo "<li><button data-filter='$filter->slug'>$filter->name</button></li>";
							}

							?>
						</ul>
					</div>

					<ul class="ccr-portfolio-item isotope posts">
						<?php 
						query_posts('post_type=portfolio&taxonomy=filter' ); 
						
						if(have_posts()) : while(have_posts()) : the_post(); 
						$terms = wp_get_post_terms(get_the_ID(), 'filter' );
						//$t = array();
						foreach($terms as $term) 
						?> 
						<li class="all <?php echo $term->slug; ?> col-xs-12 col-sm-6">

							<?php the_post_thumbnail(); ?>
							<h3><?php the_title(); ?></h3>
						</li>
						<!-- /.ccr-first-portfolio -->
					<?php endwhile;endif; wp_reset_query();?>

					<!-- /.ccr-fourth-portfolio -->
				</ul>
				<!-- /.ccr-portfolio-item -->
				<!-- <button type="button" class="ccr-button btn btn-default">LOAD MORE PROJECT</button> -->
			</div>
			<!-- /.ccr-portfolio-isotop-menu -->
		</div>
	</div>
	<!-- /#ccr-portfolio-bg -->
</div><!-- /#ccr-portfoli -->
</section>