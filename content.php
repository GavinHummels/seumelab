<?php
/**
 * The default template for displaying content
 * 
 * Used for single, index, archive, and search contents.
 * is_single()判断是不是单一文章,如果不是单一文章，则会应用到列表页中(archive.php)
 * @package WordPress
 * @subpackage fbiz
 * @author tishonator
 * @since fBiz 1.0.0
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( !is_single() ) :?> 
			
			<ul class="entry-title">
				<a href="<?php echo esc_url(get_permalink());?>" rel="bookmark"><?php the_title();?>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" style="float: right;    margin-right: 80px;"><?php the_time(get_option('date_format')); ?></time>
				</a>
			</ul>
			<div class = "underline"> </div>
        
	<?php else : ?>
	<div class="before-content">
		<span class="author-icon">
			<?php the_author_posts_link(); ?>
		</span><!-- .author-icon -->
		<?php if ( !is_single() && get_the_title() === '' ) : ?>

				<span class="clock-icon">
					<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
						<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time(get_option('date_format')); ?></time>
					</a>
				</span><!-- .clock-icon -->
	
		<?php else : ?>

				<span class="clock-icon">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time(get_option('date_format')); ?></time>
				</span><!-- .clock-icon -->
			
		<?php endif; ?>
		
		<?php if ( ! post_password_required() ) :
					$format = get_post_format();
						if ( current_theme_supports( 'post-formats', $format ) ) :
							printf( '<span class="%1$s-icon"> <a href="%2$s">%3$s</a></span>',
									$format,							
									esc_url( get_post_format_link( $format ) ),
									get_post_format_string( $format )
								);
						endif;
				
			   endif;
		?>
		
		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

					<span class="comments-icon">
						<?php comments_popup_link(__( '暂无评论', 'fbiz' ), __( '1 Comment', 'fbiz' ), __( '% Comments', 'fbiz' ), '', __( 'Comments are closed.', 'fbiz' )); ?>
					</span><!-- .comments-icon -->
		
		<?php endif; ?>
		
		<?php edit_post_link( __( '编辑本文', 'fbiz' ), '<span class="edit-icon">', '</span>' ); ?>

	</div><!-- .以上是文章作者信息，评论，编辑栏内容 -->
	<?php endif; ?>
	<?php if ( is_single() ) : ?>

				<div class="content content_margin">
					<?php 
					fbiz_the_content_single();  
					add_ftp_res_list($post->ID);//创建ftp资源列表
					?>
				</div><!-- .content -->
	
	<?php endif; ?>



</article>
	