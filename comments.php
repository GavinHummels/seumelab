<?php
/**
 * The template for displaying comments
 * 评论模块的布局
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage fBiz
 * @author tishonator
 * @since fBiz 1.0.0
 *
 */
 
if ( post_password_required() ) {
	return;
}
?>

	<?php if ( have_comments() ) : ?>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

		<div class="comment-navigation">
		   
			<div class="alignleft"><?php previous_comments_link(); ?>
			</div><!-- .alignleft -->
	
			<div class="alignright"><?php next_comments_link(); ?>
			</div><!-- .alignright -->
			
		</div><!-- .comment-navigation -->

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'fbiz' ); ?></p>
	<?php endif; ?>

	<?php 
	$fields =  array(
	'author' => '<p class="comment-form-author">' . '<label for="author">' . __( '姓名' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
	'email'  => '<p class="comment-form-email"><label for="email">' . __( '学号' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
	'url'    => '<p class="comment-form-url"><label for="url">' . __( '邮箱' ) . '</label>' .
	'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
	);
	comment_form(array(
        'fields'               => $fields
    	)
	); ?>