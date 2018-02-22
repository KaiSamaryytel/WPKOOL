<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package iThemer
 */

get_header(); ?>

	<!-- Start Blog -->
		<section id="blog" class="section archive single">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="row">

			<?php

				get_template_part( 'template-parts/content', 'none' );

			?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

