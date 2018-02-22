<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iThemer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <!-- Single Blog -->
        <div class="single-blog">
            <div class="blog-head">
                <?php if(has_post_thumbnail()){ $arg=array( 'class'=> 'img-responsive' ); the_post_thumbnail('ithemer-list-thumb',$arg); } ?>

            </div>
            <div class="blog-info">
                <?php the_title(); ?>
                <?php the_content(); wp_link_pages( array( 'before'=> '
                <div class="page-links">' . esc_html__( 'Pages:', 'ithemer' ), 'after' => '</div>', ) ); ?>
                
            </div>
        </div>
        <!--/ End Single Blog -->
    </div>
</article>
<!-- #post-<?php the_ID(); ?> -->