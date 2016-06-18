<?php
/**
 * The template for displaying search results pages.
 *
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

		<div id="infoTxt">
			<?php printf( __( '您正在搜索 "%s". 以下是搜索结果:', 'fbiz' ),
						get_search_query() );
			?>
		</div><!-- #infoTxt -->

		<?php if ( have_posts() ) :

					// starts the loop
					while ( have_posts() ) :
	
						the_post();
	
						/*
						 * include the post format-specific template for the content.
						 */
						get_template_part( 'content', get_post_format() );
	
					endwhile; // end of have_posts()
					?>
					<div class="navigation">
						<?php echo paginate_links( array( 'prev_next' => '', ) ); ?>
					</div><!-- .navigation -->
					
		<?php else :

				// if no content is loaded, show the 'no found' template
				get_template_part( 'content', 'none' );
			
		      endif; // end of have_posts()
		      ?>

	</div><!-- #main-content -->


</div><!-- #main-content-wrapper -->

<?php get_footer(); ?>