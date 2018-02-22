<?php 
/**
 * The template for displaying home page content.
 * Template Name: Front Page
 * @package cuda-wp
 */
get_header(); ?>
<?php 

if($cuda_opt['section_slider_display']) { 
	get_template_part('slider' );
}else{ ?>

<section id="ccr-slider">
	<div class="slider-section">
		<div class="container">
			<span class="element_fade_in">

				<?php echo $cuda_opt['cuda_slider_off_text']; ?>

			</span>
			<a href="<?php echo $cuda_opt['cuda_slider_off_link']; ?>" type="button" class="ccr-button btn btn-default element_from_bottom"><?php echo $cuda_opt['cuda_slider_off_link_text']; ?></a>
			<!-- /.ccr-button -->
		</div>
	</div><!-- /.ccr-slider -->
</section>

<?php	} ?>
<?php get_template_part('section' ); ?>

<?php get_footer(); ?>
