<?php
/**
 * Template part for displaying posts
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
                <div class="date">
                    <div class="day"><span><?php echo get_the_date('j'); ?></span>
                        <?php echo get_the_date( 'M'); ?>
                    </div>
                    <div class="year">
                        <?php echo get_the_date( 'Y'); ?>
                    </div>
                </div>
                <?php the_title( '<h1 class="entry-title">', '</h1>' );  ?>
                <div class="meta">
                    <?php ithemer_posted_by(); ?>
                    <?php ithemer_entry_footer(); ?>

                </div>
                <?php   the_content(); 
                        wp_link_pages( array( 'before'=> '
                                            <div class="page-links">' . esc_html__( 'Pages:', 'ithemer' ), 
                                             'after' => '</div>', ) ); 
                    ?>
            </div>
        </div>
        <!--/ End Single Blog -->
    </div>
</article>
<!-- #post-<?php the_ID(); ?> -->