<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--Start Post-->
        <div class="post">
            <!--Start Post Data-->
            <div class="post_data">
                <div class="post_date"> <span class="month"> <?php echo get_the_time('M') ?></span> <span class="date"><?php echo get_the_time('d') ?></span> </div>
                <div class="post_meta">
                    <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a></h1>
                    <ul class="p_meta">
                        <li class="posted_by">By&nbsp;<a href="#">
                                <?php the_author_posts_link(); ?>
                            </a>&nbsp;&nbsp;&nbsp; <?php
                            $archive_year = get_the_time('Y');
                            $archive_month = get_the_time('m');
                            $archive_day = get_the_time('d');
                            ?>
                            <a href="<?php
                            echo get_day_link($archive_year, $archive_month, $archive_day);
                            ?>"><?php echo get_the_time('m, d, Y') ?></a></li>
                        <li class="post_comment"><a href="#">
                               <?php
                               comments_popup_link('No Comments.', '1 Comment.', '% Comments.');
                               ?>
                            </a></li>
                        <li class="post_category">
                                <?php the_category(', '); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End Post data-->
            <!--Start Post content-->
            <div class="post_content">
        <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
            <?php
            regalway_get_thumbnail(621, 251);
            ?>
                <?php } else { ?>
                    <?php
                    regalway_get_image(621, 251);
                    ?> 
                    <?php
                }
                ?>
                <?php the_excerpt(); ?>
                <div class="clear"></div>
                <?php if (has_tag()) { ?>
                    <div class="tag">
                    <?php
                    the_tags('Post Tagged with ', ', ', '');
                    ?>
                    </div>
                    <?php } ?>
                <a class="read_more" href="<?php the_permalink() ?>"></a> </div>
            <!--End Post content-->
        </div>
        <!--End Post-->
                <?php
            endwhile;
        else:
            ?>
    <div class="post">
        <p>
    <?php
    _e('Sorry, no posts matched your criteria.', 'regalway');
    ?>
        </p>
    </div>
        <?php endif; ?>
<!--End Loop-->
