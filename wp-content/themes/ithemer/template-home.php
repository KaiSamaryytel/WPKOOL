<?php
/*
*	Template Name: FrontPage
*
*/	
 get_header(); ?>
		
<?php
get_template_part( 'sections/ithemer', 'about' );
get_template_part( 'sections/ithemer', 'service' );
get_template_part( 'sections/ithemer', 'portfolio' );
get_template_part( 'sections/ithemer', 'counter' );
get_template_part( 'sections/ithemer', 'experience' );
get_template_part( 'sections/ithemer', 'testimonials' );
get_template_part( 'sections/ithemer', 'blog');
get_template_part('sections/ithemer',  'callto');
get_template_part('sections/ithemer',  'contact');
get_template_part('sections/ithemer','clients');

?>
<?php get_footer(); ?>
