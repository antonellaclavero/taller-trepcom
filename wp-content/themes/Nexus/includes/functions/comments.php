<?php if ( ! function_exists( 'et_custom_comments_display' ) ) :
function et_custom_comments_display($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment-body clearfix">
			<div class="comment_avatar">
				<?php echo get_avatar( $comment, $size = '60' ); ?>
			</div>

			<div class="comment_postinfo">
				<?php printf( '<span class="fn">%s</span>', get_comment_author_link() ); ?>
				<p>
					<span class="comment_date">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s', 'Nexus' ), get_comment_date() );
					?>
					</span>
					<?php edit_comment_link( esc_html__( '(Edit)', 'Nexus' ), ' ' ); ?>
				</p>
			<?php
				$et_comment_reply_link = get_comment_reply_link( array_merge( $args, array(
					'reply_text' => esc_attr__( 'Post a Reply', 'Nexus' ),
					'depth'      => (int) $depth,
					'max_depth'  => (int) $args['max_depth'],
				) ) );
			?>
			</div> <!-- .comment_postinfo -->

			<div class="comment_area">
				<?php if ( '0' == $comment->comment_approved ) : ?>
					<em class="moderation"><?php esc_html_e('Your comment is awaiting moderation.','Nexus') ?></em>
					<br />
				<?php endif; ?>

				<div class="comment-content clearfix">
				<?php
					comment_text();
					if ( $et_comment_reply_link ) echo '<span class="reply-container">' . $et_comment_reply_link . '</span>';
				?>
				</div> <!-- end comment-content-->
			</div> <!-- end comment_area-->
		</article> <!-- .comment-body -->
<?php }
endif;