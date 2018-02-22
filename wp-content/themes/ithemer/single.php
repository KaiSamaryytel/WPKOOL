<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package iThemer
 */

get_header(); ?>




		<!-- Start Blog -->
		<section id="blog" class="section archive single">
			<div class="container">
				<div class="row">
					<?php	if ( ! is_active_sidebar( 'sidebar-1' ) ): ?>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<?php else: ?>
						<div class="col-md-8 col-sm-12 col-xs-12">
						<?php endif; ?>
						<div class="row">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' ); 
                            
		 // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
