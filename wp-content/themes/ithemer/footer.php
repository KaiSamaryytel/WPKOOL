<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iThemer
 */

?>					

				</div>
			</div>
		</section>
		<!--/ End Blog -->	

<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' )  ): ?>
		<!-- Footer Top -->
			<section id="blog" class="section archive footer">
			<div class="container">
				<div class="row">
					<!-- Single Widget -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
					</div>
					<!--/ End Single Widget -->
				</div>
			</div>
		</section>
		<!--/ End footer Top -->
<?php endif; ?>
	
		<!-- Start Footer -->
		<footer id="footer">
			<!-- Arrow -->
			<!--/ End Arrow -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Copyright -->
						<div class="copyright">
							<p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ithemer' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ithemer' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ithemer' ), 'iThemer', '<a href="http://ithemer.com/">iThemer</a>' );
			?></p>
						</div>
						<!--/ End Copyright -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Social -->
						<ul class="social">
							             <?php if(get_theme_mod('ithemer_facebook_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_facebook_url')); ?>"><i class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
										<?php if(get_theme_mod('ithemer_twitter_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_twitter_url')); ?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_theme_mod('ithemer_linkedin_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_linkedin_url')); ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_theme_mod('ithemer_youtube_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_youtube_url')); ?>"><i class="fa fa-youtube"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_theme_mod('ithemer_pinterest_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_pinterest_url')); ?>"><i class="fa fa-pinterest"></i></a></li>
                                        <?php endif; ?>
						</ul>
						<!--/ End Social -->
					</div>
				</div>
			</div>
		</footer>
		<!--/ End Footer -->
	


		<?php wp_footer(); ?>
    </body>
</html>