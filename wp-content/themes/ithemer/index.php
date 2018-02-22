	<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
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

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile; ?>

				<ul class="pagination">
				<?php the_posts_pagination( array(
		                                'mid_size' => 2,
		                                'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'ithemer' ),
		                                'next_text' => __( '<span aria-hidden="true">&raquo;</span>', 'ithemer' ),
		                            ) );  ?>
		         </ul>

				<?php	else:

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</div>		
		</div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
