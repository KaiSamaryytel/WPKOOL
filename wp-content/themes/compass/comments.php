<!-- You can start editing here. -->
<div id="commentsbox">
    <?php if (have_comments()) : ?>
        <h3 id="comments">
            <?php comments_number('No Responses', 'One Response', '% Responses'); ?>
            so far.</h3>
        <ol class="commentlist">
            <?php wp_list_comments(array('avatar_size' => 100)); ?>
        </ol>
        <div class="comment-nav">
            <div class="alignleft">
                <?php previous_comments_link() ?>
            </div>
            <div class="alignright">
                <?php next_comments_link() ?>
            </div>
        </div>
    <?php else : // this is displayed if there are no comments so far ?>
        <?php if (comments_open()) : ?>
            <!-- If comments are open, but there are no comments. -->
        <?php else : // comments are closed  ?>
            <!-- If comments are closed. -->
            <?php
            global $post;
            if ($post->post_type == 'post') {
                ?>
                <h3 class="nocomments"><?php echo CMNT_CLSD; ?></h3>
            <?php } 
            endif; 
            endif; 
            if (comments_open()) : 
                comment_form(); 
            endif; // if you delete this the sky will fall on your head  ?>
</div>
