<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package cuda-wp
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="container error-404 not-found">
			<header class="page-header">
				<center>
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'cuda' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cuda' ); ?></p>
				</center>
			</header><!-- .page-header -->

			<div class="page-content">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					
					<?php get_search_form(); ?>
				</div>
				<div class="col-sm-3"></div>
				

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
