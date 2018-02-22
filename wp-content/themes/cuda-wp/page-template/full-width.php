<?php
/**
 * The template for displaying all single posts.
 * Template Name: Full-width Template, No Sidebar
 * @package cuda-wp
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php cuda_post_nav(); ?>


				<?php endwhile; // end of the loop. ?>
			

		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>