<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package iThemer
 */



if ( ! function_exists( 'ithemer_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function ithemer_posted_by() {

		

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'By: %s', 'post author', 'ithemer' ),
			'<span><i class="fa fa-user"></i><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'ithemer_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function ithemer_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'ithemer' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span><i class="fa fa-tags" aria-hidden="true"></i><span class="cat-links">' . esc_html__( 'Category:%1$s', 'ithemer' ) . '</span></span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'ithemer' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span><i class="fa fa-tags" aria-hidden="true"></i><span class="tags-links">' . esc_html__( 'Tag: %1$s:', 'ithemer' ) . '</span></span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span><i class="fa fa-comments"></i><span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Comments<span class="screen-reader-text"> on %s</span>', 'ithemer' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span></span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'ithemer' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="edit-link">',
			'</span>'
		);
	}
endif;
