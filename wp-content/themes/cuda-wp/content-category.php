<?php
/**
 * @package cuda-wp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>" title=""><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>

		<div class="entry-meta">
			<?php cuda_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php the_post_thumbnail( ); ?>
	<div class="entry-content">

		<?php the_excerpt(); ?>
		<div class="read-more">
			<a href="<?php the_permalink(); ?>"><?php _e("Read More", 'cuda-wp') ?></a>
		</div>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'cuda' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php cuda_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		
		
	</article><!-- #post-## -->
