<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iThemer
 */

get_header(); ?>


	<!-- Start Blog -->
		<section id="blog" class="section archive">
			<div class="container">
				<div class="row">
					<?php	if ( ! is_active_sidebar( 'sidebar-1' ) ): ?>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<?php else: ?>
						<div class="col-md-8 col-sm-12 col-xs-12">
						<?php endif; ?>
						<div class="row">

		<?php
		if ( have_posts() ) : 

			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div>		
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
