<?php
/**
 * The template for displaying all single posts.
 *
 * @package cuda-wp
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="col-sm-8">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php cuda_post_nav(); ?>


				<?php endwhile; // end of the loop. ?>
			</div>

			<div class="col-sm-4">		
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>