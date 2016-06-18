<?php
/**
 * The template for displaying all single posts and attachments
 * 文章页面
 * @package WordPress
 * @subpackage fBiz
 * @author tishonator
 * @since fBiz 1.0.0
 *
 */

 get_header(); ?>

<?php fbiz_show_page_header_section(); ?>

<div id="main-content-wrapper">

	<div id="main-content">

		<?php if ( have_posts() ) :
	
				while ( have_posts() ) :
				
					the_post();

					get_template_part( 'content', get_post_format() );//根据文章类型加载相应的模板
					
					// if comments are open or there's at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
	
					wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fbiz' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
	
					?>

					<div class="post-links">
						
						<div class="left">
							<?php previous_post_link(); ?>
						</div>
						
						<div class="right">
							<?php next_post_link(); ?>
						</div>	
					</div>
	
				<?php
					endwhile; 
				?>

		  <?php else :

				get_template_part( 'content', 'none' );//获取content-none.php的内容

		  endif; // end of have_posts()
		  ?>

	</div><!-- #main-content -->
	
</div><!-- #main-content-wrapper -->

<!--<?php get_footer(); ?>-->