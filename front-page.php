<?php get_header(); ?>


<?php fbiz_display_slider(); ?>
<style type="text/css">
	table,tr,td{
		border: 0px;
	}
</style>
<div id="container_content">

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="main-colume">
	<tr>
		<td class="col-left">
			<table id="col-title">
				<tr>
				<td id="col-title-name">本科生教育概况</td>
				<td id="col-more"><a href="#" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr>
			</table>
			<table id="col-list">
				<tr>
					<?php
					query_posts('cat=16&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
				</tr>
			</table>
		</td>
		<td class="col-spliter"></td>
		<td class="col-right">
			<table id="col-title">
				<tr>
					<td id="col-title-name">教学新闻</td>
					<td id="col-more"><a href="#" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr></table>
			<table id="col-list">
				<tr>
					<?php
					query_posts('cat=17&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="main-colume">
	<tr>
		<td class="col-left">
			<table id="col-title">
				<tr>
				<td id="col-title-name">实践教学</td>
				<td id="col-more"><a href="" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr>
			</table>
			<table id="col-list">
				<tr>
					<?php
					query_posts('cat=4&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
				</tr>
			</table>
		</td>
		<td class="col-spliter"></td>
		<td class="col-right">
			<table id="col-title">
				<tr>
					<td id="col-title-name">课程信息</td>
					<td id="col-more"><a href="" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr></table>
			<table id="col-list">
				<tr>
					<?php
					query_posts('cat=2&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="main-colume">
	<tr>
		<td class="col-left">
			<table id="col-title">
				<tr>
				<td id="col-title-name">研学信息</td>
				<td id="col-more"><a href="" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr>
			</table>
			<table id="col-list">
				<tr>
					<?php
					query_posts('cat=5&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
				</tr>
			</table>
		</td>
		<td class="col-spliter"></td>
		<td class="col-right">
			<table id="col-title">
				<tr>
					<td id="col-title-name">交流升学</td>
					<td id="col-more"><a href="" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr></table>
			<table id="col-list">
				<?php
					query_posts('cat=6&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
			</table>
		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="main-colume">
	<tr>
		<td class="col-left">
			<table id="col-title">
				<tr>
				<td id="col-title-name">常见问题</td>
				<td id="col-more"><a href="" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr>
			</table>
			<table id="col-list">
				<tr>
					<?php
					query_posts('cat=18&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
				</tr>
			</table>
		</td>
		<td class="col-spliter"></td>
		<td class="col-right">
			<table id="col-title">
				<tr>
					<td id="col-title-name">下载专区</td>
					<td id="col-more"><a href="" id="more">更多..</a></td>
				</tr>
			</table>
			<table id="col-holder">
			<tr ><td width="100%"><div class="ribbon"><br></div><td></tr></table>
			<table id="col-list">
				<?php
					query_posts('cat=12&showposts=8&orderby=new'); //showposts=8表示10篇
					while(have_posts()): the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"target="_blank"><?php echo wp_trim_words( get_the_title(),25);?></a><p id="artical-time"><?php the_time(get_option('date_format')) ?></p></li> 
					<?php endwhile; ?>
			</table>
		</td>
	</tr>
</table>
</div>


<div class="clear">
</div><!-- .clear -->


<div id="main-content-wrapper">
	<?php //get_sidebar( 'home' ); ?>

</div>

<?php get_footer(); [upme_registration]?>
