<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage fBiz
 * @author tishonator
 * @since fBiz 1.0.0
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php edit_post_link( __( '编辑页面', 'fbiz' ), '<span class="edit-icon">', '</span>' ); ?>
	<?php if ( !is_user_logged_in() )  : ?>

					<span class="comments-icon">
						<p>您不能编辑该页面，请先<a href="http://10.7.0.66:8080/wp-login.php">登录</a></p>
					</span><!-- .comments-icon -->
		
		<?php endif; ?>
		
	
	<div class="page-content">
		<?php fbiz_the_content_single(); ?>
	</div><!-- .page-content -->
	
	<div class="page-after-content">
	
		<!-- .author-icon -->
		
		<?php if ( ! post_password_required() ) : ?>

			<?php if ('open' == $post->comment_status) : ?>

					<span class="comments-icon">
						<?php comments_popup_link(__( 'No Comments', 'fbiz' ), __( '1 Comment', 'fbiz' ), __( '% Comments', 'fbiz' ), '', __( 'Comments are closed.', 'fbiz' )); ?>
					</span><!-- .comments-icon -->

			<?php endif; ?>
				

		<?php endif; ?>

	</div><!-- .page-after-content -->
	
</article><!-- #post-## -->