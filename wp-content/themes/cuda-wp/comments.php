<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package cuda-WP
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comment-section container" id="comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3 class="title">
			<?php comments_number( __('0 Comment', 'cuda-wp' ), __('1 Comment', 'cuda-wp' ), __('% Comments', 'cuda-wp' ) ); ?>
		</h3>

       <ul class="comment-list">

            <?php
                wp_list_comments( array(
                    'style'       => 'li',
                    'short_ping'  => true,
                    'callback' => 'cuda_comment',
                    'avatar_size' => 100
                ) );
            ?>
        </ul><!-- .comment-list -->

		<?php 

		// are there comments to navigate through 
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'cuda-wp' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'cuda-wp' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'cuda-wp' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'cuda-wp' ); ?></p>
		<?php endif; ?>


		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'cuda-wp' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'cuda-wp' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'cuda-wp' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>



	<?php //comment_form(); ?>


			<?php
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$fields =  array(
				'author' => '<input id="author" name="author" type="text" placeholder="Name" value=""size="30"' . $aria_req . '/>',
				'email'  => '<input id="email" name="email" type="email" placeholder="Email" value="" size="30"' . $aria_req . '/>',
				'url'  => '<input id="url" name="url" type="url" placeholder="Website" value="">',
				);

			$comments_args = array(
				'fields' =>  $fields,
				'id_form'          			=> 'commentform',
				'title_reply'       		=> __( 'Leave a Comment', 'cuda-wp' ),
				'title_reply_to'    		=> __( 'Leave a Comment to %s', 'cuda-wp' ),
				'cancel_reply_link' 		=> __( 'Cancel Comment', 'cuda-wp' ),
				'label_submit'      		=> __( 'Post Comment', 'cuda-wp' ),
				'comment_notes_before'      => '',
				'comment_notes_after'       => '',
				'comment_field'             => '<textarea id="comment" name="comment" placeholder="Message" rows="8" required></textarea>',
				'label_submit'              => 'Submit Comment'
				);
			ob_start();
			comment_form($comments_args);
			echo str_replace('class="comment-form"','class="comment-form row"',ob_get_clean());
			echo str_replace('class="form-submit"','class="form-submit col-md-12"',ob_get_clean());
			?>


</div><!-- #comments -->
