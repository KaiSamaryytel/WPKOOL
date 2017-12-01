<!-- Start the Loop. -->
<?php global $post;
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--Start post-->
        <div id="post-<?php the_ID(); ?>" <?php post_class('animated'); ?>>
            <div class="post_thumbnil">	
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                    </a>
                    <?php
                } else {
                    echo compass_main_image();
                }
                ?>
            </div>
            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <div class="post_content"> 
                <ul class="post_meta">
                    <li class="posted_by"><span><i class="fa fa-user hi-icon"></i></span><?php the_author_posts_link(); ?></li>
                    <li class="posted_in"><span><i class="fa fa-bookmark hi-icon"></i></span><?php the_category(', '); ?></li>
                    <li class="post_date"><span><i class="fa fa-clock-o hi-icon"></i></span><?php echo get_the_time('M, d, Y') ?></li>
                    <li class="postc_comment"><span><i class="fa fa-comments hi-icon"></i></span><?php comments_popup_link(NO_CMNT, ONE_CMNT, '% ' . CMNT); ?></li>
                </ul>
        <?php the_excerpt(); ?><a class="read_more" href="<?php the_permalink() ?>"><?php echo CONTINUE_READING_DOTS; ?></a>
            </div>
        </div>
    <?php endwhile;
else:
    ?>
    <div class="post">
        <p>
    <?php echo SORRY_NO_POST_MATCHED; ?>
        </p>
    </div>
<?php endif; ?>
<div class="clear"></div>
<!--End post-->